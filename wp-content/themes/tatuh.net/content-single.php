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

<?php if(get_post_meta($post->ID, "label-name", true)) : ?>
		<a href="<?php the_permalink(); ?>"><span class="label-link label-main"><?php echo get_post_meta($post->ID, "label-name", true); ?></span></a>
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

	<footer class="entry-footer">
<div class="entry-meta">
<?php semplicemente_posted_on(); ?>
<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
<span class="comments-link"><i class="fa fa-comments-o spaceRight"></i><?php comments_popup_link( __( 'Комментировать', 'semplicemente' ), __( '1 Комментарий', 'semplicemente' ), __( '% Комментариев', 'semplicemente' ) ); ?></span>
<?php endif; ?>
</div><!-- .entry-meta -->

<?php edit_post_link( __( 'Edit', 'semplicemente' ), '<span class="edit-link"><i class="fa fa-pencil-square-o spaceRight"></i>', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
