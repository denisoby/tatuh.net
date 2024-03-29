<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package semplicemente
 */

if ( ! function_exists( 'semplicemente_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function semplicemente_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<div class="nav-links">
<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'semplicemente_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function semplicemente_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav" aria-hidden="true"><i class="fa spaceRight fa-angle-double-left"></i></span>&nbsp;%title');
				next_post_link( '<div class="nav-next">%link</div>', '%title&nbsp;<span class="meta-nav" aria-hidden="true"><i class="fa spaceLeft fa-angle-double-right"></i></span>');
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'semplicemente_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function semplicemente_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( '<i class="fa fa-calendar spaceRight"></i>%s', 'post date', 'semplicemente' ), $time_string
	);

	$byline = sprintf(
		_x( '<i class="fa fa-user spaceRight"></i>%s', 'post author', 'semplicemente' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function semplicemente_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'semplicemente_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'semplicemente_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so semplicemente_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so semplicemente_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in semplicemente_categorized_blog.
 */
function semplicemente_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'semplicemente_categories' );
}
add_action( 'edit_category', 'semplicemente_category_transient_flusher' );
add_action( 'save_post',     'semplicemente_category_transient_flusher' );
