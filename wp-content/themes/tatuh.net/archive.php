<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package semplicemente
 */

get_header(); ?>
<?php
	if (is_category()) {
    		$cat = get_query_var('cat');
    		$category = get_category($cat);
	}
?>
	<?php if($category->parent != 0 || is_single()) : ?>
			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
				<?php if(function_exists('bcn_display'))
    					{
        					bcn_display();
    					}?>
			</div>
	<?php endif; ?>
	<section class="content-area">
		<main id="main" class="site-main" role="main">

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

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
