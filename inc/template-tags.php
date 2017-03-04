<?php
/**
 * Custom Pirate Rogue template tags
 *
 */


 if ( ! function_exists( 'uku_posted_on' ) ) :
 /**
	* Prints HTML with meta information for the current post-date/time and author.
	*/
 function uku_posted_on() {
 	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

 	$time_string = sprintf( $time_string,
 		esc_attr( get_the_date( 'c' ) ),
 		esc_html( get_the_date() )
 	);

 	$posted_on = sprintf(
 		esc_html_x( '%s', 'post date', 'uku' ),
 		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
 	);

 	$byline = sprintf(
 		esc_html_x( '%s', 'post author', 'uku' ),
 		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
 	);
        
        if (('' != get_theme_mod( 'uku_front_hideauthor' ) ) || ('' != get_theme_mod( 'uku_all_hideauthor' ) )) {
                /* Do not show author information */
        } else {
           echo '<div class="entry-author"> ' . $byline . '</div>';
        }
 	
        echo '<div class="entry-date">' . $posted_on . '</div>';

 }
 endif;


 if ( ! function_exists( 'uku_posted_by' ) ) :
 /**
	* Prints Post Author Information
	*/
 function uku_posted_by() {
     if (('' != get_theme_mod( 'uku_front_hideauthor' ) ) || ('' != get_theme_mod( 'uku_all_hideauthor' ) )) {
         return;
     }
    $byline = sprintf(
    /* translators: used to show post author name */
    esc_html_x( '%s', 'post author', 'uku' ),
    '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html__( 'by ', 'uku' ) . esc_html( get_the_author() ) . '</a></span>'
    );

    echo '<span class="entry-author"> ' . $byline . '</span>';

}
 endif;
