<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package semplicemente
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<div class="comments-title"><h2>Комментарии:</h2></div>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => '70',
					'reply_text'        =>  '<small>' .__( 'Ответить'  , 'semplicemente' ) . '<i class="fa fa-level-down spaceLeft"></i></small>',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<div class="nav-previous"><?php previous_comments_link( __( '<i class="fa spaceRight fa-angle-double-left"></i>Older Comments', 'semplicemente' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments<i class="fa spaceLeft fa-angle-double-right"></i>', 'semplicemente' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Комментарии отключены.', 'semplicemente' ); ?></p>
	<?php endif; ?>

	<?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(
		'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' placeholder="' . __( 'Имя *'  , 'semplicemente' ) . '"/></p>',
		'email'  => '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' placeholder="' . __( 'Email *'  , 'semplicemente' ) . '"/></p>',
		'url'    => '<p class="comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . __( 'Website'  , 'semplicemente' ) . '"/></p>',
	);
	$required_text = __(' Обязательные поля отмечены ', 'semplicemente').' <span class="required">*</span>';
	?>
	<?php comment_form( array(
		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'Вы должны быть <a href="%s">авторизованы</a> чтобы комментировать.' , 'semplicemente' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Ваш логин: <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Выйти?</a>'  , 'semplicemente' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		'comment_notes_before' => '<p class="comment-notes">' . __( 'Ваш email не будет виден никому.'  , 'semplicemente' ) . ( $req ? $required_text : '' ) . '</p>',
		'title_reply' => __( 'Комментировать'  , 'semplicemente' ),
		'title_reply_to' => __( 'Ответить для %s'  , 'semplicemente' ),
		'cancel_reply_link' => __( 'Отмена ответа'  , 'semplicemente' ) . '<i class="fa fa-times spaceLeft"></i>',
		'label_submit' => __( 'Послать'  , 'semplicemente' ),
		'comment_field' => '<div class="clear"></div><p class="comment-form-comment"><textarea id="comment" name="comment" rows="8" aria-required="true" placeholder="' . __( 'Комментарий *'  , 'semplicemente' ) . '"></textarea></p>'
	)); 
	?>

</div><!-- #comments -->
