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
	return;
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
            $html = '<a';
            if ( !is_front_page() ) {
		$html .= ' href="'.esc_url( home_url( '/' ) ).'"';
		$html .= ' rel="home"';
	    }
            if (!empty($linkclass)) {
		    $html .= ' class="'.$linkclass.'"';
            }
            if (!empty($linktitle)) {
                $html .= ' title="'.$linktitle.'"';
            }
	    $html .= '>';
	    $html .=  wp_get_attachment_image( $custom_logo_id, 'full', false, array(
		    'class'    => $imgclass,
		    'itemprop' => 'logo',
		) );

	  
            $html .= '</a>';
	   if ( is_front_page() ) {
               $html .= '<meta itemprop="url" content="'.esc_url( home_url( '/' ) ).'">';
           }
	// } elseif ( is_customize_preview() ) {
	    // If no logo is set but we're in the Customizer, leave a placeholder (needed for the live preview).
	//    $html = sprintf( '<a href="%1$s" class="custom-logo-link" style="display:none;"><img class="custom-logo"/></a>',
	//	esc_url( home_url( '/' ) )
	//    );
	}

	return $html;
    }
endif;
