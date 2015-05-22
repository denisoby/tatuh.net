<?php
/**
 * @package semplicemente
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
<div class="thumbnail thumbnail-post thumbnail-left">
<?php
if ( '' != get_the_post_thumbnail() ) {
echo '<a href="' .get_permalink(). '">';
the_post_thumbnail('normal-post');
echo '</a>';
}
?>
</div>
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'semplicemente' ),
				'after'  => '</div>',
			) );
		?>
<a class="readMoreLink" href="<?php echo get_permalink(); ?>"><?php _e('Читать дальше', 'semplicemente') ?><i class="fa spaceLeft fa-angle-double-right"></i></a>
</div><!-- .entry-content -->

	<footer class="entry-footer">	
<?php if ( 'post' == get_post_type() ) : ?>
<div class="entry-meta">
<?php edit_post_link( __( 'Edit', 'semplicemente' ), '<span class="edit-link"><i class="fa fa-pencil-square-o spaceRight"></i>', '</span>' ); ?>
<?php semplicemente_posted_on(); ?>
<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
<span class="comments-link"><i class="fa fa-comment-o spaceRight"></i><?php comments_popup_link( __( 'Комментарии', 'semplicemente' ), __( '1 Comment', 'semplicemente' ), __( '% Comments', 'semplicemente' ) ); ?></span>
<?php endif; ?>
</div><!-- .entry-meta -->
<?php endif; ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->