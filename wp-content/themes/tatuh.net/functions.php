<?php
/**
 * semplicemente functions and definitions
 *
 * @package semplicemente
 */

if (!function_exists('semplicemente_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

// allow media uploads to contributors
if ( current_user_can('contributor') && !current_user_can('upload_files') )
	add_action('admin_init', 'allow_contributor_uploads');

function allow_contributor_uploads() {
	$contributor = get_role('contributor');
	$contributor->add_cap('upload_files');
}

// remove image attributes and [CAPTION]
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height|alt|class)="[^"]*?"\s/', "", $html );
   return $html;
}

add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

// remove deafault quicktags
function remove_quicktags( $qtInit ) {
    $qtInit['buttons'] = 'link';
    return $qtInit;
}
add_filter('quicktags_settings', 'remove_quicktags');

// add more buttons to the html editor
function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script type="text/javascript">
	QTags.addButton( 'eg_header_2', 'h2', '<h2>', '</h2>', 'none', 'Header 2 tag', 1 );
	QTags.addButton( 'eg_header_3', 'h3', '<h3>', '</h3>', 'none', 'Header 3 tag', 2 );
	QTags.addButton( 'eg_strong', 'Жирный', '<strong>', '</strong>', 'none', 'Strong tag', 3 );
	QTags.addButton( 'eg_em', 'Курсив', '<em>', '</em>', 'none', 'EM tag', 4 );
	QTags.addButton( 'eg_ul', 'Список НЕнумерованный','<ul>\n<li><p>Text</p></li>\n<li><p>Text</p></li>\n<li><p>Text</p></li>\n<li><p>Text</p></li>\n<li><p>Text</p></li>\n</ul>\n', '', 'none', 'UL tag', 5 );
	QTags.addButton( 'eg_ol', 'Список нумерованный','<ol>\n<li><p>Text</p></li>\n<li><p>Text</p></li>\n<li><p>Text</p></li>\n<li><p>Text</p></li>\n<li><p>Text</p></li>\n</ol>\n', '', 'none', 'OL tag', 6 );
	QTags.addButton( 'eg_p', 'p', '<p>', '</p>', 'none', 'P simple tag', 7 );
	QTags.addButton( 'eg_ul', 'ul', '<ul>\n', '\n</ul>', 'none', 'UL simple tag', 8 );
	QTags.addButton( 'eg_ol', 'ol', '<ol>\n', '\n</ol>', 'none', 'OL simple tag', 9 );
	QTags.addButton( 'eg_li', 'li', '<li><p>', '</p></li>', 'none', 'LI simple tag', 10 );
    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );

    function pagination($pages = '', $range = 4)
    {
        $showitems = ($range * 2) + 1;

        global $paged;
        if (empty($paged)) $paged = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if (!$pages) {
                $pages = 1;
            }
        }

        if (1 != $pages) {
            echo "<div class=\"pagination\"><span>Страница " . $paged . " из " . $pages . "</span>";

            if ($paged > 1) echo "<a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo; Назад</a>";

            for ($i = 1; $i <= $pages; $i++) {
                if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                    echo ($paged == $i) ? "<span class=\"current\">" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class=\"inactive\">" . $i . "</a>";
                }
            }

            if ($paged < $pages) echo "<a href=\"" . get_pagenum_link($paged + 1) . "\">Далее &rsaquo;</a>";

            if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) echo "<a href='" . get_pagenum_link($pages) . "'>Last &raquo;</a>";

            echo "</div>\n";
        }
    }

    function semplicemente_setup()
    {

        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rel_canonical');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

        /**
         * Set the content width based on the theme's design and stylesheet.
         */
        global $content_width;
        if (!isset($content_width)) {
            $content_width = 702;
        }

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on semplicemente, use a find and replace
         * to change 'semplicemente' to the name of your theme in all the template files
         */
        load_theme_textdomain('semplicemente', get_template_directory() . '/languages');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        add_image_size('normal-post', 720, 9999);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'semplicemente'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        // Setup the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('semplicemente_custom_background_args', array(
            'default-color' => 'f2f2f2',
            'default-image' => '',
        )));
    }
endif; // semplicemente_setup
add_action('after_setup_theme', 'semplicemente_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function semplicemente_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'semplicemente'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<div class="widget-title"><h3>',
        'after_title' => '</h3></div>',
    ));
}

add_action('widgets_init', 'semplicemente_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function semplicemente_scripts()
{
    wp_enqueue_style('semplicemente-style', get_stylesheet_uri());
    wp_enqueue_style('semplicemente-fontAwesome', get_template_directory_uri() . '/css/font-awesome.min.css');

    wp_enqueue_script('semplicemente-custom', get_template_directory_uri() . '/js/jquery.semplicemente.js', array('jquery'), '1.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'semplicemente_scripts');

/**
 * Replace more Excerpt
 */
function semplicemente_new_excerpt_more($more)
{
    global $post;
    return ' ...';
}

add_filter('excerpt_more', 'semplicemente_new_excerpt_more');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load the Theme Options Page for social media icons
 */
require get_template_directory() . '/inc/theme-options.php';

/**
 * Load Semplicemente Dynamic.
 */
require get_template_directory() . '/inc/semplicemente-dynamic.php';