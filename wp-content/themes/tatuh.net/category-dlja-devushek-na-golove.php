<?php
/**
 * Category Template: FSeoCatDljaDevushekNaGolove
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
Подбор татуировки на голове для девушек
</h1>
<div class="header-links">
<a href="http://tatuh.net/vybor-mesta/dlya-devushek/na-golove/golova.html">
<span class="label-link label-main">голова</span>
</a>
<a href="http://tatuh.net/vybor-mesta/dlya-devushek/na-golove/ushi.html">
<span class="label-link label-main">ухо и заушье</span>
</a>
<a href="http://tatuh.net/vybor-mesta/dlya-devushek/na-golove/sheya.html">
<span class="label-link label-main">шея</span>
</a>
</div>
</header>
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