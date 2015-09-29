<?php
/**
 * @package semplicemente
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
<div class="thumbnail thumbnail-left">
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
		<a class="readMoreLink" href="<?php echo get_permalink(); ?>"><?php _e('Читать дальше', 'semplicemente') ?><i class="fa spaceLeft fa-angle-double-right"></i></a>
</div><!-- .entry-content -->
</article><!-- #post-## -->