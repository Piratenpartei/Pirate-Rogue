<?php
/**
 * The template for displaying Comments.
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

 /*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area cf">

	<?php if ( '' != get_theme_mod( 'uku_hidecomments' ) ) : ?>
		<button id="comments-toggle"><span class="comments-title"><?php printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'pirate-rogue'), number_format_i18n( get_comments_number() ) ); ?></span></button>
	<?php else : ?>
		<h3 class="comments-title">
		<?php
			printf(
				esc_html( _nx( '1 comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'pirate-rogue') ),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
		?>
		</h3>
	<?php endif; ?>

	<div class="comments-content cf">

	<?php if ( have_comments() ) : ?>
		<ol class="commentlist">
			<?php
				wp_list_comments( array( 'callback' => 'uku_comment' ) );
			?>
		</ol><!-- end .comment-list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
			<nav id="nav-comments">
				<div class="nav-previous"><?php previous_comments_link( ( '<span>' . esc_html__( 'Older Comments', 'pirate-rogue') . '</span>' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( ( '<span>' . esc_html__( 'Newer Comments', 'pirate-rogue') . '</span>' ) ); ?></div>
			</nav><!-- end #comment-nav -->
			<?php endif; // check for comment navigation ?>

		<?php
			// If comments are closed and there are no comments, let's leave a little note, shall we?
			if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
			<p class="nocomments"><?php esc_html_e( 'Comments are closed.', 'pirate-rogue'); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php 
	    $comments_note = '';
	    if ( '' != get_theme_mod( 'pirate_rogue_commentdisclaimer' ) ) {
		$comments_note = '<p class="disclaimer">'.wp_kses_post( get_theme_mod( 'pirate_rogue_commentdisclaimer' ) ).'</p>';		
	    }
					
	    $comment_args = array(
		'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<p class="comment-form-author">' . '<label for="author">' . esc_html__( 'Name', 'pirate-rogue') . '</label><input id="author" name="author" type="text" placeholder="' . esc_html__( 'Name', 'pirate-rogue') . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true"/></p>',
		'email'  => '<p class="comment-form-email">' . '<label for="email">' . esc_html__( 'Email', 'pirate-rogue') . '</label> ' . ( $req ? '<span>*</span>' : '' ) . '<input id="email" name="email" type="text" placeholder="' . esc_html__( 'Email', 'pirate-rogue') . '" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true"/>'.'</p>',
		'url'    => '<p class="comment-form-url"><label for="url">' . esc_html__( 'Website', 'pirate-rogue') . '</label>' . '<input id="url" name="url" type="text" placeholder="' . esc_html__( 'Website', 'pirate-rogue') . '" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
		    'comment_notes_after' => '',
		   
		) ), 
		'title_reply_after'	=> '</h3>'.$comments_note,
	);
	
	comment_form($comment_args); ?>

	</div><!-- end .comments-content -->
</div><!-- end #comments .comments-area -->
