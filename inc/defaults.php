<?php
/*-----------------------------------------------------------------------------------*/
/* Default values
/*-----------------------------------------------------------------------------------*/

$pagebreakargs = array(
    'before'   => '<div class="page-links">' . esc_html__('Page:', 'pirate-rogue'),
    'after'            => '</div>',
    'link_before'      => '<span class="number">',
    'link_after'       => '</span>',
    'next_or_number'   => 'number',
    'separator'        => ' ',
    'nextpagelink'     => __( 'Next page',  'pirate-rogue' ),
    'previouspagelink' => __( 'Previous page',  'pirate-rogue' ),
    'pagelink'         => '%',
    'echo' => 0
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
        'tabtitle'  => esc_html__('Theme Options', 'pirate-rogue'),
        'fields'    => array(
            'pirate_rogue_section_images'  => array(
               'type'    => 'section',
               'title'   =>  esc_html__( 'Default Images', 'pirate-rogue'),
            ),
            'pirate_rogue_fallback_thumbnail' => array(
                'type'    => 'image',
                'title'   => esc_html__( 'Upload Fallback Thumbnail image', 'pirate-rogue'),
                'label' => esc_html__( 'If thumbnail for a post is not avaible, define this thumbnail as a fallback', 'pirate-rogue'), 
                'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
                'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
                'width'       => 1260,
                'height'      =>  709,
		'parent'  => 'pirate_rogue_section_images'
            ),
            'pirate_rogue_fallback_blogroll_thumbnail' => array(
                'type'    => 'image',
                'title'   =>  esc_html__( 'Upload Fallback Thumbnail for blogroll', 'pirate-rogue'),
                'label' => esc_html__( 'If thumbnail for a post is not avaible, define this thumbnail as a fallback for normal blogroll', 'pirate-rogue'), 
                'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
                'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
                'width'       => 1024,
                'height'      =>  576,
		'parent'  => 'pirate_rogue_section_images'
            ),
            

            
            
            'pirate_rogue_section_header'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Header', 'pirate-rogue'),
                ),
            'pirate_rogue_headerstyle'=> array(
		    'type'    => 'select',
		    'title'   => esc_html__( 'Header Image Style', 'pirate-rogue'),
		    'label'   => esc_html__( 'Choose the Header image style you like to use.', 'pirate-rogue'),
		    'liste'   => array(
    			'header-fullwidth' 	 => esc_html__( 'fullwidth', 'pirate-rogue'),
			'header-boxed' 		 => esc_html__( 'boxed', 'pirate-rogue'),
			'header-fullscreen'     => esc_html__( 'fullscreen', 'pirate-rogue'),
                    ),
		    'default' => 'header-fullwidth',
		    'parent'  => 'pirate_rogue_section_header'
		    
		),  
            'pirate_rogue_hidesearch' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Hide search in Header', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_header'
            ),
            'pirate_rogue_search_overlay_backgroundcolor'=> array(
		    'type'    => 'select',
		    'title'   => esc_html__( 'Search Background Style', 'pirate-rogue'),
		    'label'   => esc_html__( 'Choose the background color of the overlay search input', 'pirate-rogue'),
		    'liste'   => array(
    			 'darkcolor'      => esc_html__( 'Dark grey', 'pirate-rogue'),
                    'maincolor'     => esc_html__( 'Main color', 'pirate-rogue'),
                    'secondcolor'   => esc_html__( 'Second color', 'pirate-rogue'),
                    ),
		    'default' => 'maincolor',
		    'parent'  => 'pirate_rogue_section_header'
		    
		),  
            
            
            'pirate_rogue_socialmedia_style'=> array(
		    'type'    => 'select',
		    'title'   => esc_html__( 'Social Media Icon Style', 'pirate-rogue'),
		    'label'   => esc_html__( 'Choose the color of the social media icons (needs a items in Social media menu position). Notice: This will also chance the color of the search icon and the hamburger overlay icon.', 'pirate-rogue'),
		    'liste'   => array(
    			'colorful'      => esc_html__( 'Colorful Social Media Icons', 'pirate-rogue'),
                        'maincolor'     => esc_html__( 'Use main color', 'pirate-rogue'),
                        'secondcolor'   => esc_html__( 'Use second color', 'pirate-rogue'),
                    ),
		    'default' => 'colorful',
		    'parent'  => 'pirate_rogue_section_header'
		    
		),  
            'pirate_rogue_fixedheader' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Hide fix-positioned Header', 'pirate-rogue'),
                   'label' => esc_html__( '(By default the fix-positioned Header is visible on wider screens, if the browser window is scrolled.)', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_header'
            ),
            'pirate_rogue_show_titleonlogo' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Show website title even if logo is present.', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_header'
            ),
            'pirate_rogue_show_labelonlogo' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Show website subtitle even if logo is present.', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_header'
            ),
            
            
            'pirate_rogue_section_sidebar'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Sidebar', 'pirate-rogue'),
                ),
             'pirate_rogue_sidebar'=> array(
		    'type'    => 'select',
		    'title'   => esc_html__( 'Sidebar Position', 'pirate-rogue'),
		    'liste'   => array(
    			'sidebar-right' 	   => esc_html__( 'sidebar right', 'pirate-rogue'),
			'sidebar-left' 		   => esc_html__( 'sidebar left', 'pirate-rogue'),
                    ),
		    'default' => 'sidebar-right',
		    'parent'  => 'pirate_rogue_section_sidebar'
		    
		),  
              'pirate_rogue_sidebar_hide'=> array(
		    'type'    => 'select',
		    'title'   => esc_html__( 'Sidebar Visibility', 'pirate-rogue'),
		    'liste'   => array(
    			'sidebar-show'	 => esc_html__( 'Show sidebar', 'pirate-rogue'),
                        'sidebar-no'	 => esc_html__( 'Hide sidebar', 'pirate-rogue'),
                        'sidebar-no-single'	 => esc_html__( 'Hide sidebar on single posts', 'pirate-rogue'),
                        'sidebar-no-front'	 => esc_html__( 'Hide sidebar on Front page', 'pirate-rogue'),
                    ),
		    'default' => 'sidebar-right',
		    'parent'  => 'pirate_rogue_section_sidebar'
		    
		),  
            
            'pirate_rogue_section_footer'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Footer', 'pirate-rogue'),
                ),
            
             'pirate_rogue_footerfeature_title'=> array(
		    'type'    => 'text',
		    'title'   => esc_html__( 'Title', 'pirate-rogue'),
		    'label'  => esc_html__( 'A small title text visible at the top of the area.', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_customlogofooter' => array(
                  'type'    => 'toggle-switch',
                  'title'   => __( 'Show custom logo in footer', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_footer'
            ),  
            'pirate_rogue_footerfeature_image' => array(
                'type'    => 'image',
                'title'   => esc_html__( 'Featured image', 'pirate-rogue'),
                'width' => 800,
                'height'=> 450,
		'parent'  => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footerfeature_text_big'=> array(
		    'type'      => 'textarea',
		    'title'     => esc_html__( 'Big Text', 'pirate-rogue'),
		    'label'     => esc_html__( 'A big slogan text next to the image (HTML is allowed.)', 'pirate-rogue'),
		    'parent'    => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footerfeature_text_small'=> array(
		    'type'      => 'textarea',
		    'title'     => esc_html__( 'Small Text', 'pirate-rogue'),
		    'label'     =>  esc_html__( 'An additional smaller description text below the big text (HTML is allowed.)', 'pirate-rogue'),
		    'parent'    => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footerfeature_btn_text'=> array(
		    'type'      => 'text',
		    'title'     => esc_html__( 'Button Text', 'pirate-rogue'),
		    'label'     => esc_html__( 'If you want to add a "Call to Action" button, include the button text here.', 'pirate-rogue'),
		    'parent'    => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footerfeature_btn_link'=> array(
		    'type'      => 'url',
		    'title'     => esc_html__( 'Button Link URL', 'pirate-rogue'),
		    'label'     => esc_html__( 'The URL the button should link to.', 'pirate-rogue'),
		    'parent'    => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footermenu_image' => array(
                    'type'          => 'image',
                    'title'         => esc_html__( 'Menu Footer Image', 'pirate-rogue'),
                    'flex_width'    => true, // Allow any width, making the specified value recommended. False by default.
                    'flex_height'   => true, // Require the resulting image to be exactly as tall as the height attribute (default).
                    'width'         => 800,
                    'height'        =>  450,
                    'parent'        => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_footer_search' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Show search in Footer', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_footer'
            ),
            'pirate_rogue_credit'=> array(
		    'type'    => 'html',
		    'title'   => esc_html__( 'Footer credit text', 'pirate-rogue'),
		    'label'   =>  esc_html__( 'Customize the footer credit text. (HTML is allowed)', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_footer'
            ), 
            
            
            
            'pirate_rogue_section_metadata'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Metadata and global settings', 'pirate-rogue'),
                ),
          
            'pirate_rogue_author'=> array(
		    'type'    => 'text',
		    'title'   => esc_html__( 'Author', 'pirate-rogue'),
		    'label'   =>  esc_html__( 'Default author of posts used for structured data', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_metadata'
            ), 
             'pirate_rogue_google_wmt_verification_text'=> array(
		    'type'    => 'text',
		    'title'   => esc_html__( 'Google Site Verification', 'pirate-rogue'),
		    'label'   =>  __( 'For verification of your website as property owner at <a target="_blank" href="https://www.google.com/webmasters/tools/home">Google Webmaster Tools</a>, use the alternative method and copy the <b>content</b>-Attribut of the given HTML-Tag. <br>Insert this string here. <br>'
                        . 'Example: If given: <br><code>&lt;meta name="google-site-verification" content="BBssyCpddd8" /&gt;</code><br> then insert <code>BBssyCpddd8</code> ', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_metadata'
            ), 
            'pirate_rogue_devider_hideimage' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Hide pirate image at devider', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_metadata'
            ),
            'pirate_rogue_shadow_images' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Add shadow to images in content', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_metadata'
            ),
            'pirate_rogue_all_hideauthor' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Hide author name on all pages', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_metadata'
            ),
            'pirate_rogue_h1noupper' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Normal text style for first Headline', 'pirate-rogue'),                  
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_metadata'
            ),
            
            'pirate_rogue_section_comments'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Comments', 'pirate-rogue'),
                ),
            'pirate_rogue_hidecomments' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Show Comments button on single posts', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_comments'
            ),
             'pirate_rogue_commentdisclaimer'=> array(
		    'type'    => 'html',
		    'title'   => esc_html__( 'Comment Disclaimer', 'pirate-rogue'),
		    'label'   => esc_html__( 'Disclaimer shown preview to comment form. (HTML is allowed)', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_comments'
            ), 
            'pirate_rogue_externcomments_active' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Link to external board for comments', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_section_comments'
            ),
             'pirate_rogue_externcomments_title'=> array(
		    'type'    => 'text',
		    'title'   =>esc_html__( 'Linktext', 'pirate-rogue'),
		    'label'   => esc_html__( 'Sets a link text for directing to external board', 'pirate-rogue'),
                    'default'                   => esc_html__( 'Discuss this on our board', 'pirate-rogue'),
		     'parent'  => 'pirate_rogue_section_comments'
            ), 
             'pirate_rogue_externcomments_url'=> array(
		    'type'    => 'url',
		    'title'   => esc_html__( 'URL', 'pirate-rogue'),
		    'label'   => esc_html__( 'Enter the URL for the external board', 'pirate-rogue'),
                    'default'   => 'https://news.piratenpartei.de',
		     'parent'  => 'pirate_rogue_section_comments'
            ), 
            'pirate_rogue_section_misc'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Miscellaneous', 'pirate-rogue'),
            ),
                       
            'pirate_rogue_section_coloroverwrite'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Colors', 'pirate-rogue'),
                   'desc'   => esc_html__( 'This will allow to change the default colors. Please notice, that the following color options use a fix list of predefined colors. To change the website to other colors, use "Custom CSS" option.', 'pirate-rogue'),
            ),
            'pirate_rogue_head_background_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Header background', 'pirate-rogue'),
                'label'     => esc_html__( 'Background color for header region.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_head_text_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Head text color', 'pirate-rogue'),
                'label'     => esc_html__( 'Textcolor for head region, including site title and menu links.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_head_linkhover_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Head link hover border-color', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_actionbutton_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Action buttons', 'pirate-rogue'),
                'label'     => esc_html__( 'All buttons, menu and search icons', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_background_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Main background', 'pirate-rogue'),
                'label'     => esc_html__( 'Background color for main region.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_headline_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Main headline color', 'pirate-rogue'),
                'label'     => esc_html__( 'Color for all headlines in main region.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_text_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Main text color', 'pirate-rogue'),
                'label'     => esc_html__( 'Textcolor for main region.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_link_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Main link color', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_linkhover_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Main link hover color', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_titleunderline_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Title underline color', 'pirate-rogue'),
                'label'     => esc_html__( 'Color for underline of the page title', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_listitem_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Listitem color', 'pirate-rogue'),
                'label'     => esc_html__( 'Sets listitems of an unnumbered list to a new color.', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_quoteborder_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Blockquote border color', 'pirate-rogue'),
                'label'     => esc_html__( 'Overwrites the default color for blockquote borders', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_meta_bgcol' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Meta links background', 'pirate-rogue'),
                'label'     => esc_html__( 'Background color for meta links, like tags and categories', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_meta_bgcol_hover' => array(
                'type'      => 'colorlist-radio',
                'title'     =>  esc_html__( 'Meta links hovered background', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_meta_textcol' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Meta links', 'pirate-rogue'),
                'label'     => esc_html__( 'Color for meta links, like tags and categories', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_meta_textcol_hover' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Meta links (hovered)', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_table_textcol' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Table color', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_table_bgcol' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Table background color', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_main_table_bgcol_header' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Table header background', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
             'pirate_rogue_main_table_bgcol_oddrows' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Table header background on odd rows', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_background_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Footer background', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_headline_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Footer headline color', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_text_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Footer text color', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_link_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Footer link color', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            'pirate_rogue_footer_linkhover_color' => array(
                'type'      => 'colorlist-radio',
                'title'     => esc_html__( 'Footer link hover color', 'pirate-rogue'),
                'liste'     => $default_colorlist,
                'parent'    => 'pirate_rogue_section_coloroverwrite'
            ),
            
            
            
            'plugin_pirate_crew_setting'  => array(
                'type'      => 'section',
                'title'     =>  esc_html__('Pirate Crew Settings', 'pirate-rogue'),
               
            ),
            'pirate_rogue_crewmember-title'=> array(
		'type'      => 'text',
		'title'     => esc_html__( 'Title', 'pirate-rogue'),
		'label'     => esc_html__( 'Sets a title above Pirate Crew Member Infopanel', 'pirate-rogue'),
		'parent'    => 'plugin_pirate_crew_setting',
                'ifclass'  => 'Pirate_Crew',
            ),
            'pirate_rogue_crewmember-position'=> array(
		'title'     => esc_html__( 'Position', 'pirate-rogue'),
		'label'     => esc_html__( 'Sets the position to display the pirate crew member card.', 'pirate-rogue'),
		'parent'    => 'plugin_pirate_crew_setting',
                'ifclass'  => 'Pirate_Crew',
                'default'   => 'sidebar',
		'type'      => 'select',
		'liste'     => array(
			'sidebar'	 => 'sidebar',
			'content'	 => 'content'
		),
            ),
            'pirate_rogue_crewmember-style'=> array(
		'title'     => esc_html__( 'Styling', 'pirate-rogue'),
		'label'     => esc_html__( 'Sets the styling of the pirate crew member card.', 'pirate-rogue'),
		'parent'    => 'plugin_pirate_crew_setting',
                'ifclass'  => 'Pirate_Crew',
                'default'   => 'style3',
		'type'      => 'select',
		'liste'     => array(
			'style1'	 => 'style1',
			'style2'	 => 'style2',
			'style3'	 => 'style3',
			'style4'	 => 'style4',
		),
            ),
            'pirate_rogue_crewmember-format'=> array(
		'title'     => esc_html__( 'Format', 'pirate-rogue'),
		'label'     => esc_html__( 'Sets the format to display the pirate crew member card.', 'pirate-rogue'),
		'parent'    => 'plugin_pirate_crew_setting',
                'ifclass'  => 'Pirate_Crew',
                'default'   => 'card',
		'type'      => 'select',
		'liste'     => array(
			'card'	 => 'card',
			'list'	 => 'list',
		),
            ),

        )
    ),
    'pirate_rogue_frontpage'    => array(
        'tabtitle'             => esc_html__('Blog Front Page', 'pirate-rogue'),
        'fields'    => array(
            
            'pirate_rogue_frontpage_general'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'General', 'pirate-rogue'),
            ),
            'uku_front_hideblog' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Hide default blog on Front page', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'uku_front_hidedate' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Hide date on Front page', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'uku_front_hidecomments' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Hide comments count on Front page', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'uku_front_hidecats' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Hide categories on Front page', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'pirate_rogue_front_hideauthor' => array(
                  'type'    => 'toggle-switch',
                  'title'   => esc_html__( 'Hide author name on Front page', 'pirate-rogue'),
                  'default' => false,
		  'parent'  => 'pirate_rogue_frontpage_general'
            ),
            'pirate_rogue_custom_latestposts'=> array(
		'type'    => 'text',
		'title'   => esc_html__( 'Latest Posts title', 'pirate-rogue'),
		'label'   => esc_html__( 'Customize the "Latest Posts" title text above the blog content on your blog front page.', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_frontpage_general'
            ), 
            'pirate_rogue_custom_followus'=> array(
		'type'    => 'text',
		'title'   => esc_html__( 'Follow us text', 'pirate-rogue'),
		'label'   => esc_html__( 'Customize the "Follow us" text in your About section and footer social menus.', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_frontpage_general'
            ), 
            
            
            
            'pirate_rogue_slider'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Featured Posts Slider', 'pirate-rogue'),
                    'desc'   => esc_html__( 'Settings for the featured post slider.', 'pirate-rogue'),
            ),
            'pirate_rogue_featuredtag' => array(
		'type'    => 'tag',
		'title'   => esc_html__( 'Slider tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_slider'
            ),
            'pirate_rogue_featuredcat' => array(
		'type'    => 'category',
		'title'   => esc_html__( 'Slider category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_slider'
            ), 
            'pirate_rogue_sliderstyle' => array(
		'type'    => 'select',
		'title'   => esc_html__( 'Style', 'pirate-rogue'),
                'label'     => esc_html__( 'Choose the slider design.', 'pirate-rogue'),
		'liste'   => array(
    			'slider-fullwidth'	=> esc_html__( 'fullwidth', 'pirate-rogue'),
			'slider-boxed'		=> esc_html__( 'boxed', 'pirate-rogue'),
		//	'slider-fullscreen'	=> esc_html__( 'fullscreen', 'pirate-rogue'),
                ),
		'default' => 'slider-fullwidth',
                'parent'  => 'pirate_rogue_slider'	    
            ),
            'pirate_rogue_slideranimation' => array(
		'type'      => 'select',
		'title'     => esc_html__( 'Image Animation', 'pirate-rogue'),
                'label'     => esc_html__( 'Choose, if you want the slider images to fade or slide from one image to the next.', 'pirate-rogue'),
		'liste'     => array(
    			'slider-slide'	 => esc_html__( 'slide', 'pirate-rogue'),
			'slider-fade' 	 => esc_html__( 'fade', 'pirate-rogue'),
                ),
		'default'   => 'slider-slide',
                'parent'    => 'pirate_rogue_slider'	    
            ),
            'pirate_rogue_slider_autoplay' => array(
		'type'      => 'toggle-switch',
		'title'     => esc_html__( 'Autoplay', 'pirate-rogue'),
		'default'   => false,
                'parent'    => 'pirate_rogue_slider'	    
            ),
            'pirate_rogue_featured_slider_num' => array(
		'type'      => 'range',
		'title'     => esc_html__( 'Number of slides', 'pirate-rogue'),
                'label'     => esc_html__( 'How many slides of feature posts are displayed (notice: each slide more will reduce the performance cause of big images load).', 'pirate-rogue'),
		'min'       => 2,
                'max'       => 6,
                'step'      => 1,
		'default'   => 3,
                'parent'    => 'pirate_rogue_slider'	    
            ),
            'pirate_rogue_fallback_slider' => array(
                'type'    => 'image',
                'title'   => esc_html__( 'Upload Fallback image for slider', 'pirate-rogue'),
                'label'   => esc_html__( 'If  thumbnail for a post is not avaible, define this image for the slider', 'pirate-rogue'), 
                'flex_width'  => true, // Allow any width, making the specified value recommended. False by default.
                'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
                'width'       => 1440,
                'height'      =>  690,
		'parent'  => 'pirate_rogue_slider'
            ),
            
            'pirate_rogue_front_section_one'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Section Featured Top', 'pirate-rogue'),
            ),
            'uku_front_section_one_title'=> array(
		'type'    => 'text',
		'title'   => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_one'
            ), 
            'uku_front_section_one_tag' => array(
		'type'    => 'tag',
		'title'   => esc_html__( 'Section tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_one'
            ),
            'uku_front_section_one_cat' => array(
		'type'    => 'category',
		'title'   => esc_html__( 'Section category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_one'
            ), 
            
            
            
            'pirate_rogue_front_section_twocolumn'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Section 2-Columns', 'pirate-rogue'),
            ),
            'pirate_rogue_front_section_twocolumn_title'=> array(
		'type'    => 'text',
		'title'   => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_twocolumn'
            ), 
            'pirate_rogue_front_section_twocolumn_tag' => array(
		'type'    => 'tag',
		'title'   => esc_html__( 'Section tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_twocolumn'
            ),
            'pirate_rogue_front_section_twocolumn_cat' => array(
		'type'    => 'category',
		'title'   => esc_html__( 'Section category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_twocolumn'
            ),
            'pirate_rogue_front_section_twocolumn_number' => array(
		'type'    => 'range',
		'title'   => esc_html__( 'Number of posts', 'pirate-rogue'),
                'min'     => 2,
                'max'     => 16,
		'parent'  => 'pirate_rogue_front_section_twocolumn'
            ),
            
            'pirate_rogue_front_section_threecolumn'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Section 3-Columns', 'pirate-rogue'),
            ),
            'uku_front_section_threecolumn_title'=> array(
		'type'    => 'text',
		'title'   => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ), 
            'uku_front_section_threecolumn_tag' => array(
		'type'    => 'tag',
		'title'   => esc_html__( 'Section tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ),
            'uku_front_section_threecolumn_cat' => array(
		'type'    => 'category',
		'title'   => esc_html__( 'Section category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ),
            'uku_front_section_threecolumn_number' => array(
		'type'    => 'range',
		'title'   => esc_html__( 'Number of posts', 'pirate-rogue'),
                'min'     => 1,
                'max'     => 12,
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ),
            'uku_front_section_threecolumn_excerpt'=> array(
		'type'    => 'toggle-switch',
		'title'   => esc_html__( 'Show post excerpt texts', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_threecolumn'
            ),
            
            'pirate_rogue_front_section_fullwidth'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Section Fullwidth', 'pirate-rogue'),
            ),
            'pirate_rogue_front_section_fullwidth_title'=> array(
		'type'    => 'text',
		'title'   => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fullwidth'
            ), 
            'pirate_rogue_front_section_fullwidth_tag' => array(
		'type'    => 'tag',
		'title'   => esc_html__( 'Section tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fullwidth'
            ),
            'pirate_rogue_front_section_fullwidth_cat' => array(
		'type'    => 'category',
		'title'   => esc_html__( 'Section category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fullwidth'
            ),
            'pirate_rogue_front_section_fullwidth_number' => array(
		'type'    => 'range',
		'title'   => esc_html__( 'Number of posts', 'pirate-rogue'),
                'min'     => 1,
                'max'     => 3,
                'default'   => 1,
		'parent'  => 'pirate_rogue_front_section_fullwidth'
            ),
            
            
            'pirate_rogue_front_section_about'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Section About', 'pirate-rogue'),
            ),
             'pirate_rogue_front_section_about_title' => array(
		'type'    => 'text',
		'title'   => esc_html__( 'Section Title', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_about'
            ), 
            'pirate_rogue_front_section_about_image' => array(
                    'type'          => 'image',
                    'title'         => esc_html__( 'About image', 'pirate-rogue'),
                    'label'         => esc_html__( 'The recommended image width for the About image is 580 pixels.', 'pirate-rogue'),
                    'flex_width'    => true, // Allow any width, making the specified value recommended. False by default.
                    'flex_height'   => true, // Require the resulting image to be exactly as tall as the height attribute (default).
                    'width'         => 1440,   
                    'height'        => 530,
                    'parent'        => 'pirate_rogue_front_section_about'
            ),
            'pirate_rogue_front_section_about_text' => array(
		'type'      => 'textarea',
		'title'     => esc_html__( 'About Text (required)', 'pirate-rogue'),
                'label'     => esc_html__( '(HTML is allowed.)', 'pirate-rogue'),
		'parent'    => 'pirate_rogue_front_section_about'
            ), 
            
     
            'pirate_rogue_front_section_two'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Section Featured Bottom', 'pirate-rogue'),
            ),
            'pirate_rogue_front_section_two_title'=> array(
		'type'    => 'text',
		'title'   => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_two'
            ), 
            'pirate_rogue_front_section_two_tag' => array(
		'type'    => 'tag',
		'title'   => esc_html__( 'Section tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_two'
            ),
            'pirate_rogue_front_section_two_cat' => array(
		'type'    => 'category',
		'title'   => esc_html__( 'Section category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_two'
            ), 
            
            
            'pirate_rogue_front_section_three'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Section on Background', 'pirate-rogue'),
            ),
            'uku_front_section_three_title' => array(
		'type'    => 'text',
		'title'   => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_three'
            ), 
            'uku_front_section_three_tag' => array(
		'type'    => 'tag',
		'title'   => esc_html__( 'Section tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_three'
            ),
            'uku_front_section_three_cat' => array(
		'type'    => 'category',
		'title'   => esc_html__( 'Section category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_three'
            ),
            
            'pirate_rogue_front_section_fourcolumn'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Section 4-Columns', 'pirate-rogue'),
            ),
            'uku_front_section_fourcolumn_title'=> array(
		'type'    => 'text',
		'title'   => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ), 
            'uku_front_section_fourcolumn_tag' => array(
		'type'    => 'tag',
		'title'   => esc_html__( 'Section tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ),
            'uku_front_section_fourcolumn_cat' => array(
		'type'    => 'category',
		'title'   => esc_html__( 'Section category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ),
            'uku_front_section_fourcolumn_number' => array(
		'type'    => 'range',
		'title'   => esc_html__( 'Number of posts', 'pirate-rogue'),
                'min'     => 4,
                'max'     => 16,
                'step'      => 2,
                'default'   => 8,
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ),
            'uku_front_section_fourcolumn_excerpt'=> array(
		'type'    => 'toggle-switch',
		'title'   => esc_html__( 'Show post excerpt texts', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_fourcolumn'
            ),
            
            
            
            'pirate_rogue_front_section_sixcolumn'  => array(
                   'type'    => 'section',
                   'title'   =>  esc_html__( 'Section 6-Columns', 'pirate-rogue'),
            ),
            'pirate_rogue_front_section_sixcolumn_title'=> array(
		'type'    => 'text',
		'title'   => esc_html__( 'Section Title (optional)', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ), 
            'pirate_rogue_front_section_sixcolumn_tag' => array(
		'type'    => 'tag',
		'title'   => esc_html__( 'Section tag', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ),
            'pirate_rogue_front_section_sixcolumn_cat' => array(
		'type'    => 'category',
		'title'   => esc_html__( 'Section category', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ),
            'pirate_rogue_front_section_sixcolumn_number' => array(
		'type'    => 'range',
		'title'   => esc_html__( 'Number of posts', 'pirate-rogue'),
                'min'     => 6,
                'max'     => 24,
                'default'   => 6,
                'step'      => 2,
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ),
            'pirate_rogue_front_section_sixcolumn_excerpt'=> array(
		'type'    => 'toggle-switch',
		'title'   => esc_html__( 'Show post excerpt texts', 'pirate-rogue'),
		'parent'  => 'pirate_rogue_front_section_sixcolumn'
            ),
        

 
            
        )
    )
);

        
	