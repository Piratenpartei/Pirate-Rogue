<?php
/**
 * Implement Theme Customizer additions and adjustments.
 */

function pirate_rogue_customize_register( $wp_customize ) {
    global $default_colorlist;
    
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    // Custom panels:
    $wp_customize->add_panel( 'pirate_rogue_themeoptions', array(
        'priority'          => 1,
        'theme_supports'    => '',
        'title'             => esc_html__('Theme Options', 'pirate-rogue'),
    ) );


        $wp_customize->add_section( 'pirate_rogue_section_images', array(
		'title'     => esc_html__( 'Default Images', 'pirate-rogue'),
		'priority'  => 3,
		'panel'     => 'pirate_rogue_themeoptions',
	) );
       
	$wp_customize->add_section( 'pirate_rogue_section_header', array(
		'title'     => esc_html__( 'Header', 'pirate-rogue'),
		'priority'  => 4,
		'panel'     => 'pirate_rogue_themeoptions',
	) );
        $wp_customize->add_section( 'pirate_rogue_section_sidebar', array(
		'title'     => esc_html__( 'Sidebar', 'pirate-rogue'),
		'priority'  => 5,
		'panel'     => 'pirate_rogue_themeoptions',
	) );
	$wp_customize->add_section( 'pirate_rogue_section_footer', array(
		'title'     => esc_html__( 'Footer', 'pirate-rogue'),
		'priority'  => 6,
		'panel'     => 'pirate_rogue_themeoptions',
	) );
        
        $wp_customize->add_section( 'pirate_rogue_section_metadata', array(
		'title'     => esc_html__( 'Metadata', 'pirate-rogue'),
		'priority'  => 7,
		'panel'     => 'pirate_rogue_themeoptions',
	) ); 
        $wp_customize->add_section( 'pirate_rogue_section_comments', array(
		'title'     => esc_html__( 'Comments', 'pirate-rogue'),
		'priority'  => 8,
		'panel'     => 'pirate_rogue_themeoptions',
	) );  
        $wp_customize->add_section( 'pirate_rogue_section_misc', array(
		'title'     => esc_html__( 'Miscellaneous', 'pirate-rogue'),
		'priority'  => 50,
		'panel'     => 'pirate_rogue_themeoptions',
	) );  
        $wp_customize->add_section( 'pirate_rogue_section_coloroverwrite', array(
		'priority'  => 100,
		'title'     => esc_html__('Colors', 'pirate-rogue'),
		'panel'     => 'pirate_rogue_themeoptions',
                'description'	=> esc_html__( 'This will allow to change the default colors. Please notice, that the following color options use a fix list of predefined colors. To change the website to other colors, use "Custom CSS" option.', 'pirate-rogue'),
	) );
	$wp_customize->add_section( 'pirate_rogue_customcss', array(
		'title'     => esc_html__( 'Custom CSS', 'pirate-rogue'),
		'priority'  => 200,
		'panel'     => 'pirate_rogue_themeoptions',
	) );
        
	


    // Front Page Sections.
    $wp_customize->add_panel( 'pirate_rogue_frontpage', array(
        'priority'          => 2,
        'theme_supports'    => '',
        'title'             => esc_html__('Blog Front Page', 'pirate-rogue'),
    ) );        
        
	$wp_customize->add_section( 'pirate_rogue_frontpage_general', array(
		'title'     => esc_html__( 'General', 'pirate-rogue'),
		'priority'  => 1,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_slider', array(
		'title'     => esc_html__( 'Featured Posts Slider', 'pirate-rogue'),
		'description'   => esc_html__( 'Up to 6 posts will show up in the Front page slider. The image dimension for the Featured post images should be at least 1440 x 530 pixels for the standard design style.', 'pirate-rogue'),
		'priority'  => 3,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_front_section_one', array(
		'title'     => esc_html__( 'Section Featured Top', 'pirate-rogue'),
		'priority'  => 3,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_front_section_twocolumn', array(
		'title'     => esc_html__( 'Section 2-Columns', 'pirate-rogue'),
		'priority'  => 4,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_front_section_threecolumn', array(
		'title'     => esc_html__( 'Section 3-Columns', 'pirate-rogue'),
		'priority'  => 5,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_front_section_four', array(
		'title'     => esc_html__( 'Section Fullwidth', 'pirate-rogue'),
		'priority'  => 6,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_front_section_two', array(
		'title'     => esc_html__( 'Section Featured Bottom', 'pirate-rogue'),
		'priority'  => 7,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_front_section_about', array(
		'title'     => esc_html__( 'Section About', 'pirate-rogue'),
		'priority'  => 8,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_front_section_three', array(
		'title'     => esc_html__( 'Section on Background', 'pirate-rogue'),
		'priority'  => 9,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_front_section_fourcolumn', array(
		'title'     => esc_html__( 'Section 4-Columns', 'pirate-rogue'),
		'priority'  => 10,
		'panel'     => 'pirate_rogue_frontpage',
	) );

	$wp_customize->add_section( 'pirate_rogue_front_section_sixcolumn', array(
		'title'     => esc_html__( 'Section 6-Columns', 'pirate-rogue'),
		'priority'  => 11,
		'panel'     => 'pirate_rogue_frontpage',
	) );


        // Settings
	
	$wp_customize->add_setting( 'pirate_rogue_customlogofooter', array(
		'default'		     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pirate_rogue_customlogofooter', array(
		'label'			     => esc_html__( 'Show custom logo in footer', 'pirate-rogue'),
		'section'		     => 'pirate_rogue_section_footer',
		'type'			     => 'checkbox',
		'priority'		     => 23,
	) );

	// Additional Header Options
	$wp_customize->add_setting( 'pirate_rogue_headerstyle', array(
		'default' 		       => 'header-fullwidth',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_headerstyle',
	) );

	$wp_customize->add_control( 'pirate_rogue_headerstyle', array(
		'label' 		   => esc_html__( 'Header Image Style', 'pirate-rogue'),
		'description'		    => esc_html__( 'Choose the Header image style you like to use.', 'pirate-rogue'),
		'section' 		    => 'header_image',
		'priority' 	           => 10,
		'type' 		           => 'select',
		'choices' 						     => array(
			'header-fullwidth' 	 => esc_html__( 'fullwidth', 'pirate-rogue'),
			'header-boxed' 		 => esc_html__( 'boxed', 'pirate-rogue'),
			'header-fullscreen'     => esc_html__( 'fullscreen', 'pirate-rogue'),
		),
	) );


	//  Theme Options - General
	$wp_customize->add_setting( 'pirate_rogue_sidebar', array(
		'default' 	        => 'sidebar-right',
		'sanitize_callback'	=> 'pirate_rogue_sanitize_sidebar',
	) );

	$wp_customize->add_control( 'pirate_rogue_sidebar', array(
		'label' 	     => esc_html__( 'Sidebar Position', 'pirate-rogue'),
		'section' 	  => 'pirate_rogue_section_sidebar',
		'priority'                => 2,
		'type' 			  => 'select',
		'choices'     => array(
			'sidebar-right' 	   => esc_html__( 'sidebar right', 'pirate-rogue'),
			'sidebar-left' 		   => esc_html__( 'sidebar left', 'pirate-rogue'),
		),
	) );

	$wp_customize->add_setting( 'pirate_rogue_sidebar_hide', array(
		'default' 		    => 'sidebar-show',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_sidebar_hide',
	) );

	$wp_customize->add_control( 'pirate_rogue_sidebar_hide', array(
		'label' 	  => esc_html__( 'Sidebar Visibility', 'pirate-rogue'),
		'section' 	  => 'pirate_rogue_section_sidebar',
		'priority' 	  => 3,
		'type' 		 => 'select',
		'choices' 	  => array(
                    'sidebar-show'	 => esc_html__( 'Show sidebar', 'pirate-rogue'),
                    'sidebar-no'	 => esc_html__( 'Hide sidebar', 'pirate-rogue'),
                    'sidebar-no-single'	 => esc_html__( 'Hide sidebar on single posts', 'pirate-rogue'),
                    'sidebar-no-front'	 => esc_html__( 'Hide sidebar on Front page', 'pirate-rogue'),
		),
	) );

	
	
	$wp_customize->add_setting( 'pirate_rogue_credit', array(
		'default'		    => '',
		'sanitize_callback'	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_credit', array(
		'label'			    => esc_html__( 'Footer credit text', 'pirate-rogue'),
		'description'		    => esc_html__( 'Customize the footer credit text. (HTML is allowed)', 'pirate-rogue'),
		'section'		    => 'pirate_rogue_section_metadata',
		'type'			    => 'text',
		'priority'		    => 6,
	) );
        $wp_customize->add_setting( 'pirate_rogue_author', array(
		'default'		    => '',
		'sanitize_callback'	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_author', array(
		'label'			    => esc_html__( 'Author', 'pirate-rogue'),
		'description'		    => esc_html__( 'Default author of posts used for structured data', 'pirate-rogue'),
		'section'		    => 'pirate_rogue_section_metadata',
		'type'			    => 'text',
		'priority'		    => 7,
	) );
        
        
        $wp_customize->add_setting( 'pirate_rogue_google_wmt_verification_text', array(
		'default'		    => '',
		'sanitize_callback'	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_google_wmt_verification_text', array(
		'label'			    => esc_html__( 'Google Site Verification', 'pirate-rogue'),
		'description'		    => __( 'For verification of your website as property owner at <a target="_blank" href="https://www.google.com/webmasters/tools/home">Google Webmaster Tools</a>, use the alternative method and copy the <b>content</b>-Attribut of the given HTML-Tag. <br>Insert this string here. <br>'
                        . 'Example: If given: <br><code>&lt;meta name="google-site-verification" content="BBssyCpddd8" /&gt;</code><br> then insert <code>BBssyCpddd8</code> ', 'pirate-rogue'),
		'section'		    => 'pirate_rogue_section_metadata',
		'type'			    => 'text',
		'priority'		    => 8,
	) );
        

	//  Theme Options - Header
	$wp_customize->add_setting( 'pirate_rogue_hidesearch', array(
		'default'		     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pirate_rogue_hidesearch', array(
		'label'		     => esc_html__( 'Hide search in Header', 'pirate-rogue'),
		'section'	     => 'pirate_rogue_section_header',
		'type'		     => 'checkbox',
		'priority'	     => 1,
	) );

        
        
        
        

	$wp_customize->add_setting( 'pirate_rogue_socialmedia_style', array(
		'default' 	         => 'colorful',
		'sanitize_callback'      => 'pirate_rogue_sanitize_socialmedia_style',
	) );

	$wp_customize->add_control( 'pirate_rogue_socialmedia_style', array(
		'label'         => esc_html__( 'Social Media Icon Style', 'pirate-rogue'),
		'description'	=> esc_html__( 'Choose the color of the social media icons (needs a items in Social media menu position). Notice: This will also chance the color of the search icon and the hamburger overlay icon.', 'pirate-rogue'),
		'section' 	=> 'pirate_rogue_section_header',
		'priority'      => 3,
		'type' 		=> 'select',
		'choices'   => array(
                    'colorful'      => esc_html__( 'Colorful Social Media Icons', 'pirate-rogue'),
                    'maincolor'     => esc_html__( 'Use main color', 'pirate-rogue'),
                    'secondcolor'   => esc_html__( 'Use second color', 'pirate-rogue'),
		),
	) );
        
        $wp_customize->add_setting( 'pirate_rogue_search_overlay_backgroundcolor', array(
		'default' 	         => 'darkcolor',
		'sanitize_callback'      => 'pirate_rogue_sanitize_search_overlay_backgroundcolor',
	) );

	$wp_customize->add_control( 'pirate_rogue_search_overlay_backgroundcolor', array(
		'label'         => esc_html__( 'Search Background Style', 'pirate-rogue'),
		'description'	=> esc_html__( 'Choose the background color of the overlay search input', 'pirate-rogue'),
		'section' 	=> 'pirate_rogue_section_header',
		'priority'      => 3,
		'type' 		=> 'select',
		'choices'   => array(
                    'darkcolor'      => esc_html__( 'Dark grey', 'pirate-rogue'),
                    'maincolor'     => esc_html__( 'Main color', 'pirate-rogue'),
                    'secondcolor'   => esc_html__( 'Second color', 'pirate-rogue'),
		),
	) );
        

	$wp_customize->add_setting( 'pirate_rogue_fixedheader', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pirate_rogue_fixedheader', array(
		'label'		     => esc_html__( 'Hide fix-positioned Header', 'pirate-rogue'),
		'description'	     => esc_html__( '(By default the fix-positioned Header is visible on wider screens, if the browser window is scrolled.)', 'pirate-rogue'),
		'section'	     => 'pirate_rogue_section_header',
		'type'		     => 'checkbox',
		'priority'	     => 4,
	) );
    // Site Title - Custom Title and Logo
	$wp_customize->add_setting( 'pirate_rogue_hidetagline', array(
		'default'		     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pirate_rogue_hidetagline', array(
		'label'			     => esc_html__( 'Hide tagline only', 'pirate-rogue'),
		'section'		     => 'pirate_rogue_section_header',
		'type'			     => 'checkbox',
		'priority'		     => 22,
	) );

        	
	$wp_customize->add_setting( 'pirate_rogue_fallback_thumbnail', array(
		'default'		=> '',
		'sanitize_callback'	=> 'wp_kses_post',
	) );

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'pirate_rogue_fallback_thumbnail', array(
	    'section'     => 'pirate_rogue_section_images',
	    'label'       => esc_html__( 'Upload Fallback Thumbnail image', 'pirate-rogue'),
	    'description'	     => esc_html__( 'If thumbnail for a post is not avaible, define this thumbnail as a fallback', 'pirate-rogue'), 
	    'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
	    'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
	    'width'       => 1260,
	    'height'      =>  709,
		    'priority'		=> 1,
	) ) );
	$wp_customize->add_setting( 'pirate_rogue_fallback_blogroll_thumbnail', array(
		'default'		=> '',
		'sanitize_callback'	=> 'wp_kses_post',
	) );

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'pirate_rogue_fallback_blogroll_thumbnail', array(
	    'section'     => 'pirate_rogue_section_images',
	    'label'       => esc_html__( 'Upload Fallback Thumbnail for blogroll', 'pirate-rogue'),
	    'description'	     => esc_html__( 'If thumbnail for a post is not avaible, define this thumbnail as a fallback for normal blogroll', 'pirate-rogue'), 
	    'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
	    'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
	    'width'       => 1024,
	    'height'      =>  576,
		    'priority'		=> 2,
	) ) );	

        $wp_customize->add_setting( 'pirate_rogue_fallback_slider', array(
		'default'		=> '',
		'sanitize_callback'	=> 'wp_kses_post',
	) );

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'pirate_rogue_fallback_slider', array(
	    'section'     => 'pirate_rogue_section_images',
	    'label'       => esc_html__( 'Upload Fallback image for slider', 'pirate-rogue'),
	    'description'	     => esc_html__( 'If  thumbnail for a post is not avaible, define this image for the slider', 'pirate-rogue'), 
	    'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
	    'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
	    'width'       => 1440,
	    'height'      =>  690,
		    'priority'		=> 3,
	) ) );	

	
	$wp_customize->add_setting( 'pirate_rogue_hidecomments', array(
		'default'		    => '',
		'sanitize_callback' 	    => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pirate_rogue_hidecomments', array(
		'label'			    => esc_html__( 'Show Comments button on single posts', 'pirate-rogue'),
		'description'		    => esc_html__( '(Hides comments behind a Show Comments button on single posts.)', 'pirate-rogue'),
		'section'		    => 'pirate_rogue_section_comments',
		'type'			    => 'checkbox',
		'priority'		    => 4,
	) );
	
	
	$wp_customize->add_setting( 'pirate_rogue_commentdisclaimer', array(
		'default'		    => '',
		'sanitize_callback' 	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_commentdisclaimer', array(
		'label'			    => esc_html__( 'Comment Disclaimer', 'pirate-rogue'),
		'description'		    => esc_html__( 'Disclaimer shown preview to comment form. (HTML is allowed)', 'pirate-rogue'),
		'section'		    => 'pirate_rogue_section_comments',
		'type'			    => 'textarea',
		'priority'		    => 5,
	) );
	

        $wp_customize->add_setting( 'pirate_rogue_externcomments_active', array(
		'default'		    => '',
		'sanitize_callback' 	    => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pirate_rogue_externcomments_active', array(
		'label'			    => esc_html__( 'Link to external board for comments', 'pirate-rogue'),
		'description'		    => esc_html__( '(Instead of allowing comments on side, users are directed to an external website)', 'pirate-rogue'),
		'section'		    => 'pirate_rogue_section_comments',
		'type'			    => 'checkbox',
		'priority'		    => 6,
	) );
        
        $wp_customize->add_setting( 'pirate_rogue_externcomments_title', array(
		'default'		    => '',
		'sanitize_callback'	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_externcomments_title', array(
                'label'                     => esc_html__( 'Linktext', 'pirate-rogue'),
                'description'               => esc_html__( 'Sets a link text for directing to external board', 'pirate-rogue'),
                'section'		    => 'pirate_rogue_section_comments',
                'type'                      => 'text',
                'default'                   => esc_html__( 'Discuss this on our board', 'pirate-rogue'),
                'priority'		    => 7,
	) ); 
        $wp_customize->add_setting( 'pirate_rogue_externcomments_url', array(
		'default'		    => 'https://news.piratenpartei.de',
		'sanitize_callback'	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_externcomments_url', array(
                'label'                     => esc_html__( 'URL', 'pirate-rogue'),
                'description'               => esc_html__( 'Enter the URL for the external board', 'pirate-rogue'),
                'section'                   => 'pirate_rogue_section_comments',
                'type'                      => 'text',
                'priority'                  => 8,
	) ); 
	
        
	// Theme Options - Big Footer Feature Area
	$wp_customize->add_setting( 'pirate_rogue_footerfeature_title', array(
		'default' 	       => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_footerfeature_title', array(
		'label' 	      => esc_html__( 'Title', 'pirate-rogue'),
		'description'     => esc_html__( 'A small title text visible at the top of the area.', 'pirate-rogue'),
		'section' 	        => 'pirate_rogue_section_footer',
		'type' 		        => 'text',
		'priority'	     => 1,
	) );

	$wp_customize->add_setting( 'pirate_rogue_footerfeature_image', array(
		'default' 	           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'pirate_rogue_footerfeature_image', array(
                'label'			     => esc_html__( 'Upload Featured image', 'pirate-rogue'),
                'section'		     => 'pirate_rogue_section_footer',
                'priority'	     => 2,
	) ) );
	
	
	
	

	$wp_customize->add_setting( 'pirate_rogue_footerfeature_text_big', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_footerfeature_text_big', array(
		'label' 	             => esc_html__( 'Big Text', 'pirate-rogue'),
		'section' 		           => 'pirate_rogue_section_footer',
		'type' 		               => 'textarea',
		'description'			     => esc_html__( 'A big slogan text next to the image (HTML is allowed.)', 'pirate-rogue'),
		'priority'			     => 3,
	) );

	$wp_customize->add_setting( 'pirate_rogue_footerfeature_text_small', array(
		'default'		    => '',
		'sanitize_callback' 	    => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_footerfeature_text_small', array(
		'label' 		    => esc_html__( 'Small Text', 'pirate-rogue'),
		'description'		    => esc_html__( 'An additional smaller description text below the big text (HTML is allowed.)', 'pirate-rogue'),
		'section' 		    => 'pirate_rogue_section_footer',
		'type' 			    => 'textarea',
		'priority'						     => 4,
	) );

	$wp_customize->add_setting( 'pirate_rogue_footerfeature_btn_text', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_footerfeature_btn_text', array(
		'label' 		     => esc_html__( 'Button Text', 'pirate-rogue'),
		'description'		     => esc_html__( 'If you want to add a "Call to Action" button, include the button text here.', 'pirate-rogue'),
		'section'		     => 'pirate_rogue_section_footer',
		'type' 			      => 'text',
		'priority'						     => 5,
	) );

	$wp_customize->add_setting( 'pirate_rogue_footerfeature_btn_link', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'pirate_rogue_footerfeature_btn_link', array(
		'label'         => esc_html__( 'Button Link URL', 'pirate-rogue'),
		'description'   => esc_html__( 'The URL the button should link to.', 'pirate-rogue'),
		'section'       => 'pirate_rogue_section_footer',
		'type'          => 'text',
		'priority'      => 6,
	) );


	$wp_customize->add_setting( 'pirate_rogue_footermenu_image', array(
		'default' 	        => '',
		'sanitize_callback' 	=> 'wp_kses_post',
	) );

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'pirate_rogue_footermenu_image', array(
	    'section'     => 'pirate_rogue_section_footer',
	    'label'       => esc_html__( 'Menu Footer Image', 'pirate-rogue'),
	    'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
	    'flex_height' => true, // Require the resulting image to be exactly as tall as the height attribute (default).
	    'width'       => 800,
	    'height'      =>  450,
		    'priority'		=> 7,
	) ) );
        
        // Add search in footer
	$wp_customize->add_setting( 'pirate_rogue_footer_search', array(
		'default'		     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'pirate_rogue_footer_search', array(
		'label'		     => esc_html__( 'Show search in Footer', 'pirate-rogue'),
		'section'	     => 'pirate_rogue_section_footer',
		'type'		     => 'checkbox',
		'priority'	     => 8,
	) );       	
	
	$wp_customize->add_setting( 'pirate_rogue_devider_hideimage', array(
		'default'		     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'pirate_rogue_devider_hideimage', array(
		'label'		     => esc_html__( 'Hide pirate image at devider', 'pirate-rogue'),
		'section'	     => 'pirate_rogue_section_misc',
		'type'		     => 'checkbox',
		'priority'	     => 8,
	) );
        
        
        
	// Front Page - General
	$wp_customize->add_setting( 'uku_front_hideblog', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'uku_front_hideblog', array(
		'label'				     => esc_html__( 'Hide default blog on Front page', 'pirate-rogue'),
		'section'			     => 'pirate_rogue_frontpage_general',
		'type'				     => 'checkbox',
		'priority'			     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_hidedate', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_hidedate', array(
		'label'				     => esc_html__( 'Hide date on Front page', 'pirate-rogue'),
		'section'			     => 'pirate_rogue_frontpage_general',
		'type'				     => 'checkbox',
		'priority'			     => 2,
	) );

	$wp_customize->add_setting( 'uku_front_hidecomments', array(
		'default'							     => '',
		'sanitize_callback'		     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_hidecomments', array(
		'label'			    => esc_html__( 'Hide comments count on Front page', 'pirate-rogue'),
		'section'		    => 'pirate_rogue_frontpage_general',
		'type'			    => 'checkbox',
		'priority'		    => 3,
	) );

	$wp_customize->add_setting( 'uku_front_hidecats', array(
		'default'							     => '',
		'sanitize_callback'		     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_hidecats', array(
		'label'			     => esc_html__( 'Hide categories on Front page', 'pirate-rogue'),
		'section'		     => 'pirate_rogue_frontpage_general',
		'type'		     => 'checkbox',
		'priority'		     => 4,
	) );

	$wp_customize->add_setting( 'pirate_rogue_front_hideauthor', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pirate_rogue_front_hideauthor', array(
		'label'			     => esc_html__( 'Hide author name on Front page', 'pirate-rogue'),
		'section'		     => 'pirate_rogue_frontpage_general',
		'type'			     => 'checkbox',
		'priority'		     => 5,
	) );

        $wp_customize->add_setting( 'pirate_rogue_all_hideauthor', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pirate_rogue_all_hideauthor', array(
		'label'			     => esc_html__( 'Hide author name on all pages', 'pirate-rogue'),
		'section'		     => 'pirate_rogue_frontpage_general',
		'type'			     => 'checkbox',
		'priority'		     => 5,
	) );
        
	$wp_customize->add_setting( 'pirate_rogue_custom_latestposts', array(
		'default' 	           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_custom_latestposts', array(
		'label' 	        => esc_html__( 'Latest Posts title', 'pirate-rogue'),
		'description'	     => esc_html__( 'Customize the "Latest Posts" title text above the blog content on your blog front page.', 'pirate-rogue'),
		'section' 	       => 'pirate_rogue_frontpage_general',
		'type' 		     => 'text',
		'priority'	     => 6,
	) );

	$wp_customize->add_setting( 'pirate_rogue_custom_followus', array(
		'default' 	          => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_custom_followus', array(
		'label' 	    => esc_html__( 'Follow us text', 'pirate-rogue'),
		'description'		     => esc_html__( 'Customize the "Follow us" text in your About section and footer social menus.', 'pirate-rogue'),
		'section' 	         => 'pirate_rogue_frontpage_general',
		'type' 		      => 'text',
		'priority'		     => 7,
	) );


	//  Featured Posts Slider: Chose Tag
	$wp_customize->add_setting( 'pirate_rogue_featuredtag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'pirate_rogue_featuredtag', array(
		'label'                 => esc_html__( 'Featured Slider tag', 'pirate-rogue'),
		'settings' 		=> 'pirate_rogue_featuredtag',
		'section' 		=> 'pirate_rogue_slider',
		'priority'		=> 1,
	) ) );

        //  Featured Posts Slider: Chose Cat
	$wp_customize->add_setting( 'pirate_rogue_featuredcat', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );


        $wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'pirate_rogue_featuredcat', array(
		'label'         => esc_html__( 'Featured Slider category', 'pirate-rogue'),
		'settings'      => 'pirate_rogue_featuredcat',
		'section'       => 'pirate_rogue_slider',
		'priority'      => 2,
	) ) );

        
	$wp_customize->add_setting( 'pirate_rogue_sliderstyle', array(
		'default' 		=> 'slider-fullwidth',
		'sanitize_callback' 	=> 'pirate_rogue_sanitize_sliderstyle',
	) );

	$wp_customize->add_control( 'pirate_rogue_sliderstyle', array(
		'label' 		=> esc_html__( 'Slider Style', 'pirate-rogue'),
		'description'		=> esc_html__( 'Choose the slider design.', 'pirate-rogue'),
		'section' 		=> 'pirate_rogue_slider',
		'priority' 		=> 2,
		'type' 			=> 'select',
		'choices' 						     => array(
			'slider-fullwidth'	=> esc_html__( 'fullwidth', 'pirate-rogue'),
			'slider-boxed'		=> esc_html__( 'boxed', 'pirate-rogue'),
			'slider-fullscreen'	=> esc_html__( 'fullscreen', 'pirate-rogue'),
		),
	) );

	$wp_customize->add_setting( 'uku_slideranimation', array(
		'default' 		=> 'slider-slide',
		'sanitize_callback' 	=> 'pirate_rogue_sanitize_slideranimation',
	) );

	$wp_customize->add_control( 'uku_slideranimation', array(
		'label' 		=> esc_html__( 'Slider Image Animation', 'pirate-rogue'),
		'description'		=> esc_html__( 'Choose, if you want the slider images to fade or slide from one image to the next.', 'pirate-rogue'),
		'section' 		=> 'pirate_rogue_slider',
		'priority' 		=> 3,
		'type' 			=> 'select',
		'choices' 		=> array(
			'slider-slide'	 => esc_html__( 'slide', 'pirate-rogue'),
			'slider-fade' 	 => esc_html__( 'fade', 'pirate-rogue'),
		),
	) );
        $wp_customize->add_setting( 'pirate_rogue_featured_slider_num', array(
		'default' 		=> 'slider-slide',
		'sanitize_callback' 	=> 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_featured_slider_num', array(
		'label' 		=> esc_html__( 'Number of slides', 'pirate-rogue'),
		'description'		=> esc_html__( 'How many slides of feature posts are displayed (notice: each slide more will reduce the performance cause of big images load).', 'pirate-rogue'),
		'section' 		=> 'pirate_rogue_slider',
		'priority' 		=> 3,
                'default'               => 3,
		'type' 			=> 'select',
		'choices' 		=> array(
			'2'	 => 2,
			'3'	 => 3,
                        '4'	 => 4,
                        '5'	 => 5,
                        '6'	 => 6,
		),
	) );

	// Uku Front Page - Sections 1 (Featured Top)
	$wp_customize->add_setting( 'uku_front_section_one_title', array(
		'default' 	           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_one_title', array(
		'label'             => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'description'       => esc_html__( 'The title will appear at the top of the section.', 'pirate-rogue'),
		'section'           => 'pirate_rogue_front_section_one',
		'type'              => 'text',
		'priority'          => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_one_cat', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_one_cat', array(
		'label' 				     => esc_html__( 'Section category', 'pirate-rogue'),
		'settings' 				     => 'uku_front_section_one_cat',
		'section' 				     => 'pirate_rogue_front_section_one',
		'priority'				     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_one_tag', array(
		'default' 		         => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_one_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'pirate-rogue'),
		'settings' 						     => 'uku_front_section_one_tag',
		'section' 						     => 'pirate_rogue_front_section_one',
		'priority'						     => 3,
	) ) );

	// Uku Front Page - Sections 2 (Featured Bottom)
	$wp_customize->add_setting( 'uku_front_section_two_title', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_two_title', array(
		'label'             => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'description'       => esc_html__( 'The title will appear at the top of the section.', 'pirate-rogue'),
		'section'           => 'pirate_rogue_front_section_two',
		'type'              => 'text',
		'priority'          => 1,
	) );

	$wp_customize->add_setting( 'pirate_rogue_front_section_two_cat', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'pirate_rogue_front_section_two_cat', array(
		'label' 							     => esc_html__( 'Section category', 'pirate-rogue'),
		'settings' 						     => 'pirate_rogue_front_section_two_cat',
		'section' 						     => 'pirate_rogue_front_section_two',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'pirate_rogue_front_section_two_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'pirate_rogue_front_section_two_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'pirate-rogue'),
		'settings' 						     => 'pirate_rogue_front_section_two_tag',
		'section' 						     => 'pirate_rogue_front_section_two',
		'priority'						     => 3,
	) ) );

	// Uku Front Page - Sections 3 (on Background)
	$wp_customize->add_setting( 'uku_front_section_three_title', array(
		'default' 			           => '',
		'sanitize_callback'		     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_three_title', array(
		'label' 			             => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'description'					     => esc_html__( 'The title will appear at the top of the section.', 'pirate-rogue'),
		'section' 			           => 'pirate_rogue_front_section_three',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_three_cat', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_three_cat', array(
		'label' 							     => esc_html__( 'Section category', 'pirate-rogue'),
		'settings' 						     => 'uku_front_section_three_cat',
		'section' 						     => 'pirate_rogue_front_section_three',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_three_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_three_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'pirate-rogue'),
		'settings' 						     => 'uku_front_section_three_tag',
		'section' 						     => 'pirate_rogue_front_section_three',
		'priority'						     => 3,
	) ) );

	// Uku Front Page - Sections 4 (Fullwidth)
	$wp_customize->add_setting( 'uku_front_section_four_cat', array(
		'default' 			           => '',
			'sanitize_callback'	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_four_cat', array(
		'label' 							     => esc_html__( 'Section category', 'pirate-rogue'),
		'settings' 						     => 'uku_front_section_four_cat',
		'section' 						     => 'pirate_rogue_front_section_four',
		'priority'						     => 1,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_four_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_four_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'pirate-rogue'),
		'settings' 						     => 'uku_front_section_four_tag',
		'section' 						     => 'pirate_rogue_front_section_four',
		'priority'						     => 2,
	) ) );

	// Uku Front Page - Sections About
	$wp_customize->add_setting( 'pirate_rogue_front_section_about_title', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_front_section_about_title', array(
		'label' 			             => esc_html__( 'Section Title', 'pirate-rogue'),
		'description'					     => esc_html__( 'The title will appear at the top of the section.', 'pirate-rogue'),
		'section' 			           => 'pirate_rogue_front_section_about',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'pirate_rogue_front_section_about_image', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'pirate_rogue_front_section_about_image', array(
		'label'         => esc_html__( 'Upload About image', 'pirate-rogue'),
		'description'   => esc_html__( 'The recommended image width for the About image is 580 pixels.', 'pirate-rogue'),
		'section'       => 'pirate_rogue_front_section_about',
		'priority'      => 2,
	) ) );

	$wp_customize->add_setting( 'pirate_rogue_front_section_about_text', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_front_section_about_text', array(
		'label'         => esc_html__( 'About Text (required)', 'pirate-rogue'),
		'section'       => 'pirate_rogue_front_section_about',
		'type'          => 'textarea',
		'description'   => esc_html__( '(HTML is allowed.)', 'pirate-rogue'),
		'priority'      => 3,
	) );


	// Uku Front Page - Sections 2-Column
	$wp_customize->add_setting( 'pirate_rogue_front_section_twocolumn_title', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_front_section_twocolumn_title', array(
		'label' 			             => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'description'					     => esc_html__( 'The title will appear at the top of the section.', 'pirate-rogue'),
		'section' 			           => 'pirate_rogue_front_section_twocolumn',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'pirate_rogue_front_section_twocolumn_cat', array(
		'default' 			           => '',
		'sanitize_callback'		     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'pirate_rogue_front_section_twocolumn_cat', array(
		'label' 							     => esc_html__( 'Section category', 'pirate-rogue'),
		'settings' 						     => 'pirate_rogue_front_section_twocolumn_cat',
		'section' 						     => 'pirate_rogue_front_section_twocolumn',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'pirate_rogue_front_section_twocolumn_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'pirate_rogue_front_section_twocolumn_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'pirate-rogue'),
		'settings' 						     => 'pirate_rogue_front_section_twocolumn_tag',
		'section' 						     => 'pirate_rogue_front_section_twocolumn',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'pirate_rogue_front_section_twocolumn_number', array(
		'default' 				         => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_front_section_twocolumn_number', array(
		'label' 			             => esc_html__( 'Number of posts', 'pirate-rogue'),
		'section' 			           => 'pirate_rogue_front_section_twocolumn',
		'priority' 			           => 4,
		'type' 			               => 'text',
	) );

	$wp_customize->add_setting( 'uku_front_section_twocolumn_excerpt', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_section_twocolumn_excerpt', array(
		'label'								     => esc_html__( 'Show post excerpt texts', 'pirate-rogue'),
		'section'							     => 'pirate_rogue_front_section_twocolumn',
		'type'								     => 'checkbox',
		'priority'						     => 5,
	) );

	// Uku Front Page - Sections 3-Column
	$wp_customize->add_setting( 'uku_front_section_threecolumn_title', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_threecolumn_title', array(
		'label' 			             => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'description'					     => esc_html__( 'The title will appear at the top of the section.', 'pirate-rogue'),
		'section' 			           => 'pirate_rogue_front_section_threecolumn',
		'type' 			               => 'text',
		'priority'						     => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_threecolumn_cat', array(
		'default' 			           => '',
		'sanitize_callback'		     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_threecolumn_cat', array(
		'label' 							     => esc_html__( 'Section category', 'pirate-rogue'),
		'settings' 						     => 'uku_front_section_threecolumn_cat',
		'section' 						     => 'pirate_rogue_front_section_threecolumn',
		'priority'						     => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_threecolumn_tag', array(
		'default' 			           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_threecolumn_tag', array(
		'label' 			             => esc_html__( 'Section tag', 'pirate-rogue'),
		'settings' 						     => 'uku_front_section_threecolumn_tag',
		'section' 						     => 'pirate_rogue_front_section_threecolumn',
		'priority'						     => 3,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_threecolumn_number', array(
		'default' 				         => '',
		'sanitize_callback'		     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_threecolumn_number', array(
		'label' 			             => esc_html__( 'Number of posts', 'pirate-rogue'),
		'section' 			           => 'pirate_rogue_front_section_threecolumn',
		'priority' 			           => 4,
		'type' 			               => 'text',
	) );

	$wp_customize->add_setting( 'uku_front_section_threecolumn_excerpt', array(
		'default'							     => '',
		'sanitize_callback' 	     => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_section_threecolumn_excerpt', array(
		'label'								     => esc_html__( 'Show post excerpt texts', 'pirate-rogue'),
		'section'							     => 'pirate_rogue_front_section_threecolumn',
		'type'								     => 'checkbox',
		'priority'						     => 5,
	) );


	// Front Page - Sections 4-Column
	$wp_customize->add_setting( 'uku_front_section_fourcolumn_title', array(
		'default' 	           => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_fourcolumn_title', array(
		'label' 			           => esc_html__( 'Section title (optional)', 'pirate-rogue'),
		'description'					   => esc_html__( 'The title will appear at the top of the section.', 'pirate-rogue'),
		'section' 			         => 'pirate_rogue_front_section_fourcolumn',
		'type' 			             => 'text',
		'priority'						   => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_fourcolumn_cat', array(
		'default' 			         => '',
		'sanitize_callback' 	   => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_fourcolumn_cat', array(
		'label' 							   => esc_html__( 'Section category', 'pirate-rogue'),
		'settings' 						   => 'uku_front_section_fourcolumn_cat',
		'section' 						   => 'pirate_rogue_front_section_fourcolumn',
		'priority'						   => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_fourcolumn_tag', array(
		'default' 			         => '',
		'sanitize_callback' 	   => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_fourcolumn_tag', array(
		'label' 			           => esc_html__( 'Section tag', 'pirate-rogue'),
		'settings' 						   => 'uku_front_section_fourcolumn_tag',
		'section' 						   => 'pirate_rogue_front_section_fourcolumn',
		'priority'						   => 3,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_fourcolumn_number', array(
		'default' 				       => '',
		'sanitize_callback' 	   => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_fourcolumn_number', array(
		'label' 			           => esc_html__( 'Number of posts', 'pirate-rogue'),
		'section' 			         => 'pirate_rogue_front_section_fourcolumn',
		'priority' 			         => 4,
		'type' 			             => 'text',
	) );

	$wp_customize->add_setting( 'uku_front_section_fourcolumn_excerpt', array(
		'default'							   => '',
		'sanitize_callback' 	   => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_section_fourcolumn_excerpt', array(
		'label'								   => esc_html__( 'Show post excerpt texts', 'pirate-rogue'),
		'section'							   => 'pirate_rogue_front_section_fourcolumn',
		'type'								   => 'checkbox',
		'priority'						   => 5,
	) );


	// Uku Front Page - Sections 6-Column
	$wp_customize->add_setting( 'uku_front_section_sixcolumn_title', array(
		'default'               => '',
		'sanitize_callback'     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_sixcolumn_title', array(
		'label'                 => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'description'           => esc_html__( 'The title will appear at the top of the section.', 'pirate-rogue'),
		'section'               => 'pirate_rogue_front_section_sixcolumn',
		'type'                  => 'text',
		'priority'              => 1,
	) );

	$wp_customize->add_setting( 'uku_front_section_sixcolumn_cat', array(
		'default' 			         => '',
		'sanitize_callback' 	   => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Category_Control($wp_customize,'uku_front_section_sixcolumn_cat', array(
		'label' 							   => esc_html__( 'Section category', 'pirate-rogue'),
		'settings' 						   => 'uku_front_section_sixcolumn_cat',
		'section' 						   => 'pirate_rogue_front_section_sixcolumn',
		'priority'						   => 2,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_sixcolumn_tag', array(
		'default' 			         => '',
		'sanitize_callback'		   => 'wp_kses_post',
	) );

	$wp_customize->add_control(new WP_Customize_Tag_Control($wp_customize,'uku_front_section_sixcolumn_tag', array(
			'label' 			         => esc_html__( 'Section tag', 'pirate-rogue'),
			'settings' 						 => 'uku_front_section_sixcolumn_tag',
			'section' 						 => 'pirate_rogue_front_section_sixcolumn',
			'priority'						 => 3,
	) ) );

	$wp_customize->add_setting( 'uku_front_section_sixcolumn_number', array(
			'default' 				     => '',
			'sanitize_callback' 	 => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'uku_front_section_sixcolumn_number', array(
			'label' 			         => esc_html__( 'Number of posts', 'pirate-rogue'),
			'section' 			       => 'pirate_rogue_front_section_sixcolumn',
			'priority' 			       => 4,
			'type' 			           => 'text',
	) );

	$wp_customize->add_setting( 'uku_front_section_sixcolumn_excerpt', array(
			'default'							 => '',
			'sanitize_callback' 	 => 'pirate_rogue_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'uku_front_section_sixcolumn_excerpt', array(
			'label'								 => esc_html__( 'Show post excerpt texts', 'pirate-rogue'),
			'section'							 => 'pirate_rogue_front_section_sixcolumn',
			'type'								 => 'checkbox',
			'priority'						 => 5,
	) );
	
       
        // Color Settings on Section pirate_rogue_section_coloroverwrite
        //*********************************************************************
        
        // Header
        $wp_customize->add_setting( 'pirate_rogue_head_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_head_background_color',
                array(
                    'settings' => 'pirate_rogue_head_background_color',
                    'label'    => esc_html__( 'Header background', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Background color for header region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
        $wp_customize->add_setting( 'pirate_rogue_head_text_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_head_text_color',
                array(
                    'settings' => 'pirate_rogue_head_text_color',
                    'label'    => esc_html__( 'Head text color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Textcolor for head region, including site title and menu links.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        ); 
       
        $wp_customize->add_setting( 'pirate_rogue_head_linkhover_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_head_linkhover_color',
                array(
                    'settings' => 'pirate_rogue_head_linkhover_color',
                    'label'    => esc_html__( 'Head link hover border-color', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       $wp_customize->add_setting( 'pirate_rogue_actionbutton_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_actionbutton_color',
                array(
                    'settings' => 'pirate_rogue_actionbutton_color',
                    'label'    => esc_html__( 'Action buttons', 'pirate-rogue'),
                    'description'	=> esc_html__( 'All buttons, menu and search icons', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       
       
        // Main part
        $wp_customize->add_setting( 'pirate_rogue_main_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_background_color',
                array(
                    'settings' => 'pirate_rogue_main_background_color',
                    'label'    => esc_html__( 'Main background', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Background color for main region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
        $wp_customize->add_setting( 'pirate_rogue_main_headline_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_headline_color',
                array(
                    'settings' => 'pirate_rogue_main_headline_color',
                    'label'    => esc_html__( 'Main headline color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Color for all headlines in main region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
        $wp_customize->add_setting( 'pirate_rogue_main_text_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_text_color',
                array(
                    'settings' => 'pirate_rogue_main_text_color',
                    'label'    => esc_html__( 'Main text color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Textcolor for main region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       $wp_customize->add_setting( 'pirate_rogue_main_link_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_link_color',
                array(
                    'settings' => 'pirate_rogue_main_link_color',
                    'label'    => esc_html__( 'Main link color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Link color for main region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       $wp_customize->add_setting( 'pirate_rogue_main_linkhover_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_linkhover_color',
                array(
                    'settings' => 'pirate_rogue_main_linkhover_color',
                    'label'    => esc_html__( 'Main link hover color', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
        
       $wp_customize->add_setting( 'pirate_rogue_main_titleunderline_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_titleunderline_color',
                array(
                    'settings' => 'pirate_rogue_main_titleunderline_color',
                    'label'    => esc_html__( 'Title underline color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Color for underline of the page title', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        ); 
       
        $wp_customize->add_setting( 'pirate_rogue_main_listitem_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_listitem_color',
                array(
                    'settings' => 'pirate_rogue_main_listitem_color',
                    'label'    => esc_html__( 'Listitem color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Sets listitems of an unnumbered list to a new color.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       
        $wp_customize->add_setting( 'pirate_rogue_main_quoteborder_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_quoteborder_color',
                array(
                    'settings' => 'pirate_rogue_main_quoteborder_color',
                    'label'    => esc_html__( 'Blockquote border color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Overwrites the default color for blockquote borders', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       
       
       // Meta Links
        $wp_customize->add_setting( 'pirate_rogue_main_meta_bgcol', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_meta_bgcol',
                array(
                    'settings' => 'pirate_rogue_main_meta_bgcol',
                    'label'    => esc_html__( 'Meta links background', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Background color for meta links, like tags and categories', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       $wp_customize->add_setting( 'pirate_rogue_main_meta_bgcol_hover', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_meta_bgcol_hover',
                array(
                    'settings' => 'pirate_rogue_main_meta_bgcol_hover',
                    'label'    => esc_html__( 'Meta links hovered background', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       
        $wp_customize->add_setting( 'pirate_rogue_main_meta_textcol', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_meta_textcol',
                array(
                    'settings' => 'pirate_rogue_main_meta_textcol',
                    'label'    => esc_html__( 'Meta links', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Color for meta links, like tags and categories', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       $wp_customize->add_setting( 'pirate_rogue_main_meta_textcol_hover', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_meta_textcol_hover',
                array(
                    'settings' => 'pirate_rogue_main_meta_textcol_hover',
                    'label'    => esc_html__( 'Meta links (hovered)', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       
       // Tables
       $wp_customize->add_setting( 'pirate_rogue_main_table_textcol', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_table_textcol',
                array(
                    'settings' => 'pirate_rogue_main_table_textcol',
                    'label'    => esc_html__( 'Table color', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
        $wp_customize->add_setting( 'pirate_rogue_main_table_bgcol', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_table_bgcol',
                array(
                    'settings' => 'pirate_rogue_main_table_bgcol',
                    'label'    => esc_html__( 'Table background color', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       $wp_customize->add_setting( 'pirate_rogue_main_table_bgcol_header', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_table_bgcol_header',
                array(
                    'settings' => 'pirate_rogue_main_table_bgcol_header',
                    'label'    => esc_html__( 'Table header background', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
        $wp_customize->add_setting( 'pirate_rogue_main_table_bgcol_oddrows', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_main_table_bgcol_oddrows',
                array(
                    'settings' => 'pirate_rogue_main_table_bgcol_oddrows',
                    'label'    => esc_html__( 'Table header background on odd rows', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       
       
       
        
        // Footer
        
        $wp_customize->add_setting( 'pirate_rogue_footer_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_footer_background_color',
                array(
                    'settings' => 'pirate_rogue_footer_background_color',
                    'label'    => esc_html__( 'Footer background', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Background color for footer region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
        $wp_customize->add_setting( 'pirate_rogue_footer_headline_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_footer_headline_color',
                array(
                    'settings' => 'pirate_rogue_footer_headline_color',
                    'label'    => esc_html__( 'Footer headline color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Color for all headlines in footer region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
        $wp_customize->add_setting( 'pirate_rogue_footer_text_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_footer_text_color',
                array(
                    'settings' => 'pirate_rogue_footer_text_color',
                    'label'    => esc_html__( 'Footer text color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Textcolor for footer region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       $wp_customize->add_setting( 'pirate_rogue_footer_link_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_footer_link_color',
                array(
                    'settings' => 'pirate_rogue_footer_link_color',
                    'label'    => esc_html__( 'Footer link color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Link color for footer region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );
       $wp_customize->add_setting( 'pirate_rogue_footer_linkhover_color', array(
		'default'           => '',
		'sanitize_callback' => 'pirate_rogue_sanitize_colors',
                'capability'        => 'edit_theme_options'
        ) );

       $wp_customize->add_control(
            new WP_Customize_Colorlist_Radio(
                $wp_customize,
                'pirate_rogue_footer_linkhover_color',
                array(
                    'settings' => 'pirate_rogue_footer_linkhover_color',
                    'label'    => esc_html__( 'Footer link hover color', 'pirate-rogue'),
                    'description'	=> esc_html__( 'Link hover color for footer region.', 'pirate-rogue'),
                    'section'  => 'pirate_rogue_section_coloroverwrite',
                    'type'     => 'colorlist-radio', // The $type in our class
                    'choices'  => $default_colorlist,
                )
            )
        );

        // Custom CSS Section
        //*********************************************************************
	$wp_customize->add_setting( 'pirate_rogue_custom_css_input', array(
		'default'                   => '',
		'sanitize_callback' 	     => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'pirate_rogue_custom_css_input', array(
		'label'             => esc_html__( 'Custom CSS', 'pirate-rogue'),
		'description'	    => esc_html__( 'Add custom CSS here. Please consider using a child theme for bigger CSS customizations. Also remember that you will loose all custom CSS changes made here, if you change the theme.', 'pirate-rogue'),
		'section' 	    => 'pirate_rogue_customcss',
		'type' 		    => 'textarea',
	) );
       
	// Pirate Crew Settings
        //*********************************************************************
       if ( is_plugin_active( 'pirate-crew/pirate-crew.php' ) || is_plugin_active( 'Pirate-Crew/pirate-crew.php' ) ) {
	    // Add Panel for Plugin Pirate Crew
	    $wp_customize->add_section( 'plugin_pirate_crew_setting', array(
		'priority' 	               => 9,
		'theme_supports' 	        => '',
		'title' 	                 => esc_html__('Pirate Crew Settings', 'pirate-rogue'),
		'panel' 		       => 'pirate_rogue_themeoptions',

	    ) );
	    
	   $wp_customize->add_setting( 'pirate_rogue_crewmember-title', array(
		'default'		    => '',
		'sanitize_callback'	    => 'wp_kses_post',
	    ) );

	    $wp_customize->add_control( 'pirate_rogue_crewmember-title', array(
		    'label'		    => esc_html__( 'Title', 'pirate-rogue'),
		    'description'	    => esc_html__( 'Sets a title above Pirate Crew Member Infopanel', 'pirate-rogue'),
		    'section'		    => 'plugin_pirate_crew_setting',
		    'type'		    => 'text',
		    'priority'		    => 1,
	    ) );
	    
	    
	    
	    $wp_customize->add_setting( 'pirate_rogue_crewmember-position', array(
		'default' 		=> 'sidebar',
		'sanitize_callback' 	=> 'pirate_rogue_sanitize_pirate_crew_member_position',
	    ) );

	    $wp_customize->add_control( 'pirate_rogue_crewmember-position', array(
		'label' 		=> esc_html__( 'Position', 'pirate-rogue'),
		'description'		=> esc_html__( 'Sets the position to display the pirate crew member card.', 'pirate-rogue'),
		'section' 		=> 'plugin_pirate_crew_setting',
		'priority' 		=> 2,
                'default'               => 'sidebar',
		'type' 			=> 'select',
		'choices' 		=> array(
			'sidebar'	 => 'sidebar',
			'content'	 => 'content'
		),
	    ) );
	    
	    $wp_customize->add_setting( 'pirate_rogue_crewmember-style', array(
		'default' 		=> 'style3',
		'sanitize_callback' 	=> 'pirate_rogue_sanitize_pirate_crew_member_style',
	    ) );

	    $wp_customize->add_control( 'pirate_rogue_crewmember-style', array(
		'label' 		=> esc_html__( 'Styling', 'pirate-rogue'),
		'description'		=> esc_html__( 'Sets the position to display the pirate crew member card.', 'pirate-rogue'),
		'section' 		=> 'plugin_pirate_crew_setting',
		'priority' 		=> 2,
                'default'               => 'style3',
		'type' 			=> 'select',
		'choices' 		=> array(
			'style1'	 => 'style1',
			'style2'	 => 'style2',
			'style3'	 => 'style3',
			'style4'	 => 'style4',
		),
	    ) );
	    
	    $wp_customize->add_setting( 'pirate_rogue_crewmember-format', array(
		'default' 		=> 'card',
		'sanitize_callback' 	=> 'pirate_rogue_sanitize_pirate_crew_member_format',
	    ) );

	    $wp_customize->add_control( 'pirate_rogue_crewmember-format', array(
		'label' 		=> esc_html__( 'Format', 'pirate-rogue'),
		'description'		=> esc_html__( 'Sets the format to display the pirate crew member card.', 'pirate-rogue'),
		'section' 		=> 'plugin_pirate_crew_setting',
		'priority' 		=> 2,
                'default'               => 'card',
		'type' 			=> 'select',
		'choices' 		=> array(
			'card'	 => 'card',
			'list'	 => 'list',
		),
	    ) );
        }    
	
		
}
add_action( 'customize_register', 'pirate_rogue_customize_register');
/*-----------------------------------------------------------------------------------*/
/* Add Custom Customizer Controls - Category Dropdown
/*-----------------------------------------------------------------------------------*/
if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Colorlist_Radio extends WP_Customize_Control {
        // The type of customize control being rendered.
        public $type = 'colorlist-radio';

        // Displays the multiple select on the customize screen.
        public function render_content() {
            if ( empty( $this->choices ) )
                return;
           ?>
                <?php if ( ! empty( $this->label ) ) : ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php endif;
                if ( ! empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
                <?php endif; ?>
                    <div class="colorlist-radio-group">
                        
                        
                        
                    <?php foreach ( $this->choices as $name => $value ) : ?>                        
                        <label for="_customize-colorlist-radio_<?php echo esc_attr( $this->id ); ?>_<?php echo esc_attr( $name ); ?>" <?php if ($value=="#000") { echo 'style="color: white;"'; } ?>>
                            <input name="_customize-colorlist-radio_<?php echo esc_attr( $this->id ); ?>" id="_customize-colorlist-radio_<?php echo esc_attr( $this->id ); ?>_<?php echo esc_attr( $name ); ?>" type="radio" value="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $name ); ?> >
                                <span class="colorbox" style="background-color: <?php echo esc_attr( $value ); ?>">&nbsp;</span>
                            </input>
                            <span class="screen-reader-text"><?php echo ucfirst(esc_attr( $name) ); ?></span>
                        </label>
                    <?php endforeach; ?>
                        
                        <label for="_customize-colorlist-radio_<?php echo esc_attr( $this->id ); ?>_reset">
                            <input name="_customize-colorlist-radio_<?php echo esc_attr( $this->id ); ?>" id="_customize-colorlist-radio_<?php echo esc_attr( $this->id ); ?>_reset" type="radio" value="" <?php $this->link(); checked( $this->value(), "" ); ?> >
                                <span class="reset"><?php echo __("Reset",'pirate-rogue'); ?></span> 
                            </input>
                        </label>
                    </div>
	<?php }
        
    }
}
/*-----------------------------------------------------------------------------------*/
/* Add Custom Customizer Controls - Category Dropdown
/*-----------------------------------------------------------------------------------*/
if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Category_Control extends WP_Customize_Control {

        public function render_content() {
            $dropdown = wp_dropdown_categories(
                array(
                    'name'              => '_customize-dropdown-categories-' . $this->id,
                    'echo'              => 0,
                    'orderby'           => 'name',
                    'show_option_none'  => esc_html__( '&mdash; Select &mdash;', 'pirate-rogue'),
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
/*-----------------------------------------------------------------------------------*/
/* Add Custom Customizer Controls - Tag Dropdown
/*-----------------------------------------------------------------------------------*/
if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Tag_Control extends WP_Customize_Control {
        public function render_content() {
            $dropdown = wp_dropdown_categories(
                array(
                    'name'              => '_customize-dropdown-tags-' . $this->id,
                    'echo'              => 0,
                    'orderby'           => 'name',
                    'show_option_none'  => esc_html__( '&mdash; Select &mdash;', 'pirate-rogue'),
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
/*-----------------------------------------------------------------------------------*/
/* Sanitize Colors
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_sanitize_colors( $color ) {
    global $default_colorlist;
	if ( ! in_array( $color, array_keys($default_colorlist) ) ) {
		$color = '';
	}
	return $color;
}
/*-----------------------------------------------------------------------------------*/
/* Sanitize Checkboxes.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}
/*-----------------------------------------------------------------------------------*/
/*  Sanitize Sidebar Position.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_sanitize_sidebar( $pirate_rogue_sidebar ) {
	if ( ! in_array( $pirate_rogue_sidebar, array( 'sidebar-right', 'sidebar-left' ) ) ) {
		$pirate_rogue_sidebar = 'sidebar-right';
	}
	return $pirate_rogue_sidebar;
}

/*-----------------------------------------------------------------------------------*/
/*  Sanitize Sidebar Visibility Settings.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_sanitize_sidebar_hide( $pirate_rogue_sidebar_hide ) {
	if ( ! in_array( $pirate_rogue_sidebar_hide, array( 'sidebar-show', 'sidebar-no', 'sidebar-no-single', 'sidebar-no-front' ) ) ) {
		$pirate_rogue_sidebar_hide = 'sidebar-show';
	}
	return $pirate_rogue_sidebar_hide;
}


/*-----------------------------------------------------------------------------------*/
/*  Sanitize Featured Slider Style
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_sanitize_sliderstyle( $pirate_rogue_sliderstyle ) {
	if ( ! in_array( $pirate_rogue_sliderstyle, array( 'slider-fullwidth', 'slider-boxed', 'slider-fullscreen' ) ) ) {
		$pirate_rogue_sliderstyle = 'slider-fullwidth';
	}
	return $pirate_rogue_sliderstyle;
}


/*-----------------------------------------------------------------------------------*/
/* Sanitize Featured Slider image animation.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_sanitize_slideranimation( $uku_slideranimation ) {
	if ( ! in_array( $uku_slideranimation, array( 'slider-slide', 'slider-fade' ) ) ) {
		$uku_slideranimation = 'slider-slide';
	}
	return $uku_slideranimation;
}

/*-----------------------------------------------------------------------------------*/
/*  Sanitize Custom Header Image Style.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_sanitize_headerstyle( $pirate_rogue_headerstyle ) {
	if ( ! in_array( $pirate_rogue_headerstyle, array( 'header-fullwidth', 'header-boxed', 'header-fullscreen' ) ) ) {
		$pirate_rogue_headerstyle = 'header-fullwidth';
	}
	return $pirate_rogue_headerstyle;
}


/*-----------------------------------------------------------------------------------*/
/*  Sanitize Social Media Colorset
/*-----------------------------------------------------------------------------------*/
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


/*-----------------------------------------------------------------------------------*/
/* Pirate Crew Plugin Member Format
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_sanitize_pirate_crew_member_format( $pirate_crew_format ) {
	if ( ! in_array( $pirate_crew_format, array( 'card', 'list') ) ) {
		$pirate_crew_format = 'card';
	}
	return $pirate_crew_format;
}
/*--------------------------------------------------------------------*/
/* Sanitize format for member shortcode, list style 
/*--------------------------------------------------------------------*/
function pirate_rogue_sanitize_pirate_crew_member_style( $pirate_crew_style ) {
	if ( ! in_array( $pirate_crew_style, array( 'style1', 'style2', 'style3', 'style4') ) ) {
		$pirate_crew_style = 'style3';
	}
	return $pirate_crew_style;
}
/*--------------------------------------------------------------------*/
/* Sanitize format for member shortcode position
/*--------------------------------------------------------------------*/
function pirate_rogue_sanitize_pirate_crew_member_position( $pirate_crew_pos ) {
	if ( ! in_array( $pirate_crew_pos, array( 'sidebar', 'content') ) ) {
		$pirate_crew_pos = 'sidebar';
	}
	return $pirate_crew_pos;
}

/*--------------------------------------------------------------------*/
/* Add JavaScript file for customizer preview
/*--------------------------------------------------------------------*/
/*  Not yet... 
add_action( 'customize_preview_init', 'pirate_rogue_customizer_preview' );
function pirate_rogue_customizer_preview() {
	wp_enqueue_script(
		  'customizer_preview',
		  get_template_directory_uri() . '/js/customizer.js',
		  array( 'jquery','customize-preview' ),
		  '',
		  true
	);
}
*/
/*--------------------------------------------------------------------*/
/* The end of this file as you know it
/*--------------------------------------------------------------------*/