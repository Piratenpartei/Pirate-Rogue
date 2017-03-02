<?php


/*-----------------------------------------------------------------------------------*/
/* Styles.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_enqueue_styles() {
    $parent_style = 'uku-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'pirate_rogue_enqueue_styles' );

/*-----------------------------------------------------------------------------------*/
/* Deactive Google Fonts loaded by Uku
/*-----------------------------------------------------------------------------------*/
function uku_fonts_url() {
    // No Google Fonts
    return;
}

/*-----------------------------------------------------------------------------------*/
/* Remove unwanted functions
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_remove_uku_options() {
    remove_image_size( 'uku-neo-big');
    remove_image_size( 'uku-neo-blog');
    remove_image_size('uku-neo-featuredbottom');
}
add_action( 'after_setup_theme', 'pirate_rogue_remove_uku_options', 11 ); 

/*-----------------------------------------------------------------------------------*/
/* Remove filters from parent
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_remove_parent_filters(){ //Have to do it after theme setup, because child theme functions are loaded first
   remove_filter('init', 'uku_body_class');
   add_action( 'wp_head', 'uku_customize_css');

}
add_action( 'after_setup_theme', 'pirate_rogue_remove_parent_filters' );
/*-----------------------------------------------------------------------------------*/
/* Remove unwantet actions
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_remove_parent_actions() {
    remove_action( 'customize_register', 'uku_customize_register' );
    remove_action( 'customize_register', 'uku_customize_css' );
}
add_action( 'after_setup_theme', 'pirate_rogue_remove_parent_actions', 9 );
/*-----------------------------------------------------------------------------------*/
/* Load helper functions
/*-----------------------------------------------------------------------------------*/
require_once( get_stylesheet_directory() . '/inc/helper-functions.php' );
/*-----------------------------------------------------------------------------------*/
/* Custom Fields and metaboxes belonging to them
/*-----------------------------------------------------------------------------------*/
require_once( get_stylesheet_directory() . '/inc/custom-fields.php' );

/*-----------------------------------------------------------------------------------*/
/* Customizer changes to uku
/*-----------------------------------------------------------------------------------*/
require get_stylesheet_directory() . '/inc/customizer.php';

/*-----------------------------------------------------------------------------------*/
/* Additional features to allow styling of the templates.
/*-----------------------------------------------------------------------------------*/
require get_stylesheet_directory(). '/inc/template-functions.php' ;

/*-----------------------------------------------------------------------------------*/
/* This is the end of the code as we know it
/*-----------------------------------------------------------------------------------*/