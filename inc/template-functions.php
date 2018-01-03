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
	$pirate_rogue_page_sidebar  = get_post_meta(  get_the_ID(), 'pirate_rogue_page_sidebar', true );
	 if ( is_page() &&  !is_active_sidebar( 'sidebar-2' ) && (empty($pirate_rogue_page_sidebar)) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if (('' != get_theme_mod( 'pirate_rogue_front_hideauthor' ) ) || ('' != get_theme_mod( 'pirate_rogue_all_hideauthor' ) )) {
             $classes[] = 'no-author';
         }
	 
	 if ( '' != get_the_post_thumbnail ()) {
		 $classes[] = 'has-thumb';
	 }
	 if ( has_header_image() ) {
		 $classes[] = 'headerimg-on';
	 }
	 if ( '' != get_theme_mod( 'pirate_rogue_hidecomments' ) ) {
		 $classes[] = 'toggledcomments';
	 }
	 if ( '' != get_theme_mod( 'uku_customlogo' ) ) {
		 $classes[] = 'custom-logo-on';
	 }
	 if ( '' != get_theme_mod( 'pirate_rogue_hidetagline' ) ) {
		 $classes[] = 'hide-tagline';
	 }
	 if ('sidebar-left' == get_theme_mod( 'pirate_rogue_sidebar' ) ) {
		 $classes[] = 'sidebar-left';
	 }
	 if ( is_page_template( 'page-templates/no-sidebar.php' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if ('sidebar-no' == get_theme_mod( 'pirate_rogue_sidebar' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if (is_single() && 'sidebar-no-single' == get_theme_mod( 'pirate_rogue_sidebar_hide' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if (is_front_page() && 'sidebar-no-front' == get_theme_mod( 'pirate_rogue_sidebar_hide' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if ('sidebar-no' == get_theme_mod( 'pirate_rogue_sidebar_hide' ) ) {
		 $classes[] = 'no-sidebar';
	 }
	 if ('' != get_theme_mod( 'pirate_rogue_featuredtag' )  || '' != get_theme_mod( 'pirate_rogue_featuredcat' ) ) {
		 $classes[] = 'slider-on';
	 }
	 if ('slider-boxed' == get_theme_mod( 'pirate_rogue_sliderstyle' ) ) {
		 $classes[] = 'slider-boxed';
	 }
	 if ('slider-fullscreen' == get_theme_mod( 'pirate_rogue_sliderstyle' ) ) {
		 $classes[] = 'slider-fullscreen';
	 }
	 if ('slider-fade' == get_theme_mod( 'uku_slideranimation' ) ) {
		 $classes[] = 'slider-fade';
	 }
	 if ('header-boxed' == get_theme_mod( 'pirate_rogue_headerstyle' ) ) {
		 $classes[] = 'header-boxed';
	 }
	 if ('header-fullscreen' == get_theme_mod( 'pirate_rogue_headerstyle' ) ) {
		 $classes[] = 'header-fullscreen';
	 }
	 if ('dark' == get_theme_mod( 'pirate_rogue_fixedheader' ) ) {
		 $classes[] = 'hide-header-sticky';
	 }

	 if ( ! is_active_sidebar( 'sidebar-offcanvas' ) ) {
		 $classes[] = 'offcanvas-widgets-off';
	 }
	 if (is_single()) {
	    if ( comments_open() && '' != get_theme_mod ( 'pirate_rogue_hidecomments' ) && '0' == get_comments_number() ) {
		    $classes[] = 'comments-show';
	    }
	 }

	 // Option to add body classes via custom fields
        if (  get_post_meta( get_the_ID(), 'pirate_rogue_canonical', true ) ) {
            $classes[] = 'is-mirror';
        }
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

        $logo =  pirate_rogue_get_custom_logo();
        if ( !empty($logo) ) {
                $classes[] = 'no-header-text';
        }
             

        if ('' != get_theme_mod( 'uku_front_section_twocolumn_excerpt') ) { 
            $classes[] = 'front_section_twocolumn_excerpt';
        }
        if ('' != get_theme_mod( 'uku_front_section_threecolumn_excerpt' ) ) { 
            $classes[] = 'front_section_threecolumn_excerpt';
        } 
        if ('' != get_theme_mod( 'uku_front_section_fourcolumn_excerpt' ) ) { 
            $classes[] = 'front_section_fourcolumn_excerpt';
        } 
        if ('' != get_theme_mod( 'uku_front_section_sixcolumn_excerpt' ) ) {
            $classes[] = 'front_section_sixcolumn_excerpt';
        } 
        if ('' != get_theme_mod( 'uku_front_hidedate' ) ) {
           $classes[] = 'front_hidedate';
        }
         if ('' != get_theme_mod( 'uku_front_hidecomments' ) ) { 
            $classes[] = 'front_hidecomments';
        } 
        if ('' != get_theme_mod( 'uku_front_hidecats' ) ) {
            $classes[] = 'front_hidecats';
        } 

        if ('' != get_theme_mod( 'pirate_rogue_devider_hideimage' ) ) {
            $classes[] = 'devider_hideimage';
        } 
        
        // Head
        if ('' != get_theme_mod( 'pirate_rogue_head_background_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_head_background_color' );
            $classname = 'head-bgcol-'.$val;
            $classes[] = $classname;
        } 
         if ('' != get_theme_mod( 'pirate_rogue_head_text_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_head_text_color' );
            $classname = 'head-textcol-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_head_linkhover_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_head_linkhover_color' );
            $classname = 'head-linkborder-'.$val;
            $classes[] = $classname;
        } 
         if ('' != get_theme_mod( 'pirate_rogue_actionbutton_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_actionbutton_color' );
            $classname = 'actionbutton-'.$val;
            $classes[] = $classname;
        } 
        
        
        
        
        // Main
        if ('' != get_theme_mod( 'pirate_rogue_main_background_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_background_color' );
            $classname = 'main-bgcol-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_main_text_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_text_color' );
            $classname = 'main-textcol-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_main_link_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_link_color' );
            $classname = 'main-linkcol-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_main_linkhover_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_linkhover_color' );
            $classname = 'main-linkhovercol-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_main_headline_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_headline_color' );
            $classname = 'main-headlinecol-'.$val;
            $classes[] = $classname;
        } 
        
        if ('' != get_theme_mod( 'pirate_rogue_main_titleunderline_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_titleunderline_color' );
            $classname = 'main-titleunderline-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_main_listitem_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_listitem_color' );
            $classname = 'main-listitem-'.$val;
            $classes[] = $classname;
        } 
         if ('' != get_theme_mod( 'pirate_rogue_main_quoteborder_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_quoteborder_color' );
            $classname = 'main-quoteborder-'.$val;
            $classes[] = $classname;
        } 
        
        
        
        // Footer
         if ('' != get_theme_mod( 'pirate_rogue_footer_background_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_footer_background_color' );
            $classname = 'footer-bgcol-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_footer_text_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_footer_text_color' );
            $classname = 'footer-textcol-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_footer_link_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_footer_link_color' );
            $classname = 'footer-linkcol-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_footer_linkhover_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_footer_linkhover_color' );
            $classname = 'footer-linkhovercol-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_footer_headline_color' ) ) {
            $val = get_theme_mod( 'pirate_rogue_footer_headline_color' );
            $classname = 'footer-headlinecol-'.$val;
            $classes[] = $classname;
        } 
        
        if ('' != get_theme_mod( 'pirate_rogue_main_meta_bgcol' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_meta_bgcol' );
            $classname = 'main-meta-bgcol-'.$val;
            $classes[] = $classname;
        } 
         if ('' != get_theme_mod( 'pirate_rogue_main_meta_bgcol_hover' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_meta_bgcol_hover' );
            $classname = 'main-meta-bgcol-hover-'.$val;
            $classes[] = $classname;
        } 
         if ('' != get_theme_mod( 'pirate_rogue_main_meta_textcol' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_meta_textcol' );
            $classname = 'main-meta-textcol-'.$val;
            $classes[] = $classname;
        }
        
        if ('' != get_theme_mod( 'pirate_rogue_main_meta_textcol_hover' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_meta_textcol_hover' );
            $classname = 'main-meta-textcol-hover-'.$val;
            $classes[] = $classname;
        } 
        if ('' != get_theme_mod( 'pirate_rogue_main_table_textcol' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_table_textcol' );
            $classname = 'main-table-textcol-'.$val;
            $classes[] = $classname;
        }
        if ('' != get_theme_mod( 'pirate_rogue_main_table_bgcol' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_table_bgcol' );
            $classname = 'main-table-bgcol-'.$val;
            $classes[] = $classname;
        }
        if ('' != get_theme_mod( 'pirate_rogue_main_table_bgcol_header' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_table_bgcol_header' );
            $classname = 'main-table-bgcol-head-'.$val;
            $classes[] = $classname;
        }
        if ('' != get_theme_mod( 'pirate_rogue_main_table_bgcol_oddrows' ) ) {
            $val = get_theme_mod( 'pirate_rogue_main_table_bgcol_oddrows' );
            $classname = 'main-table-bgcol-odd-'.$val;
            $classes[] = $classname;
        }
        
        

        
	 // Additional body classes for WooCommerce
	 if ( is_active_sidebar( 'sidebar-shop' )) {
		 $classes[] = 'sidebar-shop';
	 }

	 return $classes;
 }
 add_filter( 'body_class', 'pirate_rogue_body_class' );
  /*-----------------------------------------------------------------------------------*/
 /* make links relative
 /*-----------------------------------------------------------------------------------*/
 function pirate_rogue_make_link_relative($url) {
    $current_site_url = get_site_url();   
	if (!empty($GLOBALS['_wp_switched_stack'])) {
        $switched_stack = $GLOBALS['_wp_switched_stack'];
        $blog_id = end($switched_stack);
        if ($GLOBALS['blog_id'] != $blog_id) {
            $current_site_url = get_site_url($blog_id);
        }
    }
    $current_host = parse_url($current_site_url, PHP_URL_HOST);
    $host = parse_url($url, PHP_URL_HOST);
    if($current_host == $host) {
        $url = wp_make_link_relative($url);
    }
    return $url; 
}
 /*-----------------------------------------------------------------------------------*/
 /* Add a special walker for the main menu, allowing us, to add some stuff :)
 /*-----------------------------------------------------------------------------------*/
 class Pirate_Rogue_Menu_Walker extends Walker_Nav_Menu {
      public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
           if ( '-' === $item->title ) {
                $item_output = '<li class="menu_separator"><hr>';
           } else {     
                global $wp_query;
                $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

                $class_names = $value = $attributes = '';

                $classes = empty( $item->classes ) ? array() : (array) $item->classes;
                $ariapopup = '';
                $rellink = '';
		if (!empty($item->url)) {		
		    $rellink = pirate_rogue_make_link_relative($item->url);
		    if (substr($rellink,0,4) == 'http') {
			// absoluter Link auf externe Seite
			$classes[] = 'external';
		    } elseif ($rellink == '/') {
			// Link auf Startseite
			$classes[] = 'homelink';
		    }                 
		}
                
                if (in_array('has_children', $classes)) {
                    $ariapopup = ' aria-haspopup="true"';
                }
                $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
                $class_names = ' class="'. esc_attr( $class_names ) . '"';

                
		               
                
                $output .= $indent . '<li ' . $value . $class_names .$ariapopup.'>';
                
                
                $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
                $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

                if($depth != 0) {
                          $description = "";
                }
		$item_output = '';
		if (!empty($args->before))
		    $item_output .= $args->before;
                 $item_output .= '<a'. $attributes .'>';
                 
		if (!empty($args->link_before)) 
		    $item_output .= $args->link_before;
		
		$item_output .=apply_filters( 'the_title', $item->title, $item->ID );
                $item_output .= $description;
                
		if (!empty($args->link_after)) 
		    $item_output .= $args->link_after;                
                
		$item_output .= '</a>';
		
		 if (!empty($args->after))
		    $item_output .= $args->after;
           }
           $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            
       }
        public function display_element($el, &$children, $max_depth, $depth = 0, $args = array(), &$output){
        $id = $this->db_fields['id'];
        if(isset($children[$el->$id]))
            $el->classes[] = 'has_children';

        parent::display_element($el, $children, $max_depth, $depth, $args, $output);
    }
}
 /*-----------------------------------------------------------------------------------*/
 /* Add a special walker for the main menu, allowing us, to add some stuff :)
 /*-----------------------------------------------------------------------------------*/
 class Pirate_Rogue_OverlayMenu_Walker extends Walker_Nav_Menu {
      public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
           if ( '-' === $item->title ) {
                $item_output = '<li class="menu_separator">';
           } else {     
                global $wp_query;
                $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

                $class_names = $value = $attributes = '';

                $classes = empty( $item->classes ) ? array() : (array) $item->classes;
                $ariapopup = '';
                if (in_array('has_children', $classes)) {
                    $ariapopup = ' aria-haspopup="true"';
                }
                $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
                $class_names = ' class="'. esc_attr( $class_names ) . '"';

                
                
                
                $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
                $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

                if($depth != 0) {
                          $description = "";
                }
		$item_output = '';
		if (!empty($attributes)) {

		    if (!empty($args->before))
			$item_output .= $args->before;
		     $item_output .= '<a'. $attributes .'>';

		    if (!empty($args->link_before)) 
			$item_output .= $args->link_before;

		    $item_output .=apply_filters( 'the_title', $item->title, $item->ID );
		    $item_output .= $description;

		    if (!empty($args->link_after)) 
			$item_output .= $args->link_after;                

		    $item_output .= '</a>';

		     if (!empty($args->after))
			$item_output .= $args->after;
                     
                     
                    $output .= $indent . '<li ' . $value . $class_names .$ariapopup.'>';
		}
           }
           $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            
       }
        public function display_element($el, &$children, $max_depth, $depth = 0, $args = array(), &$output){
	    $id = $this->db_fields['id'];
	    if(isset($children[$el->$id]))
		$el->classes[] = 'has_children';

	    parent::display_element($el, $children, $max_depth, $depth, $args, $output);
	}
}
/*-----------------------------------------------------------------------------------*/
/* Get Image Meta Data
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_get_image_attributs($id=0) {
        $precopyright = ''; 
        if ($id==0) return;
        
        $meta = get_post_meta( $id );
        if (!isset($meta)) {
         return;
        }
	
        $result = array();	
        $image = wp_get_attachment_image_src($id, 'full');
	list($src, $width, $height) = $image;
        $hwstring = image_hwstring($width, $height);
	$result['src'] = $src;
	$result['hwstring'] = $hwstring;
	$result['width'] = $width;
	$result['height'] = $height;
	

	if (isset($meta['_wp_attachment_image_alt'][0])) {
	    $result['alt'] = trim(strip_tags($meta['_wp_attachment_image_alt'][0]));
	} else {
	    $result['alt'] = "";
	}   

        if (isset($meta['_wp_attachment_metadata']) && is_array($meta['_wp_attachment_metadata'])) {        
	    $data = unserialize($meta['_wp_attachment_metadata'][0]);
	    if (isset($data['image_meta']) && is_array($data['image_meta'])) {
		if (isset($data['image_meta']['copyright'])) {
		       $result['copyright'] = trim(strip_tags($data['image_meta']['copyright']));
		}
		if (isset($data['image_meta']['author'])) {
		       $result['author'] = trim(strip_tags($data['image_meta']['author']));
		} elseif (isset($data['image_meta']['credit'])) {
		       $result['credit'] = trim(strip_tags($data['image_meta']['credit']));
		}
		if (isset($data['image_meta']['title'])) {
		     $result['title'] = $data['image_meta']['title'];
		}
		if (isset($data['image_meta']['caption'])) {
		     $result['caption'] = $data['image_meta']['caption'];
		}
	    }
	    $result['orig_width'] = $data['width'];
	    $result['orig_height'] = $data['height'];
	    $result['orig_file'] = $data['file'];
	    
        }
	
        $attachment = get_post($id);
        if (isset($attachment) ) {
	    if (isset($attachment->post_excerpt)) {
		$result['excerpt'] = trim(strip_tags( $attachment->post_excerpt ));
	    }
	    if (isset($attachment->post_content)) {
		$result['description'] = trim(strip_tags( $attachment->post_content ));
	    }        
	    if (isset($attachment->post_title) && (empty( $result['title']))) {
		 $result['title'] = trim(strip_tags( $attachment->post_title )); 
	    }   
        }      
	$result['credits'] = '';
	

	
	    if (!empty($result['copyright'])) {
		$result['credits'] = $precopyright.' '.$result['copyright'];		
	    } elseif (!empty($result['author'])) {
		$result['credits'] = $precopyright.' '.$result['author'];
	    } elseif (!empty($result['credit'])) {
		$result['credits'] = $precopyright.' '.$result['credit'];		
            } else {
		if (!empty($result['caption'])) {
		    $result['credits'] = $result['caption'];
		} elseif (!empty($result['excerpt'])) {
		    $result['credits'] = $result['excerpt'];
		} 
	    }   
	
        return $result;
                
}

/*-----------------------------------------------------------------------------------*/
/* Returns an array as table
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_array2table($array, $table = true) {
    $out = '';
    $tableHeader = '';
    foreach ($array as $key => $value) {
	 $out .= '<tr>';
	 $out .= "<th>$key</th>";
        if (is_array($value)) {   
            if (!isset($tableHeader)) {
                $tableHeader =
                    '<th>' .
                    implode('</th><th>', array_keys($value)) .
                    '</th>';
            }
            array_keys($value);
	    $out .= "<td>";
            $out .= pirate_rogue_array2table($value, true);     
	    $out .= "</td>";
        } else {
            $out .= "<td>$value</td>";
        }
	$out .= '</tr>';
    }

    if ($table) {
        return '<table>' . $tableHeader . $out . '</table>';
    } else {
        return $out;
    }
}

/*-----------------------------------------------------------------------------------*/
/*  Create String for Publisher Info, used by Schema.org Microformat Data
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_create_schema_publisher($withrahmen = true) {
    $out = '';
    if ($withrahmen) {
	$out .= '<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">';  
    }
    $header_image = get_header_image();
    if ($header_image) {
        $src = esc_url( $header_image );
        $width = get_custom_header()->width;
        $height = get_custom_header()->height;
    } else {
        $custom_logo_id = get_theme_mod( 'custom_logo' );
	if ( $custom_logo_id ) {
            $image = wp_get_attachment_image_src($custom_logo_id, 'full'); 
            if ( $image ) {
                list($src, $width, $height) = $image;
            }
        }
    }
    $out .= '<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">';
    $out .= '<meta itemprop="url" content="'.$src.'">';
    $out .= '<meta itemprop="width" content="'.$width.'">';
    $out .= '<meta itemprop="height" content="'.$height.'">';
    $out .= '</div>';
    $out .= '<meta itemprop="name" content="'.get_bloginfo( 'title' ).'">';
    $out .= '<meta itemprop="url" content="'.home_url( '/' ).'">';
    if ($withrahmen) {
	$out .= '</div>';
    }
    return $out;
}
/*-----------------------------------------------------------------------------------*/
/*  Create String for Thumbnail info, used by Scema.org Microformat Data
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_create_schema_thumbnail($id = 0) {
    $output = "";
    if (!isset($id)) {
        $id = get_the_ID();
    }
    $post_thumbnail_id = get_post_thumbnail_id( $id ); 
    if ((!isset($post_thumbnail_id)) || ($post_thumbnail_id <= 0)) {
        $thumbfallbackid = absint(get_theme_mod( 'pirate_rogue_fallback_blogroll_thumbnail' ));
        if (isset($thumbfallbackid)) {
           $post_thumbnail_id = $thumbfallbackid;
        }
    }
  
    
    if ($post_thumbnail_id) {
        $thumbimage = wp_get_attachment_image_src( $post_thumbnail_id);
        $image =      wp_get_attachment_image_src( $post_thumbnail_id, 'full');
        $imageurl = $image[0]; 	
        $imgwidth = $image[1];
        $imgheight = $image[2];
        $output .= '<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">';
        $output .= '<meta itemprop="thumbnailUrl" content="'.esc_url($thumbimage[0]).'">';
        $output .= '<meta itemprop="url" content="'.esc_url($imageurl).'">';
        $output .= '<meta itemprop="width" content="'.$imgwidth.'">';
        $output .= '<meta itemprop="height" content="'.$imgheight.'">';
        $output .= '</div>';
    }
    return $output;
}

/*-----------------------------------------------------------------------------------*/
/* Change output for gallery
/*-----------------------------------------------------------------------------------*/
add_filter('post_gallery', 'pirate_rogue_post_gallery', 10, 2);
function pirate_rogue_post_gallery($output, $attr) {
    global $post;
    global $options;
    
    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => '',
	'type' => NULL,
	'lightbox' => FALSE,
	'captions' => 1,
	'columns'   => 6,
	'link'	=> 'file'

    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(
            array('include' => $include, 
                'post_status' => 'inherit', 
                'post_type' => 'attachment', 
                'post_mime_type' => 'image', 
                'order' => $order, 
                'orderby' => $orderby)
            );

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

	
    $output = '';
    if (!isset($attr['captions'])) {
	$attr['captions'] =1;
    }
     if (!isset($attr['columns'])) {
	$attr['columns'] = 7;
    }
    if (!isset($attr['type'])) {
	$attr['type'] = 'default';
    }
    if (!isset($attr['link'])) {
	$attr['link'] = 'file';
    }
   
    
    wp_enqueue_script( 'pirate-rogue-slick' );
    $rand = rand();	    
    $output .= "<div id=\"slider-$rand\" class=\"gallery\">\n";
    $output .= "<div class=\"slider gallery-slider\">\n";
    foreach ($attachments as $id => $attachment) {
	$img = wp_get_attachment_image_src($id, 'pirate-rogue-gallery');
        $meta = get_post($id);
        $img_full = wp_get_attachment_image_src($id, 'full');
	$output .= "\t".'<div><img src="'.esc_url($img[0]).'" width="'.$img[1].'" height="'.$img[2].'" alt="">';

        if ($meta->post_excerpt != '') {
            $output .= '<div class="gallery-image-caption">';
            $lightboxattr = '';
            if($meta->post_excerpt != '') { 
                $output .= $meta->post_excerpt; 
                $lightboxtitle = sanitize_text_field($meta->post_excerpt);
                if (strlen(trim($lightboxtitle))>1) {
                    $lightboxattr = ' title="'.$lightboxtitle.'"';
                }
            }
            if ($attr['link'] != 'none') {
                if($meta->post_excerpt != '') { $output .= '<br>'; }
                $output .= '<span class="linkorigin">(<a href="'.esc_url($img_full[0]).'" '.$lightboxattr.' class="lightbox" rel="lightbox-'.$rand.'">'.__('Full Size','pirate-rogue').'</a>)</span>';
            }
            $output .='</div>';
        }
        
        
        $output .= '</div>'."\n";
    }
    $output .= "</div>\n";
    $output .= "<script type=\"text/javascript\"> jQuery(document).ready(function($) {";
    $output .= "$('.gallery-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        arrows: true,
        adaptiveHeight: true,
        swipe: true,
        draggable: true,
        accessibility: true,
    });";
    $output .= "});</script>";
    $output .= "</div>\n";
    
    
    return $output;
}


/*-----------------------------------------------------------------------------------*/
/* EOF
/*-----------------------------------------------------------------------------------*/