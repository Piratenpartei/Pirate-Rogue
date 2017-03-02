<?php
/**
 * Implement a custom logo for Uku
 *
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @package Uku
 * @since Uku 1.0
 * @version 1.0.1
 */

function uku_custom_header_setup() {
	$args = array(
		'default-image'          => '',
		'default-text-color'     => '2b2b2b',
		'width'                  => 1440,
		'height'                  => 530,
		'flex-width'             => false,
		'flex-height'            => true,
		'wp-head-callback'       => 'uku_header_style',
	);

	add_theme_support( 'custom-header', $args );

}
add_action( 'after_setup_theme', 'uku_custom_header_setup', 11 );

/**
 * Style the header text displayed on the blog.
 */
function uku_header_style() {
	$header_image = get_header_image();
	$header_text_color   = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	if ( empty( $header_image ) && get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color )
	return;

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="uku-header-css">
	<?php
		if ( ! empty( $header_image ) and  display_header_text()) :
	?>

	<?php
		endif;

		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
	h1.site-title,
	p.site-title,
	p.site-description {
		position: absolute;
		clip: rect(1px, 1px, 1px, 1px);
	}
	<?php

		// If the user has set a custom color for the text, use that.
	elseif ( get_theme_support( 'custom-header', 'default-text-color' ) != $header_text_color ) :
	?>
	h1.site-title a,
	p.site-title a,
	p.site-description {
		color: #<?php echo esc_attr( $header_text_color ); ?>;
	}
	<?php endif; ?>
	</style>
	<?php
}
