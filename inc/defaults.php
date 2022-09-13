<?php
/*-----------------------------------------------------------------------------------*/
/* Default values
/*-----------------------------------------------------------------------------------*/

$pagebreakargs = array(
    'before'            => '<div class="page-links"><span class="pagination-title">' . __("Seite:", 'pirate-rogue'). '</span>',
    'after'             => '</div>',
    'link_before'       => '<span class="number">',
    'link_after'        => '</span>',
    'next_or_number'    => 'number',
    'separator'         => ' ',
    'nextpagelink'      => __( 'Next page',  'pirate-rogue' ),
    'previouspagelink'  => __( 'Previous page',  'pirate-rogue' ),
    'pagelink'          => '%',
    'echo'              => 0
);


// Default Colors
// Notice: This list must match with the SASS-Colorset in css/sass/variables.scss !!!
$default_colorlist = array(
    'main'      => '#ff8800',
    'second'    => '#672082',
    'third'     => '#698bc1',
    'four'      => '#148f93',
    'uspirates' => '#B127AF',
    'tkpirates' => '#00B5B1',
    'chpirates' => '#F9B200',
    'ispirates' => '#51297e',
    
    'black'     => '#000',
    'white'     => '#fff',
    'grey'      => '#e7e7eb',
    'darkgrey'  => '#1a1a1a',
    'blue'      => '#0066ff',
    'red'       => '#d7464d',
    'yellow'    => '#e7b547',
    'green'     => '#85c066'
);

// Options for Customizer
// @since 1.2.14

$pirate_rogue_options = array(
    'pirate_rogue_themeoptions' => array(
        'tabtitle'  => __('Theme Options', 'pirate-rogue'),
        'fields'    => array(
            'pirate_rogue_section_images'  => array(
               'type'    => 'section',
               'title'   =>  __( 'Default Images', 'pirate-rogue'),
            ),
            'pirate_rogue_fallback_thumbnail' => array(
                'type'    => 'image',
                'title'   => __( 'Fallback Thumbnail', 'pirate-rogue'),
                'label' => __( 'If thumbnail for a post is not available, use this thumbnail as a fallback.', 'pirate-rogue'), 
                'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
                'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
                'width'       => 1260,
                'height'      =>  709,
		'parent'  => 'pirate_rogue_section_images'
            ),
            'pirate_rogue_fallback_blogroll_thumbnail' => array(
                'type'    => 'image',
                'title'   =>  __( 'Fallback Thumbnail For Blogroll', 'pirate-rogue'),
                'label' => __( 'If thumbnail for a post is not available, use this thumbnail as a fallback for normal blogroll.', 'pirate-rogue'), 
                'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
                'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
                'width'       => 1024,
                'height'      =>  576,
		'parent'  => 'pirate_rogue_section_images'
            ),
            

            
            
            'pirate_rogue_section_header'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Header', 'pirate-rogue'),
                ),
            'pirate_rogue_headerstyle'=> array(
		    'type'    => 'select',
		    'title'   => __( 'Header Image Style', 'pirate-rogue'),
		    'label'   => __( 'Choose the style you like to use for the header image.', 'pirate-rogue'),
		    'liste'   => array(
    			'header-fullwidth' 	 => __( 'Fullwidth', 'pirate-rogue'),
			'header-boxed' 		 => __( 'Boxed', 'pirate-rogue'),
			'header-fullscreen'     => __( 'Fullscreen', 'pirate-rogue'),
                    ),
		    'default' => 'header-fullwidth',
		    'parent'  => 'pirate_rogue_section_header'
		    
		),  
            'pirate_rogue_hidesearch' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Hide Search in Header', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_header'
            ),
            'pirate_rogue_search_overlay_backgroundcolor'=> array(
		    'type'    => 'select',
		    'title'   => __( 'Search Background Style', 'pirate-rogue'),
		    'label'   => __( 'Choose the background color of the overlay search input.', 'pirate-rogue'),
		    'liste'   => array(
    			 'darkcolor'      => __( 'Dark grey', 'pirate-rogue'),
                    'maincolor'     => __( 'Main color', 'pirate-rogue'),
                    'secondcolor'   => __( 'Second color', 'pirate-rogue'),
                    ),
		    'default' => 'maincolor',
		    'parent'  => 'pirate_rogue_section_header'
		    
		),  
            
            
            'pirate_rogue_socialmedia_style'=> array(
		    'type'    => 'select',
		    'title'   => __( 'Social Media Icon Style', 'pirate-rogue'),
		    'label'   => __( 'Choose the color of the social media icons (needs items added to menu in a Social Icons position). Notice: this will also change the color of the search icon and the hamburger overlay icon.', 'pirate-rogue'),
		    'liste'   => array(
    			'colorful'      => __( 'Colorful Social Media Icons', 'pirate-rogue'),
                        'maincolor'     => __( 'Use main color', 'pirate-rogue'),
                        'secondcolor'   => __( 'Use second color', 'pirate-rogue'),
                    ),
		    'default' => 'colorful',
		    'parent'  => 'pirate_rogue_section_header'
		    
		),  
            'pirate_rogue_fixedheader' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'No Fix-Positioned Header', 'pirate-rogue'),
                   'label' => __( 'By default, the fix-positioned header is visible on wider screens, if the browser window is scrolled.', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_header'
            ),
            'pirate_rogue_show_titleonlogo' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Always Show Title', 'pirate-rogue'),
				  'label'   => __( 'By default, the site title is hidden if logo is present.', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_header'
            ),
            'pirate_rogue_show_labelonlogo' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Always Show Tagline', 'pirate-rogue'),
				  'label'   => __( 'By default, the site tagline is hidden if logo is present.', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_header'
            ),
            
            
            'pirate_rogue_meta_commentheader' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Display Meta Comment in Header', 'pirate-rogue'),
				  'label'   => __( 'Display a HTML comment of the theme in header part.', 'pirate-rogue'),
                  'default' => true,
		  'parent'  => 'pirate_rogue_section_header'
            ),
            
            
            'pirate_rogue_section_sidebar'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Sidebar', 'pirate-rogue'),
                ),
             'pirate_rogue_sidebar'=> array(
		    'type'    => 'select',
		    'title'   => __( 'Sidebar Position', 'pirate-rogue'),
		    'liste'   => array(
    			'sidebar-right' 	   => __( 'Right', 'pirate-rogue'),
			'sidebar-left' 		   => __( 'Left', 'pirate-rogue'),
                    ),
		    'default' => 'sidebar-right',
		    'parent'  => 'pirate_rogue_section_sidebar'
		    
		),  
              'pirate_rogue_sidebar_hide'=> array(
		    'type'    => 'select',
		    'title'   => __( 'Sidebar Visibility', 'pirate-rogue'),
		    'liste'   => array(
    			'sidebar-show'	 => __( 'Show sidebar', 'pirate-rogue'),
                        'sidebar-no'	 => __( 'Hide sidebar', 'pirate-rogue'),
                        'sidebar-no-single'	 => __( 'Hide sidebar on single posts', 'pirate-rogue'),
                        'sidebar-no-front'	 => __( 'Hide sidebar on front page', 'pirate-rogue'),
                    ),
		    'default' => 'sidebar-show',
		    'parent'  => 'pirate_rogue_section_sidebar'
		    
		),  
            
            'pirate_rogue_section_footer'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Footer', 'pirate-rogue'),
                ),
            
             'pirate_rogue_footerfeature_title'=> array(
		    'type'    => 'text',
		    'title'   => __( 'Title', 'pirate-rogue'),
		    'label'  => __( 'This is a small title text visible at the top of the area.', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_customlogofooter' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Show Custom Logo', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_footer'
            ),  
            'pirate_rogue_footerfeature_image' => array(
                'type'    => 'image',
                'title'   => __( 'Featured Image', 'pirate-rogue'),
                'width' => 800,
                'height'=> 450,
		'parent'  => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footerfeature_text_big'=> array(
		    'type'      => 'textarea',
		    'title'     => __( 'Big Text', 'pirate-rogue'),
		    'label'     => __( 'This big slogan text is shown next to the image (HTML is allowed).', 'pirate-rogue'),
		    'parent'    => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footerfeature_text_small'=> array(
		    'type'      => 'textarea',
		    'title'     => __( 'Small Text', 'pirate-rogue'),
		    'label'     =>  __( 'This is an additional smaller description text shown below the big text (HTML is allowed).', 'pirate-rogue'),
		    'parent'    => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footerfeature_btn_text'=> array(
		    'type'      => 'text',
		    'title'     => __( 'Button Text', 'pirate-rogue'),
		    'label'     => __( 'If you want to add a "Call to Action" button, include the button text here.', 'pirate-rogue'),
		    'parent'    => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footerfeature_btn_link'=> array(
		    'type'      => 'url',
		    'title'     => __( 'Button Link URL', 'pirate-rogue'),
		    'label'     => __( 'Enter the URL the button should link to.', 'pirate-rogue'),
		    'parent'    => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footermenu_image' => array(
                    'type'          => 'image',
                    'title'         => __( 'Menu Footer Image', 'pirate-rogue'),
                    'flex_width'    => true, // Allow any width, making the specified value recommended. False by default.
                    'flex_height'   => true, // Require the resulting image to be exactly as tall as the height attribute (default).
                    'width'         => 800,
                    'height'        =>  450,
                    'parent'        => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footer_search' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Show Search', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_credit'=> array(
		    'type'    => 'html',
		    'title'   => __( 'Credit Text', 'pirate-rogue'),
		    'label'   =>  __( 'Customize the footer credit text (HTML is allowed).', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_footer'
            ), 
            
            
            
            'pirate_rogue_section_metadata'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Metadata and Global Settings', 'pirate-rogue'),
                ),
          
            'pirate_rogue_author'=> array(
		    'type'    => 'text',
		    'title'   => __( 'Author', 'pirate-rogue'),
		    'label'   =>  __( 'This is the default author of posts used for structured data.', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_metadata'
            ), 
             'pirate_rogue_google_wmt_verification_text'=> array(
		    'type'    => 'text',
		    'title'   => __( 'Google Site Verification', 'pirate-rogue'),
		    'label'   => __( 'For verification of your website as property owner at Google Search Console, use the alternative method and copy the value of the attribute <b>content</b> of the given HTML tag.', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_metadata'
            ), 
            'pirate_rogue_devider_hideimage' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Hide Pirate Image On Dividers', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_metadata'
            ),
            'pirate_rogue_shadow_images' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Add Shadow To Images', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_metadata'
            ),
            'pirate_rogue_all_hideauthor' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Hide Author Names', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_metadata'
            ),
            'pirate_rogue_h1noupper' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Normal style for first headline', 'pirate-rogue'),                  
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_metadata'
            ),
            
            'pirate_rogue_section_comments'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Comments', 'pirate-rogue'),
                ),
            'pirate_rogue_hidecomments' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Show Comments Button', 'pirate-rogue'),
		  'label'   => __( 'This will hide comments below single posts. There will be a button to show the comments.', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_comments'
            ),
             'pirate_rogue_commentdisclaimer'=> array(
		    'type'    => 'html',
		    'title'   => __( 'Comment Disclaimer', 'pirate-rogue'),
		    'label'   => __( 'Disclaimer is shown above the comment form (HTML is allowed).', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_comments'
            ), 
            'pirate_rogue_externcomments_active' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Link To External Board', 'pirate-rogue'),
		  'label'   => __( 'Show a link to an external discussion board which vistors can use instead of regular comments.', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_comments'
            ),
             'pirate_rogue_externcomments_title'=> array(
		    'type'    => 'text',
		    'title'   =>__( 'Link Text', 'pirate-rogue'),
		    'label'   => __( 'Enter the text for the link to the external board.', 'pirate-rogue'),
                    'default'                   => __( 'Discuss this on our board', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_comments'
            ), 
             'pirate_rogue_externcomments_url'=> array(
		    'type'    => 'url',
		    'title'   => __( 'URL', 'pirate-rogue'),
		    'label'   => __( 'Enter the URL of the external board.', 'pirate-rogue'),
                    'default'   => 'https://forum.piratenpartei.de',
		     'parent'  => 'pirate_rogue_section_comments'
            ), 
            'pirate_rogue_section_misc'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Miscellaneous', 'pirate-rogue'),
            ),
                       
            'pirate_rogue_section_coloroverwrite'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Colors', 'pirate-rogue'),
                   'desc'   => __( 'This will allow to change the default colors. Please notice, that the following color options use a fix list of predefined colors. To change the website to other colors, use "Custom CSS" option.', 'pirate-rogue'),
            ),
            'pirate_rogue_head_background_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Header Background', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_head_text_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Header Texts', 'pirate-rogue'),
                'label'     => __( 'This applies to site title and menu links in header, plus the search icon and the hamburger overlay icon.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_head_linkhover_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Header Links (Hovered)', 'pirate-rogue'),
                'label'     => __( 'This applies to underlining of menu links in header, plus the search icon and the hamburger overlay icon.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_actionbutton_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Action Buttons', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_background_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Main Background', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_headline_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Main Headlines', 'pirate-rogue'),
                'label'     => __( 'This applies to all headlines in main region.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_text_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Main Texts', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_link_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Main Links', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_linkhover_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Main Links (Hovered)', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_titleunderline_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Title Underline', 'pirate-rogue'),
                'label'     => __( 'This applies to underlining of the page title.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_listitem_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'List Items', 'pirate-rogue'),
                'label'     => __( 'This applies to bullets of unordered lists.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_quoteborder_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Blockquote Borders', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_meta_bgcol' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Meta Links Backgrounds', 'pirate-rogue'),
                'label'     => __( 'This applies to meta links (e.g. tags and categories).', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_meta_bgcol_hover' => array(
                'type'      => 'colorlist-radio',
                'title'     =>  __( 'Meta Links Backgrounds (Hovered)', 'pirate-rogue'),
                'label'     => __( 'This applies to meta links (e.g. tags and categories).', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_meta_textcol' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Meta Links', 'pirate-rogue'),
                'label'     => __( 'This applies to meta links (e.g. tags and categories).', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_meta_textcol_hover' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Meta Links (Hovered)', 'pirate-rogue'),
                'label'     => __( 'This applies to meta links (e.g. tags and categories).', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_table_textcol' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Tables', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_table_bgcol' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Table Backgrounds', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_table_bgcol_header' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Table Header Backgrounds', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
             'pirate_rogue_main_table_bgcol_oddrows' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Table Backgrounds (Odd Rows)', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_background_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Footer Background', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_headline_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Footer Headlines', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_text_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Footer Texts', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_link_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Footer Links', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_linkhover_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => __( 'Footer Links (Hovered)', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            
            
            
            'plugin_pirate_crew_setting'  => array(
                'type'      => 'section',
                'title'     =>  __('Pirate Crew Settings', 'pirate-rogue'),
               
            ),
            'pirate_rogue_crewmember-title'=> array(
		'type'      => 'text',
		'title'     => __( 'Title', 'pirate-rogue'),
		'label'     => __( 'Set a title to show above pirate crew member info panel.', 'pirate-rogue'),
		'parent'    => 'plugin_pirate_crew_setting',
                'ifclass'  => 'Pirate_Crew',
            ),
            'pirate_rogue_crewmember-position'=> array(
		'title'     => __( 'Position', 'pirate-rogue'),
		'label'     => __( 'Set the position to show the pirate crew member card.', 'pirate-rogue'),
		'parent'    => 'plugin_pirate_crew_setting',
                'ifclass'  => 'Pirate_Crew',
                'default'   => 'sidebar',
		'type'      => 'select',
		'liste'     => array(
			'sidebar'	 => __('Sidebar', 'pirate-rogue'),
			'content'	 => __('Content','pirate-rogue')
		),
            ),
            'pirate_rogue_crewmember-style'=> array(
		'title'     => __( 'Style', 'pirate-rogue'),
		'label'     => __( 'Set the style of the pirate crew member card.', 'pirate-rogue'),
		'parent'    => 'plugin_pirate_crew_setting',
                'ifclass'  => 'Pirate_Crew',
                'default'   => 'style3',
		'type'      => 'select',
		'liste'     => array(
			'style1'	 => sprintf(__('Style %d', 'pirate-rogue'), 1),
			'style2'	 => sprintf(__('Style %d', 'pirate-rogue'), 2),
			'style3'	 => sprintf(__('Style %d', 'pirate-rogue'), 3),
			'style4'	 => sprintf(__('Style %d', 'pirate-rogue'), 4),
		),
            ),
            'pirate_rogue_crewmember-format'=> array(
		'title'     => __( 'Format', 'pirate-rogue'),
		'label'     => __( 'Set the format to show the pirate crew member card.', 'pirate-rogue'),
		'parent'    => 'plugin_pirate_crew_setting',
                'ifclass'  => 'Pirate_Crew',
                'default'   => 'card',
		'type'      => 'select',
		'liste'     => array(
			'card'	 => __('Card', 'pirate-rogue'),
			'list'	 => __('List', 'pirate-rogue'),
		),
            ),

        )
    ),
    'pirate_rogue_frontpage'    => array(
        'tabtitle'             => __('Blog Front Page', 'pirate-rogue'),
        'fields'    => array(
            
            'pirate_rogue_frontpage_general'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'General', 'pirate-rogue'),
            ),
            'uku_front_hideblog' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Hide Default Blog', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'uku_front_hidedate' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Hide Date', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'uku_front_hidecomments' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Hide Comments', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'uku_front_hidecats' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Hide Categories', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'pirate_rogue_front_hideauthor' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Hide Author Names', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'pirate_rogue_custom_latestposts'=> array(
		'type'    => 'text',
		'title'   => __( 'Latest Posts Title', 'pirate-rogue'),
		'label'   => __( 'Customize the "Latest Posts" title text above the blog content on your blog front page.', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_frontpage_general'
            ), 
            'pirate_rogue_custom_followus'=> array(
		'type'    => 'text',
		'title'   => __( 'Follow Us Text', 'pirate-rogue'),
		'label'   => __( 'Customize the "Follow us" text in your About section and footer social menus.', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_frontpage_general'
            ), 
            
            
            
            'pirate_rogue_slider'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Featured Posts Slider', 'pirate-rogue')
            ),
            'pirate_rogue_featuredtag' => array(
		'type'    => 'tag',
		'title'   => __( 'Slider tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_slider'
            ),
            'pirate_rogue_featuredcat' => array(
		'type'    => 'category',
		'title'   => __( 'Slider category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_slider'
            ), 
            'pirate_rogue_sliderstyle' => array(
		'type'    => 'select',
		'title'   => __( 'Style', 'pirate-rogue'),
                'label'     => __( 'Choose the slider design.', 'pirate-rogue'),
		'liste'   => array(
    			'slider-fullwidth'	=> __( 'Fullwidth', 'pirate-rogue'),
			'slider-boxed'		=> __( 'Boxed', 'pirate-rogue'),
		//	'slider-fullscreen'	=> __( 'Fullscreen', 'pirate-rogue'),
                ),
		'default' => 'slider-fullwidth',
                'parent'  => 'pirate_rogue_slider'	    
            ),
            'pirate_rogue_slideranimation' => array(
		'type'      => 'select',
		'title'     => __( 'Image Animation', 'pirate-rogue'),
                'label'     => __( 'Choose, if you want the slider images to fade or slide from one image to the next.', 'pirate-rogue'),
		'liste'     => array(
    			'slider-slide'	 => __( 'Slide', 'pirate-rogue'),
			'slider-fade' 	 => __( 'Fade', 'pirate-rogue'),
                ),
		'default'   => 'slider-slide',
                'parent'    => 'pirate_rogue_slider'	    
            ),
            'pirate_rogue_slider_autoplay' => array(
		'type'      => 'toggle-switch',
		'title'     => __( 'Autoplay', 'pirate-rogue'),
		'default'   => false,
                'parent'    => 'pirate_rogue_slider'	    
            ),
            'pirate_rogue_featured_slider_num' => array(
		'type'      => 'range',
		'title'     => __( 'Number of Slides', 'pirate-rogue'),
                'label'     => __( 'How many slides of feature posts are displayed. Notice: the more slides are loaded, the worse the performance of the page will be.', 'pirate-rogue'),
		'min'       => 2,
                'max'       => 6,
                'step'      => 1,
		'default'   => 3,
                'parent'    => 'pirate_rogue_slider'	    
            ),
            'pirate_rogue_fallback_slider' => array(
                'type'    => 'image',
                'title'   => __( 'Fallback Thumbnail For Slider', 'pirate-rogue'),
                'label'   => __( 'If thumbnail for a post is not avaible, use this image for the slider.', 'pirate-rogue'), 
                'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
                'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
                'width'       => 1440,
                'height'      =>  690,
		'parent'  => 'pirate_rogue_slider'
            ),
            
            'pirate_rogue_front_section_one'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Section Featured Top', 'pirate-rogue'),
            ),
            'uku_front_section_one_title'=> array(
		'type'    => 'text',
		'title'   => __( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_one'
            ), 
            'uku_front_section_one_tag' => array(
		'type'    => 'tag',
		'title'   => __( 'Section Tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_one'
            ),
            'uku_front_section_one_cat' => array(
		'type'    => 'category',
		'title'   => __( 'Section Category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_one'
            ), 
            
            
            
            'pirate_rogue_front_section_twocolumn'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Section 2-Columns', 'pirate-rogue'),
            ),
            'pirate_rogue_front_section_twocolumn_title'=> array(
		'type'    => 'text',
		'title'   => __( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_twocolumn'
            ), 
            'pirate_rogue_front_section_twocolumn_tag' => array(
		'type'    => 'tag',
		'title'   => __( 'Section Tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_twocolumn'
            ),
            'pirate_rogue_front_section_twocolumn_cat' => array(
		'type'    => 'category',
		'title'   => __( 'Section Category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_twocolumn'
            ),
            'pirate_rogue_front_section_twocolumn_number' => array(
		'type'    => 'range',
		'title'   => __( 'Number of Posts', 'pirate-rogue'),
                'min'     => 2,
                'max'     => 16,
		'parent'  => 'pirate_rogue_front_section_twocolumn'
            ),
            
            'pirate_rogue_front_section_threecolumn'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Section 3-Columns', 'pirate-rogue'),
            ),
            'uku_front_section_threecolumn_title'=> array(
		'type'    => 'text',
		'title'   => __( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ), 
            'uku_front_section_threecolumn_tag' => array(
		'type'    => 'tag',
		'title'   => __( 'Section Tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ),
            'uku_front_section_threecolumn_cat' => array(
		'type'    => 'category',
		'title'   => __( 'Section Category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ),
            'uku_front_section_threecolumn_number' => array(
		'type'    => 'range',
		'title'   => __( 'Number of Posts', 'pirate-rogue'),
                'min'     => 1,
                'max'     => 12,
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ),
            'uku_front_section_threecolumn_excerpt'=> array(
		'type'    => 'toggle-switch',
		'title'   => __( 'Show Post Excerpts', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ),
            
            'pirate_rogue_front_section_fullwidth'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Section Fullwidth', 'pirate-rogue'),
            ),
            'pirate_rogue_front_section_fullwidth_title'=> array(
		'type'    => 'text',
		'title'   => __( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fullwidth'
            ), 
            'pirate_rogue_front_section_fullwidth_tag' => array(
		'type'    => 'tag',
		'title'   => __( 'Section Tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fullwidth'
            ),
            'pirate_rogue_front_section_fullwidth_cat' => array(
		'type'    => 'category',
		'title'   => __( 'Section Category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fullwidth'
            ),
            'pirate_rogue_front_section_fullwidth_number' => array(
		'type'    => 'range',
		'title'   => __( 'Number of Posts', 'pirate-rogue'),
                'min'     => 1,
                'max'     => 3,
                'default'   => 1,
		'parent'  => 'pirate_rogue_front_section_fullwidth'
            ),
            
            
            'pirate_rogue_front_section_about'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Section About', 'pirate-rogue'),
            ),
             'pirate_rogue_front_section_about_title' => array(
		'type'    => 'text',
		'title'   => __( 'Section Title', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_about'
            ), 
            'pirate_rogue_front_section_about_image' => array(
                    'type'          => 'image',
                    'title'         => __( 'About Image', 'pirate-rogue'),
                    'label'         => __( 'The recommended image width for the About image is 580 pixels.', 'pirate-rogue'),
                    'flex_width'    => true, // Allow any width, making the specified value recommended. False by default.
                    'flex_height'   => true, // Require the resulting image to be exactly as tall as the height attribute (default).
                    'width'         => 1440,   
                    'height'        => 530,
                    'parent'        => 'pirate_rogue_front_section_about'
            ),
            'pirate_rogue_front_section_about_text' => array(
		'type'      => 'textarea',
		'title'     => __( 'About Text (required)', 'pirate-rogue'),
                'label'     => __( 'HTML is allowed.', 'pirate-rogue'),
		'parent'    => 'pirate_rogue_front_section_about'
            ), 
            
     
            'pirate_rogue_front_section_two'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Section Featured Bottom', 'pirate-rogue'),
            ),
            'pirate_rogue_front_section_two_title'=> array(
		'type'    => 'text',
		'title'   => __( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_two'
            ), 
            'pirate_rogue_front_section_two_tag' => array(
		'type'    => 'tag',
		'title'   => __( 'Section Tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_two'
            ),
            'pirate_rogue_front_section_two_cat' => array(
		'type'    => 'category',
		'title'   => __( 'Section Category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_two'
            ), 
            
            
            'pirate_rogue_front_section_three'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Section on Background', 'pirate-rogue'),
            ),
            'uku_front_section_three_title' => array(
		'type'    => 'text',
		'title'   => __( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_three'
            ), 
            'uku_front_section_three_tag' => array(
		'type'    => 'tag',
		'title'   => __( 'Section Tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_three'
            ),
            'uku_front_section_three_cat' => array(
		'type'    => 'category',
		'title'   => __( 'Section Category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_three'
            ),
            
            'pirate_rogue_front_section_fourcolumn'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Section 4-Columns', 'pirate-rogue'),
            ),
            'uku_front_section_fourcolumn_title'=> array(
		'type'    => 'text',
		'title'   => __( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ), 
            'uku_front_section_fourcolumn_tag' => array(
		'type'    => 'tag',
		'title'   => __( 'Section Tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ),
            'uku_front_section_fourcolumn_cat' => array(
		'type'    => 'category',
		'title'   => __( 'Section Category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ),
            'uku_front_section_fourcolumn_number' => array(
		'type'    => 'range',
		'title'   => __( 'Number of Posts', 'pirate-rogue'),
                'min'     => 4,
                'max'     => 16,
                'step'      => 2,
                'default'   => 8,
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ),
            'uku_front_section_fourcolumn_excerpt'=> array(
		'type'    => 'toggle-switch',
		'title'   => __( 'Show Post Excerpts', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ),
            
            
            
            'pirate_rogue_front_section_sixcolumn'  => array(
                   'type'    => 'section',
                   'title'   =>  __( 'Section 6-Columns', 'pirate-rogue'),
            ),
            'pirate_rogue_front_section_sixcolumn_title'=> array(
		'type'    => 'text',
		'title'   => __( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ), 
            'pirate_rogue_front_section_sixcolumn_tag' => array(
		'type'    => 'tag',
		'title'   => __( 'Section Tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ),
            'pirate_rogue_front_section_sixcolumn_cat' => array(
		'type'    => 'category',
		'title'   => __( 'Section Category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ),
            'pirate_rogue_front_section_sixcolumn_number' => array(
		'type'    => 'range',
		'title'   => __( 'Number of Posts', 'pirate-rogue'),
                'min'     => 6,
                'max'     => 24,
                'default'   => 6,
                'step'      => 2,
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ),
            'pirate_rogue_front_section_sixcolumn_excerpt'=> array(
		'type'    => 'toggle-switch',
		'title'   => __( 'Show Post Excerpts', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ),
        )
    )
);