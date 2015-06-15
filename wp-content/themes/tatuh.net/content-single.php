<?php
/**
 * @package semplicemente
 */
?>

<div class="header-links">

<?php

$categories = get_the_category();
$category_id = $categories[0]->cat_ID;

$args = array( 'category' => $category_id);

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

<?php 
$labelName = get_post_meta($post->ID, "label-name", true);
if($labelName) : ?>
		<a href="<?php the_permalink(); ?>"><span class="label-link label-main"><?php echo $labelName; ?></span></a>
<?php endif; ?>

<?php endforeach;
wp_reset_postdata();
?>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'semplicemente' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
