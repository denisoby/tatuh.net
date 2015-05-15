<?php
/**
 * Main Index page template.
 */
?>

<!-- get header.php -->
<?php get_header(); ?>

		<!-- page header -->
		<?php if (! is_home()) {
		  get_template_part('templates/page', 'header');
		} ?>

		<!-- no posts alert -->
		<?php if (!have_posts()) : ?>
		  <div class="alert alert-warning">
		    <?php _e('Извините, ничего не найдено.', 'daisy-blue'); ?>
		  </div>
		  <?php get_search_form(); ?>
		<?php endif; ?>

		<!-- Hello Post -->
		<?php if (is_home()) {
		$helloPost = get_page_by_title( 'Добро пожаловать' );
		$helloPostContent = apply_filters('the_content', $helloPost->post_content); 
		echo $helloPostContent;  
		} ?>		

		<!-- content post formats -->
		<?php while (have_posts()) : the_post(); ?>
		  <?php get_template_part('templates/content', get_post_format()); ?>
		<?php endwhile; ?>

		<!-- post pagination -->
		<?php daisyblue_pagination(); ?>

		</main><!-- /.main -->

		<!-- sidebar/widget area -->
		<?php if (daisyblue_display_sidebar()) : ?>
		<aside class="<?php echo daisyblue_sidebar_class(); ?>" role="complementary">
		  <?php get_sidebar(); ?>
		</aside><!-- .sidebar -->
		<?php endif; ?>

	</div><!-- .content -->

<?php get_footer(); ?>