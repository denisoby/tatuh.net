<?php
/**
 * Category Template: FSeoCatTemplate
 */
?>

<?php get_header();?>
<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<header class="page-header">
	Текущий раздел: <strong><?php single_cat_title(); ?></strong>
	Подразделы:
	<ul>
	<?php
	$id = get_query_var('cat');
	$args = array(	'parent' => $id );
	foreach (get_categories($args) as $cat) : ?>
	<li>
	<a href="<?php echo get_category_link($cat->term_id); ?>">
		<strong><?php echo $cat->cat_name; ?></strong>
	</a>
	</li>
	<?php endforeach; ?>
	</ul>
	</header>

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