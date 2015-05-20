<?php
/**
 * @package semplicemente
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( '' != get_the_post_thumbnail() ) {
			echo '<div class="entry-featuredImg">';
			the_post_thumbnail('normal-post');
			echo '</div>';
		}
	?>
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
<span class="comments-link"><i class="fa fa-comments-o spaceRight"></i><?php comments_popup_link( __( 'Комментировать', 'semplicemente' ), __( '1 Comment', 'semplicemente' ), __( '% Comments', 'semplicemente' ) ); ?></span>
<?php endif; ?>
</div><!-- .entry-meta -->

<?php edit_post_link( __( 'Edit', 'semplicemente' ), '<span class="edit-link"><i class="fa fa-pencil-square-o spaceRight"></i>', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
