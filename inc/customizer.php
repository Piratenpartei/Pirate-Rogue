<?php
/**
 * Implement Theme Customizer additions and adjustments.
 */

function pirate_rogue_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	// Rename the label to "Site Title Color" because this only affects the site title in this theme.
//	$wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Site Title Color', 'uku' );

	// Custom Uku panels:
	$wp_customize->add_panel( 'uku_themeoptions', array(
		'priority' 	               => 1,
		'theme_supports' 	         => '',
		'title' 	                 => esc_html__('Theme Options', 'uku'),
	) );

	$wp_customize->add_section( 'uku_general', array(
		'title' 	               => esc_html__( 'General', 'uku' ),
		'priority' 	               => 2,
		'panel' 		       => 'uku_themeoptions',
	) );

	$wp_customize->add_section( 'uku_header', array(
		'title' 		    => esc_html__( 'Header', 'uku' ),
		'priority' 	            => 3,
		'panel'                     => 'uku_themeoptions',
	) );

	
	$wp_customize->add_section( 'uku_footerfeature', array(
		'title' 		    => esc_html__( 'Footer Featured Area', 'uku' ),
		'priority' 	            => 5,
		'panel' 		    => 'uku_themeoptions',
	) );

	$wp_customize->add_section( 'uku_customcss', array(
		'title'                     => esc_html__( 'Custom CSS', 'uku' ),
		'priority'                  => 6,
		'panel'                     => 'uku_themeoptions',
	) );

	// Custom CSS Section
	$wp_customize->add_setting( 'uku_custom_css_input', array(
		'default'                   => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_custom_css_input', array(
		'label'             => esc_html__( 'Custom CSS', 'uku' ),
		'description'	    => esc_html__( 'Add custom CSS here. Please consider using a child theme for bigger CSS customizations. Also remember that you will loose all custom CSS changes made here, if you change the theme.', 'uku' ),
		'section' 	    => 'uku_customcss',
		'type' 		    => 'textarea',
		'priority'	    => 1,
	) );


	// Uku Front Page Sections.
	$wp_customize->add_panel( 'uku_frontpage', array(
		'priority' 	               => 2,
		'theme_supports' 	         => '',
		'title' 	                 => esc_html__('Blog Front Page', 'uku'),
	) );        
        
	$wp_customize->add_section( 'uku_frontpage_general', array(
		'title' 	               => esc_html__( 'General', 'uku' ),
		'priority' 	               => 1,
		'panel' 	         => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_slider', array(
		'title' 	         => esc_html__( 'Featured Posts Slider', 'uku' ),
		'description'	         => esc_html__( 'Up to 6 posts will show up in the Front page slider. The image dimension for the Featured post images should be at least 1440 x 530 pixels for the standard design style and 1500 x 690 for neo and serif.', 'uku' ),
		'priority' 	         => 3,
		'panel' 	         => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_front_section_one', array(
		'title' 		         => esc_html__( 'Section Featured Top', 'uku' ),
		'priority' 	               => 3,
		'panel' 			        => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_front_section_twocolumn', array(
		'title' 		               => esc_html__( 'Section 2-Columns', 'uku' ),
		'priority' 	               => 4,
		'panel' 					         => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_front_section_threecolumn', array(
		'title' 		               => esc_html__( 'Section 3-Columns', 'uku' ),
		'priority' 	               => 5,
		'panel' 					         => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_front_section_four', array(
		'title' 		               => esc_html__( 'Section Fullwidth', 'uku' ),
		'priority' 	               => 6,
		'panel' 					         => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_front_section_two', array(
		'title' 		               => esc_html__( 'Section Featured Bottom', 'uku' ),
		'priority' 	               => 7,
		'panel' 					         => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_front_section_about', array(
		'title' 		               => esc_html__( 'Section About', 'uku' ),
		'priority' 	               => 8,
		'panel' 					         => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_front_section_three', array(
		'title' 		               => esc_html__( 'Section on Background', 'uku' ),
		'priority' 	               => 9,
		'panel' 					         => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_front_section_fourcolumn', array(
		'title' 		               => esc_html__( 'Section 4-Columns', 'uku' ),
		'priority' 	               => 10,
		'panel' 					         => 'uku_frontpage',
	) );

	$wp_customize->add_section( 'uku_front_section_sixcolumn', array(
		'title' 		               => esc_html__( 'Section 6-Columns', 'uku' ),
		'priority' 	               => 11,
		'panel' 					         => 'uku_frontpage',
	) );



	
	// Uku Site Title - Custom Title and Logo
	$wp_customize->add_setting( 'uku_hidetagline', array(
		'default'		     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_hidetagline', array(
		'label'			     => esc_html__( 'Hide tagline only', 'uku' ),
		'section'		     => 'title_tagline',
		'type'			     => 'checkbox',
		'priority'		     => 22,
	) );

	$wp_customize->add_setting( 'uku_customlogofooter', array(
		'default'		     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_customlogofooter', array(
		'label'			     => esc_html__( 'Show custom logo in footer', 'uku' ),
		'description'		     => esc_html__( '(Only available with the "standard" and "neo" design style, see Theme Options / Design Style.).', 'uku' ),
		'section'		     => 'title_tagline',
		'type'			     => 'checkbox',
		'priority'		     => 23,
	) );

	// Uku Additional Header Options
	$wp_customize->add_setting( 'uku_headerstyle', array(
		'default' 		       => 'header-fullwidth',
		'sanitize_callback' 	     => 'uku_sanitize_headerstyle',
	) );

	$wp_customize->add_control( 'uku_headerstyle', array(
		'label' 		   => esc_html__( 'Header Image Style', 'uku' ),
		'description'		    => esc_html__( 'Choose the Header image style you like to use.', 'uku' ),
		'section' 		    => 'header_image',
		'priority' 	           => 10,
		'type' 		           => 'select',
		'choices' 						     => array(
					'header-fullwidth' 	 => esc_html__( 'fullwidth', 'uku' ),
					'header-boxed' 			 => esc_html__( 'boxed', 'uku' ),
					'header-fullscreen'  => esc_html__( 'fullscreen (serif and standard only)', 'uku' ),
		),
	) );

	$wp_customize->add_setting( 'uku_custom_header_intro', array(
		'default' 		     => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_custom_header_intro', array(
		'label' 		      => esc_html__( 'Header Image Intro Text', 'uku' ),
		'description'		    => esc_html__( 'Add a short intro text that will displayed centered on your header image. (Design style "serif" only.)', 'uku' ),
		'section' 		      => 'header_image',
		'type' 			      => 'textarea',
		'priority'		     => 11,
	) );

	$wp_customize->add_setting( 'uku_scrolldownbtn_text', array(
		'default' 		        => 'Scroll Down',
		'sanitize_callback'	   => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_scrolldownbtn_text', array(
		'label'			     => esc_html__( 'Customize "Scroll Down" button text', 'uku' ),
		'description'	     => esc_html__( '(Design style "serif" only.)', 'uku' ),
		'section' 		       => 'header_image',
		'type' 		              => 'text',
		'priority'		   => 12,
	) );

	// Uku Theme Options - General
	$wp_customize->add_setting( 'uku_sidebar', array(
		'default' 	        => 'sidebar-right',
		'sanitize_callback'	=> 'uku_sanitize_sidebar',
	) );

	$wp_customize->add_control( 'uku_sidebar', array(
		'label' 	     => esc_html__( 'Sidebar Position', 'uku' ),
		'section' 	  => 'uku_general',
		'priority'                => 2,
		'type' 			  => 'select',
		'choices'     => array(
					'sidebar-right' 	   => esc_html__( 'sidebar right', 'uku' ),
					'sidebar-left' 		   => esc_html__( 'sidebar left', 'uku' ),
		),
	) );

	$wp_customize->add_setting( 'uku_sidebar_hide', array(
		'default' 		    => 'sidebar-show',
		'sanitize_callback' 	     => 'uku_sanitize_sidebar_hide',
	) );

	$wp_customize->add_control( 'uku_sidebar_hide', array(
		'label' 	  => esc_html__( 'Sidebar Visibility', 'uku' ),
		'section' 	  => 'uku_general',
		'priority' 	  => 3,
		'type' 		 => 'select',
		'choices' 	  => array(
                    'sidebar-show'	 => esc_html__( 'Show sidebar', 'uku' ),
                    'sidebar-no'	 => esc_html__( 'Hide sidebar', 'uku' ),
                    'sidebar-no-single'	 => esc_html__( 'Hide sidebar on single posts', 'uku' ),
                    'sidebar-no-front'	 => esc_html__( 'Hide sidebar on Front page', 'uku' ),
		),
	) );

	
	
	
	$wp_customize->add_setting( 'uku_hidecomments', array(
		'default'		    => '',
		'sanitize_callback' 	    => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_hidecomments', array(
		'label'			    => esc_html__( 'Show Comments button on single posts', 'uku' ),
		'description'		    => esc_html__( '(Hides comments behind a Show Comments button on single posts.)', 'uku' ),
		'section'		    => 'uku_general',
		'type'			    => 'checkbox',
		'priority'		    => 4,
	) );
	
	
	$wp_customize->add_setting( 'pirate_rogue_commentdisclaimer', array(
		'default'		    => '',
		'sanitize_callback' 	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_commentdisclaimer', array(
		'label'			    => esc_html__( 'Comment Disclaimer', 'uku' ),
		'description'		    => esc_html__( 'Disclaimer shown preview to comment form. (HTML is allowed)', 'uku' ),
		'section'		    => 'uku_general',
		'type'			    => 'textarea',
		'priority'		    => 5,
	) );
	

	$wp_customize->add_setting( 'pirate_rogue_credit', array(
		'default'		    => '',
		'sanitize_callback'	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_credit', array(
		'label'			    => esc_html__( 'Footer credit text', 'uku' ),
		'description'		    => esc_html__( 'Customize the footer credit text. (HTML is allowed)', 'uku' ),
		'section'		    => 'uku_general',
		'type'			    => 'text',
		'priority'		    => 6,
	) );

	// Uku Theme Options - Header
	$wp_customize->add_setting( 'uku_hidesearch', array(
		'default'		     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_hidesearch', array(
		'label'		     => esc_html__( 'Hide search in Header', 'uku' ),
		'section'	     => 'uku_header',
		'type'		     => 'checkbox',
		'priority'	     => 1,
	) );


	$wp_customize->add_setting( 'pirate_rogue_socialmedia_style', array(
		'default' 	         => 'colorful',
		'sanitize_callback'      => 'pirate_rogue_sanitize_socialmedia_style',
	) );

	$wp_customize->add_control( 'pirate_rogue_socialmedia_style', array(
		'label'         => esc_html__( 'Social Media Icon Style', 'uku' ),
		'description'	=> esc_html__( 'Choose the color of the social media icons (needs a items in Social media menu position). Notice: This will also chance the color of the search icon and the hamburger overlay icon.', 'uku' ),
		'section' 	=> 'uku_header',
		'priority'      => 3,
		'type' 		=> 'select',
		'choices'   => array(
                    'colorful'      => esc_html__( 'Colorful Social Media Icons', 'uku' ),
                    'maincolor'     => esc_html__( 'Use main color', 'uku' ),
                    'secondcolor'   => esc_html__( 'Use second color', 'uku' ),
		),
	) );
        
        $wp_customize->add_setting( 'pirate_rogue_search_overlay_backgroundcolor', array(
		'default' 	         => 'darkcolor',
		'sanitize_callback'      => 'pirate_rogue_sanitize_search_overlay_backgroundcolor',
	) );

	$wp_customize->add_control( 'pirate_rogue_search_overlay_backgroundcolor', array(
		'label'         => esc_html__( 'Search Background Style', 'uku' ),
		'description'	=> esc_html__( 'Choose the background color of the overlay search input', 'uku' ),
		'section' 	=> 'uku_header',
		'priority'      => 3,
		'type' 		=> 'select',
		'choices'   => array(
                    'darkcolor'      => esc_html__( 'Dark grey', 'uku' ),
                    'maincolor'     => esc_html__( 'Main color', 'uku' ),
                    'secondcolor'   => esc_html__( 'Second color', 'uku' ),
		),
	) );
        

	$wp_customize->add_setting( 'uku_fixedheader', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_fixedheader', array(
		'label'		     => esc_html__( 'Hide fix-positioned Header', 'uku' ),
		'description'	     => esc_html__( '(By default the fix-positioned Header is visible on wider screens, if the browser window is scrolled.)', 'uku' ),
		'section'	     => 'uku_header',
		'type'		     => 'checkbox',
		'priority'	     => 4,
	) );

        
	// Uku Theme Options - Big Footer Feature Area
	$wp_customize->add_setting( 'uku_footerfeature_title', array(
		'default' 	       => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_footerfeature_title', array(
		'label' 	      => esc_html__( 'Title', 'uku' ),
		'description'     => esc_html__( 'A small title text visible at the top of the area.', 'uku' ),
		'section' 	        => 'uku_footerfeature',
		'type' 		        => 'text',
		'priority'	     => 1,
	) );

	$wp_customize->add_setting( 'uku_footerfeature_image', array(
		'default' 	           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'uku_footerfeature_image', array(
				'label'			     => esc_html__( 'Upload Featured image', 'uku' ),
				'section'		     => 'uku_footerfeature',
				'priority'	     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_footerfeature_text_big', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_footerfeature_text_big', array(
		'label' 	             => esc_html__( 'Big Text', 'uku' ),
		'section' 		           => 'uku_footerfeature',
		'type' 		               => 'textarea',
		'description'			     => esc_html__( 'A big slogan text next to the image (HTML is allowed.)', 'uku' ),
		'priority'			     => 3,
	) );

	$wp_customize->add_setting( 'uku_footerfeature_text_small', array(
		'default'		    => '',
		'sanitize_callback' 	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_footerfeature_text_small', array(
		'label' 		    => esc_html__( 'Small Text', 'uku' ),
		'description'		    => esc_html__( 'An additional smaller description text below the big text (HTML is allowed.)', 'uku' ),
		'section' 		    => 'uku_footerfeature',
		'type' 			    => 'textarea',
		'priority'						     => 4,
	) );

	$wp_customize->add_setting( 'uku_footerfeature_btn_text', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_footerfeature_btn_text', array(
		'label' 			             => esc_html__( 'Button Text', 'uku' ),
		'description'					     => esc_html__( 'If you want to add a "Call to Action" button, include the button text here.', 'uku' ),
		'section' 			           => 'uku_footerfeature',
		'type' 			               => 'text',
		'priority'						     => 5,
	) );

	$wp_customize->add_setting( 'uku_footerfeature_btn_link', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'uku_footerfeature_btn_link', array(
		'label' 			             => esc_html__( 'Button Link URL', 'uku' ),
		'description'					     => esc_html__( 'The URL the button should link to.', 'uku' ),
		'section' 			           => 'uku_footerfeature',
		'type' 			               => 'text',
		'priority'						     => 6,
	) );


	// Uku Front Page - General
	$wp_customize->add_setting( 'uku_front_hideblog', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_hideblog', array(
		'label'				     => esc_html__( 'Hide default blog on Front page', 'uku' ),
		'section'			     => 'uku_frontpage_general',
		'type'				     => 'checkbox',
		'priority'			     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_hidedate', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_hidedate', array(
		'label'				     => esc_html__( 'Hide date on Front page', 'uku' ),
		'section'			     => 'uku_frontpage_general',
		'type'				     => 'checkbox',
		'priority'			     => 2,
	) );

	$wp_customize->add_setting( 'uku_front_hidecomments', array(
		'default'							     => '',
		'sanitize_callback'		     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_hidecomments', array(
		'label'			    => esc_html__( 'Hide comments count on Front page', 'uku' ),
		'section'		    => 'uku_frontpage_general',
		'type'			    => 'checkbox',
		'priority'		    => 3,
	) );

	$wp_customize->add_setting( 'uku_front_hidecats', array(
		'default'							     => '',
		'sanitize_callback'		     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_hidecats', array(
		'label'			     => esc_html__( 'Hide categories on Front page', 'uku' ),
		'section'		     => 'uku_frontpage_general',
		'type'		     => 'checkbox',
		'priority'		     => 4,
	) );

	$wp_customize->add_setting( 'uku_front_hideauthor', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_hideauthor', array(
		'label'			     => esc_html__( 'Hide author name on Front page', 'uku' ),
		'section'		     => 'uku_frontpage_general',
		'type'			     => 'checkbox',
		'priority'		     => 5,
	) );

        $wp_customize->add_setting( 'uku_all_hideauthor', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_all_hideauthor', array(
		'label'			     => esc_html__( 'Hide author name on all pages', 'uku' ),
		'section'		     => 'uku_frontpage_general',
		'type'			     => 'checkbox',
		'priority'		     => 5,
	) );
        
	$wp_customize->add_setting( 'uku_custom_latestposts', array(
		'default' 	           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_custom_latestposts', array(
		'label' 	        => esc_html__( 'Latest Posts title', 'uku' ),
		'description'	     => esc_html__( 'Customize the "Latest Posts" title text above the blog content on your blog front page.', 'uku' ),
		'section' 	       => 'uku_frontpage_general',
		'type' 		     => 'text',
		'priority'	     => 6,
	) );

	$wp_customize->add_setting( 'uku_custom_followus', array(
		'default' 	          => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_custom_followus', array(
		'label' 	    => esc_html__( 'Follow us text', 'uku' ),
		'description'		     => esc_html__( 'Customize the "Follow us" text in your About section and footer social menus.', 'uku' ),
		'section' 	         => 'uku_frontpage_general',
		'type' 		      => 'text',
		'priority'		     => 7,
	) );


	// Uku Theme Options - Featured Posts Slider
	$wp_customize->add_setting( 'uku_featuredtag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_featuredtag', array(
		'label' 	             => esc_html__( 'Featured Slider tag (required)', 'uku' ),
		'settings' 			     => 'uku_featuredtag',
		'section' 			     => 'uku_slider',
		'priority'			     => 1,
	) ) );

	$wp_customize->add_setting( 'uku_sliderstyle', array(
		'default' 		         => 'slider-fullwidth',
		'sanitize_callback' 	     => 'uku_sanitize_sliderstyle',
	) );

	$wp_customize->add_control( 'uku_sliderstyle', array(
		'label' 			             => esc_html__( 'Slider Style', 'uku' ),
		'description'					     => esc_html__( 'Choose the slider design.', 'uku' ),
		'section' 			           => 'uku_slider',
		'priority' 			           => 2,
		'type' 			               => 'select',
		'choices' 						     => array(
			'slider-fullwidth'	=> esc_html__( 'fullwidth', 'uku' ),
			'slider-boxed'		=> esc_html__( 'boxed', 'uku' ),
			'slider-fullscreen'	=> esc_html__( 'fullscreen', 'uku' ),
		),
	) );

	$wp_customize->add_setting( 'uku_slideranimation', array(
		'default' 				         => 'slider-slide',
		'sanitize_callback' 	     => 'uku_sanitize_slideranimation',
	) );

	$wp_customize->add_control( 'uku_slideranimation', array(
		'label' 			             => esc_html__( 'Slider Image Animation', 'uku' ),
		'description'					     => esc_html__( 'Choose, if you want the slider images to fade or slide from one image to the next.', 'uku' ),
		'section' 			           => 'uku_slider',
		'priority' 			           => 3,
		'type' 			               => 'select',
		'choices' 						     => array(
			'slider-slide'	 => esc_html__( 'slide', 'uku' ),
			'slider-fade' 			 => esc_html__( 'fade', 'uku' ),
		),
	) );

	// Uku Front Page - Sections 1 (Featured Top)
	$wp_customize->add_setting( 'uku_front_section_one_title', array(
		'default' 	           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_one_title', array(
		'label' 			             => esc_html__( 'Section Title (optional)', 'uku' ),
		'description'					     => esc_html__( 'The title will appear at the top of the section.', 'uku' ),
		'section' 			           => 'uku_front_section_one',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_one_cat', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_one_cat', array(
		'label' 				     => esc_html__( 'Section category', 'uku' ),
		'settings' 				     => 'uku_front_section_one_cat',
		'section' 				     => 'uku_front_section_one',
		'priority'				     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_one_tag', array(
		'default' 		         => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_one_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'uku' ),
		'settings' 						     => 'uku_front_section_one_tag',
		'section' 						     => 'uku_front_section_one',
		'priority'						     => 3,
	) ) );

	// Uku Front Page - Sections 2 (Featured Bottom)
	$wp_customize->add_setting( 'uku_front_section_two_title', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_two_title', array(
		'label' 			             => esc_html__( 'Section Title (optional)', 'uku' ),
		'description'					     => esc_html__( 'The title will appear at the top of the section.', 'uku' ),
		'section' 			           => 'uku_front_section_two',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_two_cat', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_two_cat', array(
		'label' 							     => esc_html__( 'Section category', 'uku' ),
		'settings' 						     => 'uku_front_section_two_cat',
		'section' 						     => 'uku_front_section_two',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_two_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_two_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'uku' ),
		'settings' 						     => 'uku_front_section_two_tag',
		'section' 						     => 'uku_front_section_two',
		'priority'						     => 3,
	) ) );

	// Uku Front Page - Sections 3 (on Background)
	$wp_customize->add_setting( 'uku_front_section_three_title', array(
		'default' 			           => '',
		'sanitize_callback'		     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_three_title', array(
		'label' 			             => esc_html__( 'Section Title (optional)', 'uku' ),
		'description'					     => esc_html__( 'The title will appear at the top of the section.', 'uku' ),
		'section' 			           => 'uku_front_section_three',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_three_cat', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_three_cat', array(
		'label' 							     => esc_html__( 'Section category', 'uku' ),
		'settings' 						     => 'uku_front_section_three_cat',
		'section' 						     => 'uku_front_section_three',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_three_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_three_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'uku' ),
		'settings' 						     => 'uku_front_section_three_tag',
		'section' 						     => 'uku_front_section_three',
		'priority'						     => 3,
	) ) );

	// Uku Front Page - Sections 4 (Fullwidth)
	$wp_customize->add_setting( 'uku_front_section_four_cat', array(
		'default' 			           => '',
			'sanitize_callback'	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_four_cat', array(
		'label' 							     => esc_html__( 'Section category', 'uku' ),
		'settings' 						     => 'uku_front_section_four_cat',
		'section' 						     => 'uku_front_section_four',
		'priority'						     => 1,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_four_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_four_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'uku' ),
		'settings' 						     => 'uku_front_section_four_tag',
		'section' 						     => 'uku_front_section_four',
		'priority'						     => 2,
	) ) );

	// Uku Front Page - Sections About
	$wp_customize->add_setting( 'uku_front_section_about_title', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_about_title', array(
		'label' 			             => esc_html__( 'Section Title', 'uku' ),
		'description'					     => esc_html__( 'The title will appear at the top of the section (Uku standard and neo only).', 'uku' ),
		'section' 			           => 'uku_front_section_about',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_about_image', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'uku_front_section_about_image', array(
		'label'						     => esc_html__( 'Upload About image', 'uku' ),
		'description'			     => esc_html__( 'The recommended image width for the About image is 580 pixels for Uku standard and 1500 pixels for the Uku neo and serif design style.', 'uku' ),
		'section'					     => 'uku_front_section_about',
		'priority'				     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_about_text', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_about_text', array(
		'label' 	            => esc_html__( 'About Text (required)', 'uku' ),
		'section' 	          => 'uku_front_section_about',
		'type' 		              => 'textarea',
		'description'		     => esc_html__( '(HTML is allowed.)', 'uku' ),
		'priority'			     => 3,
	) );


	// Uku Front Page - Sections 2-Column
	$wp_customize->add_setting( 'uku_front_section_twocolumn_title', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_twocolumn_title', array(
		'label' 			             => esc_html__( 'Section Title (optional)', 'uku' ),
		'description'					     => esc_html__( 'The title will appear at the top of the section.', 'uku' ),
		'section' 			           => 'uku_front_section_twocolumn',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_twocolumn_cat', array(
		'default' 			           => '',
		'sanitize_callback'		     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_twocolumn_cat', array(
		'label' 							     => esc_html__( 'Section category', 'uku' ),
		'settings' 						     => 'uku_front_section_twocolumn_cat',
		'section' 						     => 'uku_front_section_twocolumn',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_twocolumn_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_twocolumn_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'uku' ),
		'settings' 						     => 'uku_front_section_twocolumn_tag',
		'section' 						     => 'uku_front_section_twocolumn',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_twocolumn_number', array(
		'default' 				         => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_twocolumn_number', array(
		'label' 			             => esc_html__( 'Number of posts', 'uku' ),
		'section' 			           => 'uku_front_section_twocolumn',
		'priority' 			           => 4,
		'type' 			               => 'text',
	) );

	$wp_customize->add_setting( 'uku_front_section_twocolumn_excerpt', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_section_twocolumn_excerpt', array(
		'label'								     => esc_html__( 'Show post excerpt texts', 'uku' ),
		'section'							     => 'uku_front_section_twocolumn',
		'type'								     => 'checkbox',
		'priority'						     => 5,
	) );

	// Uku Front Page - Sections 3-Column
	$wp_customize->add_setting( 'uku_front_section_threecolumn_title', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_threecolumn_title', array(
		'label' 			             => esc_html__( 'Section Title (optional)', 'uku' ),
		'description'					     => esc_html__( 'The title will appear at the top of the section.', 'uku' ),
		'section' 			           => 'uku_front_section_threecolumn',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_threecolumn_cat', array(
		'default' 			           => '',
		'sanitize_callback'		     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_threecolumn_cat', array(
		'label' 							     => esc_html__( 'Section category', 'uku' ),
		'settings' 						     => 'uku_front_section_threecolumn_cat',
		'section' 						     => 'uku_front_section_threecolumn',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_threecolumn_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_threecolumn_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'uku' ),
		'settings' 						     => 'uku_front_section_threecolumn_tag',
		'section' 						     => 'uku_front_section_threecolumn',
		'priority'						     => 3,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_threecolumn_number', array(
		'default' 				         => '',
		'sanitize_callback'		     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_threecolumn_number', array(
		'label' 			             => esc_html__( 'Number of posts', 'uku' ),
		'section' 			           => 'uku_front_section_threecolumn',
		'priority' 			           => 4,
		'type' 			               => 'text',
	) );

	$wp_customize->add_setting( 'uku_front_section_threecolumn_excerpt', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_section_threecolumn_excerpt', array(
		'label'								     => esc_html__( 'Show post excerpt texts', 'uku' ),
		'section'							     => 'uku_front_section_threecolumn',
		'type'								     => 'checkbox',
		'priority'						     => 5,
	) );


	// Uku Front Page - Sections 4-Column
	$wp_customize->add_setting( 'uku_front_section_fourcolumn_title', array(
		'default' 	           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_fourcolumn_title', array(
		'label' 			           => esc_html__( 'Section title (optional)', 'uku' ),
		'description'					   => esc_html__( 'The title will appear at the top of the section.', 'uku' ),
		'section' 			         => 'uku_front_section_fourcolumn',
		'type' 			             => 'text',
		'priority'						   => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_fourcolumn_cat', array(
		'default' 			         => '',
		'sanitize_callback' 	   => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_fourcolumn_cat', array(
		'label' 							   => esc_html__( 'Section category', 'uku' ),
		'settings' 						   => 'uku_front_section_fourcolumn_cat',
		'section' 						   => 'uku_front_section_fourcolumn',
		'priority'						   => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_fourcolumn_tag', array(
		'default' 			         => '',
		'sanitize_callback' 	   => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_fourcolumn_tag', array(
		'label' 			           => esc_html__( 'Section tag', 'uku' ),
		'settings' 						   => 'uku_front_section_fourcolumn_tag',
		'section' 						   => 'uku_front_section_fourcolumn',
		'priority'						   => 3,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_fourcolumn_number', array(
		'default' 				       => '',
		'sanitize_callback' 	   => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_fourcolumn_number', array(
		'label' 			           => esc_html__( 'Number of posts', 'uku' ),
		'section' 			         => 'uku_front_section_fourcolumn',
		'priority' 			         => 4,
		'type' 			             => 'text',
	) );

	$wp_customize->add_setting( 'uku_front_section_fourcolumn_excerpt', array(
		'default'							   => '',
		'sanitize_callback' 	   => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_section_fourcolumn_excerpt', array(
		'label'								   => esc_html__( 'Show post excerpt texts', 'uku' ),
		'section'							   => 'uku_front_section_fourcolumn',
		'type'								   => 'checkbox',
		'priority'						   => 5,
	) );


	// Uku Front Page - Sections 6-Column
	$wp_customize->add_setting( 'uku_front_section_sixcolumn_title', array(
		'default' 			         => '',
		'sanitize_callback'		   => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_sixcolumn_title', array(
		'label' 			           => esc_html__( 'Section Title (optional)', 'uku' ),
		'description'					   => esc_html__( 'The title will appear at the top of the section.', 'uku' ),
		'section' 			         => 'uku_front_section_sixcolumn',
		'type' 			             => 'text',
		'priority'						   => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_sixcolumn_cat', array(
		'default' 			         => '',
		'sanitize_callback' 	   => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_sixcolumn_cat', array(
		'label' 							   => esc_html__( 'Section category', 'uku' ),
		'settings' 						   => 'uku_front_section_sixcolumn_cat',
		'section' 						   => 'uku_front_section_sixcolumn',
		'priority'						   => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_sixcolumn_tag', array(
		'default' 			         => '',
		'sanitize_callback'		   => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_sixcolumn_tag', array(
			'label' 			         => esc_html__( 'Section tag', 'uku' ),
			'settings' 						 => 'uku_front_section_sixcolumn_tag',
			'section' 						 => 'uku_front_section_sixcolumn',
			'priority'						 => 3,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_sixcolumn_number', array(
			'default' 				     => '',
			'sanitize_callback' 	 => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_sixcolumn_number', array(
			'label' 			         => esc_html__( 'Number of posts', 'uku' ),
			'section' 			       => 'uku_front_section_sixcolumn',
			'priority' 			       => 4,
			'type' 			           => 'text',
	) );

	$wp_customize->add_setting( 'uku_front_section_sixcolumn_excerpt', array(
			'default'							 => '',
			'sanitize_callback' 	 => 'uku_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_section_sixcolumn_excerpt', array(
			'label'								 => esc_html__( 'Show post excerpt texts', 'uku' ),
			'section'							 => 'uku_front_section_sixcolumn',
			'type'								 => 'checkbox',
			'priority'						 => 5,
	) );

}
add_action( 'customize_register', 'pirate_rogue_customize_register');


/**
 * Add Custom Customizer Controls - Category Dropdown
 */
if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Category_Control extends WP_Customize_Control {

        public function render_content() {
            $dropdown = wp_dropdown_categories(
                    array(
                                    'name'              => '_customize-dropdown-categories-' . $this->id,
                                    'echo'              => 0,
                                    'orderby'           => 'name',
                                    'show_option_none'  => esc_html__( '&mdash; Select &mdash;', 'uku' ),

                                    'option_none_value' => '',
                                    'selected'          => $this->value(),
                    )
            );

            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );

            printf(
                    '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
                    $this->label,
                    $dropdown
            );
        }
    }
}

/**
 * Add Custom Customizer Controls - Tag Dropdown
 */
if (class_exists('WP_Customize_Control')) {
		class WP_Customize_Tag_Control extends WP_Customize_Control {

				public function render_content() {
						$dropdown = wp_dropdown_categories(
								array(
										'name'              => '_customize-dropdown-tags-' . $this->id,
										'echo'              => 0,
										'orderby'           => 'name',
										'show_option_none'  => esc_html__( '&mdash; Select &mdash;', 'uku' ),

										'option_none_value' => '',
										'taxonomy'           => 'post_tag',
										'selected'          => $this->value(),
								)
						);

						$dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );

						printf(
								'<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
								$this->label,
								$dropdown
						);
				}
		}
}

/**
 * Sanitize Checkboxes.
 */
function uku_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Sanitize Sidebar Position.
 */
function uku_sanitize_sidebar( $uku_sidebar ) {
	if ( ! in_array( $uku_sidebar, array( 'sidebar-right', 'sidebar-left' ) ) ) {
		$uku_sidebar = 'sidebar-right';
	}
	return $uku_sidebar;
}

/**
 * Sanitize Sidebar Visibility Settings.
 */
function uku_sanitize_sidebar_hide( $uku_sidebar_hide ) {
	if ( ! in_array( $uku_sidebar_hide, array( 'sidebar-show', 'sidebar-no', 'sidebar-no-single', 'sidebar-no-front' ) ) ) {
		$uku_sidebar_hide = 'sidebar-show';
	}
	return $uku_sidebar_hide;
}

/**
 * Sanitize Featured Slider Style.
 */
function uku_sanitize_sliderstyle( $uku_sliderstyle ) {
	if ( ! in_array( $uku_sliderstyle, array( 'slider-fullwidth', 'slider-boxed', 'slider-fullscreen' ) ) ) {
		$uku_sliderstyle = 'slider-fullwidth';
	}
	return $uku_sliderstyle;
}

/**
 * Sanitize Featured Slider image animation.
 */
function uku_sanitize_slideranimation( $uku_slideranimation ) {
	if ( ! in_array( $uku_slideranimation, array( 'slider-slide', 'slider-fade' ) ) ) {
		$uku_slideranimation = 'slider-slide';
	}
	return $uku_slideranimation;
}

/**
 * Sanitize Custom Header Image Style.
 */
function uku_sanitize_headerstyle( $uku_headerstyle ) {
	if ( ! in_array( $uku_headerstyle, array( 'header-fullwidth', 'header-boxed', 'header-fullscreen' ) ) ) {
		$uku_headerstyle = 'header-fullwidth';
	}
	return $uku_headerstyle;
}

/**
 * Sanitize header font.
 */
function uku_sanitize_header_font( $uku_header_font ) {
	if ( ! in_array( $uku_header_font, array( 'light', 'dark' ) ) ) {
		$uku_header_font = 'dark';
	}
	return $uku_header_font;
}

/**
 * Sanitize the image font.
 */
function uku_sanitize_image_font( $uku_image_font ) {
	if ( ! in_array( $uku_image_font, array( 'light', 'dark' ) ) ) {
		$uku_image_font = 'light';
	}
	return $uku_image_font;
}



function pirate_rogue_sanitize_socialmedia_style( $pirate_rogue_socialmedia_style ) {
	if ( ! in_array( $pirate_rogue_socialmedia_style, array( 'colorful', 'maincolor', 'secondcolor' ) ) ) {
		$pirate_rogue_socialmedia_style = 'colorful';
	}
	return $pirate_rogue_socialmedia_style;
}
function pirate_rogue_sanitize_search_overlay_backgroundcolor( $pirate_rogue_overlaysearch_style ) {
	if ( ! in_array( $pirate_rogue_overlaysearch_style, array( 'darkcolor', 'maincolor', 'secondcolor' ) ) ) {
		$pirate_rogue_overlaysearch_style = 'darkcolor';
	}
	return $pirate_rogue_overlaysearch_style;
}

/**
 * Sanitize Image Transition Transparency.

function uku_sanitize_imggradient( $uku_imggradient ) {
	if ( ! in_array( $uku_imggradient, array( '0','0.1', '0.2', '0.3', '0.4', '0.5', '0.6', '0.7', '0.8', '0.9', '0.99' ) ) ) {
		$uku_imggradient = '0.7';
	}
	return $uku_imggradient;
}
*/

/**
 * Sanitize Image Overlay Transparency.
 */
function uku_sanitize_imgoverlay_transparency( $uku_imgoverlay_transparency ) {
	if ( ! in_array( $uku_imgoverlay_transparency, array( '0','0.1', '0.2', '0.3', '0.4', '0.5', '0.6', '0.7', '0.8', '0.9', '1' ) ) ) {
		$uku_imgoverlay_transparency = '0';
	}
	return $uku_imgoverlay_transparency;
}
