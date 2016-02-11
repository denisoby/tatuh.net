<?php
/**
 * The template for displaying all single posts.
 *
 * @package semplicemente
 */

get_header(); ?>

<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php /*if(function_exists('bcn_display'))
    {
        bcn_display();
    }*/?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 2 Хедер -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0017098879698018"
     data-ad-slot="7215452157"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
$args = array( 'category' => $category_id);
$myposts = get_posts( $args );
//rename array
$tstarray = array();

foreach ( $myposts as $post ) : setup_postdata( $post );
	$labelName = get_post_meta($post->ID, "label-name", true);
	if($labelName) $tstarray[$labelName] = get_permalink();
endforeach;
wp_reset_postdata();

if($tstarray){
	echo '<div class="header-links">';
	echo('Быстрые ссылки: ');
	foreach ( $tstarray as $key => $value ) {
		echo'<a href="' . $value . '"><span class="label-link label-main">' . $key . '</span></a>' . "\n";
	}
	echo '</div>';
}
?>
	<div class="content-area">

		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>