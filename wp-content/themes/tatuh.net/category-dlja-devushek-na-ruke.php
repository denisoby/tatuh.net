<?php
/**
 * Category Template: FSeoCatDljaDevushekNaRuke
 */
?>
<?php get_header();?>
<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<section class="content-area">
<main id="main" class="site-main" role="main">
<article>
<header class="page-header">
<h1 class="entry-title">
Подбор татуировки на руке для девушек
</h1>
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
</header>
<div class="entry-content">
<p>Пряча кожу под очередным рисунком, ты всё больше оголяешь душу. Нанося крошечный значок на ладошку, ты даёшь ключик от своей души тому, кто возьмёт тебя за руку. Создавая вместе с тату-мастером новый узор, ты рассказываешь всему миру о том, какая ты на самом деле. Тот, кто увидит и поймёт, станет самым близким тебе человеком.</p>
</div>
</article>
<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php semplicemente_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>
</main>
</section>
<?php get_sidebar(); ?>

<?php get_footer();?>