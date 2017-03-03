<?php


/*-----------------------------------------------------------------------------------*/
/* Init custom header functions
/* @link http://codex.wordpress.org/Custom_Headers
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_custom_header_setup() {
	$args = array(
		'default-image'          => '',
		'default-text-color'     => '2b2b2b',
		'width'                  => 1440,
		'height'                  => 530,
		'flex-width'             => false,
		'flex-height'            => true,
		'wp-head-callback'       => 'pirate_rogue_header_style',
	);

	add_theme_support( 'custom-header', $args );
	
	

}
add_action( 'after_setup_theme', 'pirate_rogue_custom_header_setup');


/*-----------------------------------------------------------------------------------*/
/* Style the header text displayed on the blog.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_header_style() {
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
	elseif (esc_attr( $header_text_color ) && get_theme_support( 'custom-header', 'default-text-color' ) != $header_text_color ) :
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

/*-----------------------------------------------------------------------------------*/
/* Own Custom Logo function to get logo without link on startpage and with defined classes
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'pirate_rogue_get_custom_logo' ) ) :
    function pirate_rogue_get_custom_logo($imgclass='custom-logo', $linkclass = 'custom-logo-link', $linktitle='') {
	$html = '';
	$switched_blog = false;
	$blog_id = 0;

	$custom_logo_id = get_theme_mod( 'custom_logo' );
	if ( $custom_logo_id ) {
	    if ((! is_front_page()) &&  (! is_home())) { 
		$html = '<a href="'.esc_url( home_url( '/' ) ).'"';
		if (!empty($linkclass)) {
		    $html .= ' class="'.$linkclass.'"';
		}
		if (!empty($linktitle)) {
		    $html .= ' title="'.$linktitle.'"';
		}
		$html .= ' rel="home" itemprop="url">';
	    }
	    
	    $html .=  wp_get_attachment_image( $custom_logo_id, 'full', false, array(
		    'class'    => $imgclass,
		    'itemprop' => 'logo',
		) );

	    if ((! is_front_page()) &&  (! is_home())) { 
		$html .= '</a>';
	    }
	} elseif ( is_customize_preview() ) {
	    // If no logo is set but we're in the Customizer, leave a placeholder (needed for the live preview).
	    $html = sprintf( '<a href="%1$s" class="custom-logo-link" style="display:none;"><img class="custom-logo"/></a>',
		esc_url( home_url( '/' ) )
	    );
	}

	return $html;
    }
endif;
