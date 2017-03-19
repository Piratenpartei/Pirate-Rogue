<?php
/**
 * Additional features to allow styling of the templates
 *
 */

 /*-----------------------------------------------------------------------------------*/
 /* Extends the default WordPress body classes
 /*-----------------------------------------------------------------------------------*/
 function pirate_rogue_body_class( $classes ) {
     	$classes[] = 'uku-standard';
	 
        if ('colorful' != get_theme_mod( 'pirate_rogue_socialmedia_style' ) ) {
            $classes[] = 'socialmedia-'.get_theme_mod( 'pirate_rogue_socialmedia_style' );
	}
        if ('darkcolor' != get_theme_mod( 'pirate_rogue_search_overlay_backgroundcolor' ) ) {
            $classes[] = 'searchbar-'.get_theme_mod( 'pirate_rogue_search_overlay_backgroundcolor' );
	}
        
	 
	 // If no sidebar for pages defined, make the page without sidebar ;)
	 if ( is_page() &&  !is_active_sidebar( 'sidebar-2' )) {
		 $classes[] = 'no-sidebar';
	 }
	 if (('' != get_theme_mod( 'uku_front_hideauthor' ) ) || ('' != get_theme_mod( 'uku_all_hideauthor' ) )) {
             $classes[] = 'no-author';
         }
	 
	 if ( '' != get_the_post_thumbnail ()) {
		 $classes[] = 'has-thumb';
	 }
	 if ( has_header_image() ) {
		 $classes[] = 'headerimg-on';
	 }
	 if ( '' != get_theme_mod( 'uku_hidecomments' ) ) {
		 $classes[] = 'toggledcomments';
	 }
	 if ( '' != get_theme_mod( 'uku_customlogo' ) ) {
		 $classes[] = 'custom-logo-on';
	 }
	 if ( '' != get_theme_mod( 'uku_hidetagline' ) ) {
		 $classes[] = 'hide-tagline';
	 }
	 if ('sidebar-left' == get_theme_mod( 'uku_sidebar' ) ) {
		 $classes[] = 'sidebar-left';
	 }
	 if ( is_page_template( 'page-templates/no-sidebar.php' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if ('sidebar-no' == get_theme_mod( 'uku_sidebar' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if (is_single() && 'sidebar-no-single' == get_theme_mod( 'uku_sidebar_hide' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if (is_front_page() && 'sidebar-no-front' == get_theme_mod( 'uku_sidebar_hide' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if ('sidebar-no' == get_theme_mod( 'uku_sidebar_hide' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if ('' != get_theme_mod( 'uku_featuredtag' ) ) {
		 $classes[] = 'slider-on';
	 }
	 if ('slider-boxed' == get_theme_mod( 'uku_sliderstyle' ) ) {
		 $classes[] = 'slider-boxed';
	 }
	 if ('slider-fullscreen' == get_theme_mod( 'uku_sliderstyle' ) ) {
		 $classes[] = 'slider-fullscreen';
	 }
	 if ('slider-fade' == get_theme_mod( 'uku_slideranimation' ) ) {
		 $classes[] = 'slider-fade';
	 }
	 if ('header-boxed' == get_theme_mod( 'uku_headerstyle' ) ) {
		 $classes[] = 'header-boxed';
	 }
	 if ('header-fullscreen' == get_theme_mod( 'uku_headerstyle' ) ) {
		 $classes[] = 'header-fullscreen';
	 }
	 if ('dark' == get_theme_mod( 'uku_fixedheader' ) ) {
		 $classes[] = 'hide-header-sticky';
	 }

	 if ( ! is_active_sidebar( 'sidebar-offcanvas' ) ) {
		 $classes[] = 'offcanvas-widgets-off';
	 }
	 if (is_single()) {
	    if ( comments_open() && '' != get_theme_mod ( 'uku_hidecomments' ) && '0' == get_comments_number() ) {
		    $classes[] = 'comments-show';
	    }
	 }

	 // Option to add body classes via custom fields
	 if ( get_post_meta( get_the_ID(), 'sidebar-left', true ) ) {
		 $classes[] = 'sidebar-left';
	 }
	 if ( get_post_meta( get_the_ID(), 'no-sidebar', true ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if ( get_post_meta( get_the_ID(), 'header-fullscreen', true ) ) {
		 $classes[] = 'header-fullscreen';
	 }
	 if ( get_post_meta( get_the_ID(), 'header-boxed', true ) ) {
		 $classes[] = 'header-boxed';
	 }
	 if ( get_post_meta( get_the_ID(), 'slider-boxed', true ) ) {
		 $classes[] = 'slider-boxed';
	 }
	 if ( get_post_meta( get_the_ID(), 'slider-fullscreen', true ) ) {
		 $classes[] = 'slider-fullscreen';
	 }
	 if ( get_post_meta( get_the_ID(), 'slider-on', true ) ) {
		 $classes[] = 'slider-on';
	 }
	 if ( get_post_meta( get_the_ID(), 'headerimg-on', true ) ) {
		 $classes[] = 'headerimg-on';
	 }
	 if ( get_post_meta( get_the_ID(), 'blog', true ) ) {
		 $classes[] = 'blog';
	 }
	 if ( get_post_meta( get_the_ID(), 'headerfont-light', true ) ) {
		 $classes[] = 'headerfont-light';
	 }
	 if ( get_post_meta( get_the_ID(), 'imagefont-dark', true ) ) {
		 $classes[] = 'imagefont-dark';
	 }
	 if ( get_post_meta( get_the_ID(), 'disable-share', true ) ) {
		 $classes[] = 'disable-share';
	 }
	 if ( get_post_meta( get_the_ID(), 'post_class', true) == 'no-thumb' ) {
		 $classes[] = 'no-thumb';
	 }
         
         if (is_404()) {
              $classes[] = 'no-sidebar';
              // No diebadr for 404 pages due to danger of loops cause of 404-files in sidebar :)
         } 

	 // Additional body classes for WooCommerce
	 if ( is_active_sidebar( 'sidebar-shop' )) {
		 $classes[] = 'sidebar-shop';
	 }

	 return $classes;
 }
 add_filter( 'body_class', 'pirate_rogue_body_class' );
