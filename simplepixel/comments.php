<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SimplePixel
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

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3 class="comments-title">
			<?php
			$simplepixel_comment_count = get_comments_number();
			if ( '1' === $simplepixel_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One COMMENT', 'simplepixel' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s COMMENT', '%1$s COMMENTS', $simplepixel_comment_count, 'comments title', 'simplepixel' ) ),
					number_format_i18n( $simplepixel_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'simplepixel' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	//comment_form();
	?>

<?php 
	$args = array(
	'fields' => apply_filters(        
	'comment_form_default_fields', array(
	'author' =>'<div class="cmm-box-left"><div class="control-group"><div class="controls">'. '<input id="author" placeholder="'.__( 'Name *', 'simplepixel' ).'" name="author" type="text" value="' .
	esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" />'.
	'</div></div>',

	'email'  => '<div class="control-group"><div class="controls">' . '<input id="email" placeholder="'.__( 'Email Address *', 'simplepixel' ).'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	'" size="30" aria-required="true" />'  .
	'</div></div>',

	'url'    => '<div class="control-group"><div class="controls">' .
	'<input id="url" name="url" placeholder="'.__( 'Website', 'simplepixel' ).'" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
	'</div></div></div><div class="clearfix"> </div>'
	)
	),

	'comment_field' => '<div class="cmm-box-right"><div class="control-group"><div class="controls">' .
	'<textarea id="comment" name="comment" placeholder="'.__( 'Comment *', 'simplepixel' ).'" cols="45" rows="8" aria-required="true"></textarea>' .
	'</div></div></div>',
	'comment_notes_after' => '',
	'comment_notes_before' => '',
	);
	comment_form($args); 
?>

</div><!-- #comments -->
