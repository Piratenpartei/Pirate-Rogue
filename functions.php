<?php

require_once( get_stylesheet_directory() . '/inc/helper-functions.php' );
require_once( get_stylesheet_directory() . '/inc/custom-fields.php' );


function pirate_rogue_enqueue_styles() {

    $parent_style = 'uku-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

  //  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'pirate_rogue_enqueue_styles' );


function uku_fonts_url() {
    // No Google Fonts
    return;
}


add_action('init', 'remove_uku_neo_image_sizes');
function remove_uku_neo_image_sizes() {
	remove_image_size( 'uku-neo-big');
        remove_image_size( 'uku-neo-blog');
        remove_image_size('uku-neo-featuredbottom');
}
 