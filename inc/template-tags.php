<?php
 /*-----------------------------------------------------------------------------------*/
 /* Custom Pirate Rogue template tags: Functions for templates and output
 /*-----------------------------------------------------------------------------------*/
function pirate_rogue_load_template_part($template_name, $part_name=null) {
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}
/*-----------------------------------------------------------------------------------*/
/* Get cat id by name or slug
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_get_cat_ID($string) {
    if (empty($string)) {
        return 0;
    }
    $string= esc_attr( $string );
    if (is_string($string)) {
	$thisid = get_cat_ID($string);
        if ($thisid==0) {
            $idObj = get_category_by_slug( $string );
            if (false==$idObj) {
                return 0;
            }
            $thisid = $idObj->term_id;
        }
        return $thisid;
    } elseif(is_numeric($string)) {
        return $string;
    }
    
}

/*-----------------------------------------------------------------------------------*/
/* Get tag id
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_get_tag_ID($tag_name) {
    $tag = get_term_by('name', $tag_name, 'post_tag');
    if ($tag) {
	return $tag->term_id;
    } else {
	return 0;
    }
}
 /*-----------------------------------------------------------------------------------*/
 /* Display blog entries with like front section bottom (1 / 3 sized)
 /*-----------------------------------------------------------------------------------*/
 if ( ! function_exists( 'pirate_rogue_section_featured_1to3' ) ) :
 function pirate_rogue_section_featured_1to3($posttag = '', $postcat = '', $title = '',  $num = 8, $htmlid = '', $divclass= '') {
    $posttag = $posttag ? esc_attr( $posttag ) : '';
    
    if (is_string($posttag)) {
	$posttag = pirate_rogue_get_tag_ID($posttag);
    }
    
    
    if ($posttag=='') {
        $posttag = get_theme_mod('pirate_rogue_front_section_two_tag');
    } elseif ($posttag == '-') {
        $posttag = 0;
    }
    $postcat = pirate_rogue_get_cat_ID($postcat);
   
    if ($postcat==0) {
        $postcat = get_theme_mod('pirate_rogue_front_section_two_cat');
    }
    if (!isset($postcat) && !isset($posttag)) {
        return;
    }  
    $title = $title ?  esc_attr( $title ) : '';
    if (empty($title)) {
        if ( '' != get_theme_mod( 'uku_front_section_two_title' )) {
            $title = esc_html( get_theme_mod( 'uku_front_section_two_title' ) );
        }
    }       
    
    if (!is_int($num)) {
	$num = 8;
    }
    $divclass = $divclass ? esc_attr( $divclass ) : '';
    
    
        $tag_link = get_tag_link( $posttag );
        $category_link = get_category_link($postcat);

        $pirate_rogue_section_two_first_query = new WP_Query( array(
                'posts_per_page'	=> 1,
                'post_status'		=> 'publish',
                'tag_id' 		=> $posttag,
                'cat' 			=> $postcat,
                'ignore_sticky_posts'	=> 1,
        ) );


        $args = array(
                'posts_per_page' 	=> $num,
                'offset' 		=> 1,
                'post_status'           => 'publish',
                'tag_id' 		=> $posttag,
                'cat' 			=> $postcat,
                'ignore_sticky_posts'	=> 1,
        );
	$pirate_rogue_section_two_second_query = new WP_Query( $args );
		
	$htmlid = $htmlid ?  esc_attr( $htmlid ) : 'page-section-two';
        $out = '<section id="'.$htmlid.'" class="cf '.$divclass.'">';
        if (!empty($title)) {
            if (!empty($postcat)) {
                $out .= '<h3 class="front-section-title">'.esc_html( $title ).'<span><a class="all-posts-link" href="'.esc_url( $category_link ).'">'.__('All posts', 'pirate-rogue').'</a></span></h3>'."\n";
            } else {
                $out .= '<h3 class="front-section-title">'.esc_html( $title ).'<span><a class="all-posts-link" href="'.esc_url( $tag_link ).'">'.__('All posts', 'pirate-rogue').'</a></span></h3>'."\n";                
            }
        }
       
        
        $out .= '<div class="section-two-column-one">'."\n";
		if($pirate_rogue_section_two_first_query->have_posts()) :
			while($pirate_rogue_section_two_first_query->have_posts()) : $pirate_rogue_section_two_first_query->the_post();
                            $out .= pirate_rogue_load_template_part('template-parts/content-frontpost-big' ); 
			endwhile; 

		endif; // have_posts()

	 $out .= '</div><!-- end .section-two-column-one -->'."\n";
	 $out .= '<div class="section-two-column-two columns-wrap">'."\n";
		if($pirate_rogue_section_two_second_query->have_posts()) : 
			while($pirate_rogue_section_two_second_query->have_posts()) : $pirate_rogue_section_two_second_query->the_post();
				$out .= pirate_rogue_load_template_part('template-parts/content-frontpost-small' );
			endwhile; 

		endif; // have_posts() 

		wp_reset_postdata();

	 $out .= '</div><!-- end .section-two-column-two -->'."\n";
	 $out .= '</section><!-- end #front-section-two -->'."\n";
        return $out;
 }
 endif;

/*-----------------------------------------------------------------------------------*/
 /* Display blog entries with like front section bottom (3 / 1 sized)
 /*-----------------------------------------------------------------------------------*/
 if ( ! function_exists( 'pirate_rogue_section_featured_3to1' ) ) :
 function pirate_rogue_section_featured_3to1($posttag = '', $postcat = '', $title = '',  $num = 5, $htmlid = '', $divclass= '') {
    $posttag = $posttag ? esc_attr( $posttag ) : '';
    
    if (is_string($posttag)) {
	$posttag = pirate_rogue_get_tag_ID($posttag);
    }
    
    
    if ($posttag=='') {
        $posttag = get_theme_mod('uku_front_section_one_tag');
    } elseif ($posttag == '-') {
        $posttag = 0;
    }
    $postcat = pirate_rogue_get_cat_ID($postcat);
  

    if ($postcat==0) {
        $postcat = get_theme_mod('uku_front_section_one_cat');
    }
    if (!isset($postcat) && !isset($posttag)) {
        return;
    }  
    $title = $title ?  esc_attr( $title ) : '';
    if (empty($title)) {
        if ( '' != get_theme_mod( 'uku_front_section_one_title' )) {
            $title = esc_html( get_theme_mod( 'uku_front_section_one_title' ) );
        }
    }       
    
    if (!is_int($num)) {
	$num = 5;
    }
    $divclass = $divclass ? esc_attr( $divclass ) : '';
    
    
        $tag_link = get_tag_link( $posttag );
        $category_link = get_category_link($postcat);

        $pirate_rogue_section_two_first_query = new WP_Query( array(
                'posts_per_page'	=> 1,
                'post_status'		=> 'publish',
                'tag_id' 		=> $posttag,
                'cat' 			=> $postcat,
                'ignore_sticky_posts'	=> 1,
        ) );


        $args = array(
                'posts_per_page' 	=> $num,
                'offset' 		=> 1,
                'post_status'           => 'publish',
                'tag_id' 		=> $posttag,
                'cat' 			=> $postcat,
                'ignore_sticky_posts'	=> 1,
        );
	$pirate_rogue_section_two_second_query = new WP_Query( $args );
		
	$htmlid = $htmlid ?  esc_attr( $htmlid ) : 'page-section-one';
        $out = '<section id="'.$htmlid.'" class="cf '.$divclass.'">';
        if (!empty($title)) {
            if (!empty($postcat)) {
                $out .= '<h3 class="front-section-title">'.esc_html( $title ).'<span><a class="all-posts-link" href="'.esc_url( $category_link ).'">'.__('All posts', 'pirate-rogue').'</a></span></h3>'."\n";
            } else {
                $out .= '<h3 class="front-section-title">'.esc_html( $title ).'<span><a class="all-posts-link" href="'.esc_url( $tag_link ).'">'.__('All posts', 'pirate-rogue').'</a></span></h3>'."\n";                
            }
        }
       
        
        $out .= '<div class="section-one-column-one">'."\n";
		if($pirate_rogue_section_two_first_query->have_posts()) :
			while($pirate_rogue_section_two_first_query->have_posts()) : $pirate_rogue_section_two_first_query->the_post();
                            $out .= pirate_rogue_load_template_part('template-parts/content-frontpost-big' ); 
			endwhile; 

		endif; // have_posts()

	 $out .= '</div><!-- end .section-one-column-one -->'."\n";
	 $out .= '<div class="section-one-column-two columns-wrap">'."\n";
		if($pirate_rogue_section_two_second_query->have_posts()) : 
			while($pirate_rogue_section_two_second_query->have_posts()) : $pirate_rogue_section_two_second_query->the_post();
				$out .= pirate_rogue_load_template_part('template-parts/content-frontpost-small' );
			endwhile; 

		endif; // have_posts() 

		wp_reset_postdata();

	 $out .= '</div><!-- end .section-one-column-two -->'."\n";
	 $out .= '</section>'."\n";
        return $out;
 }
 endif;

 /*-----------------------------------------------------------------------------------*/
 /* Display blog entries in two columns display
 /*-----------------------------------------------------------------------------------*/
 if ( ! function_exists( 'pirate_rogue_section_twocolumn' ) ) :
 function pirate_rogue_section_twocolumn($posttag = '', $postcat = '', $title = '',  $num = 4, $divclass= '') {
    $posttag = $posttag ? esc_attr( $posttag ) : '';
    
    if (is_string($posttag)) {
	$posttag = pirate_rogue_get_tag_ID($posttag);
    }
    
    
    if ($posttag=='') {
        $posttag = get_theme_mod('pirate_rogue_front_section_twocolumn_tag');
    } elseif ($posttag == '-') {
        $posttag = 0;
    }
    $postcat = pirate_rogue_get_cat_ID($postcat);
    if ($postcat==0) {
        $postcat = get_theme_mod('pirate_rogue_front_section_twocolumn_cat');
    }
    if (!isset($postcat) && !isset($posttag)) {
        return;
    }  
    $title = $title ?  esc_attr( $title ) : '';
    if (empty($title)) {
        if ( '' != get_theme_mod( 'pirate_rogue_front_section_twocolumn_title' )) {
            $title = esc_html( get_theme_mod( 'pirate_rogue_front_section_twocolumn_title' ) );
        }
    }       
    
    if (!is_int($num)) {
	$num =4;
    }
    $divclass = $divclass ? esc_attr( $divclass ) : '';
    
    
        $tag_link = get_tag_link( $posttag );
        $category_link = get_category_link($postcat);

        $pirate_rogue_section_twocolumn_query = new WP_Query( array(
            'posts_per_page'		=> $num,
            'tag_id' 			=> $posttag,
            'cat' 			=> $postcat,
            'post_status'		=> 'publish',
            'ignore_sticky_posts'	=> 1,
        ) );

        $thumbfallbackid = absint(get_theme_mod( 'pirate_rogue_fallback_thumbnail' ));
	if (!isset($thumbfallbackid)) {
	    $thumbfallbackid =0;
	} else {
	    $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-front-big' )[0];
	}
		
        $out = '<section id="front-section-twocolumn" class="cf columns-wrap '.$divclass.'">';
        if (!empty($title)) {
            if (!empty($postcat)) {
                $out .= '<h3 class="front-section-title">'.esc_html( $title ).'<span><a class="all-posts-link" href="'.esc_url( $category_link ).'">'.__('All posts', 'pirate-rogue').'</a></span></h3>'."\n";
            } else {
                $out .= '<h3 class="front-section-title">'.esc_html( $title ).'<span><a class="all-posts-link" href="'.esc_url( $tag_link ).'">'.__('All posts', 'pirate-rogue').'</a></span></h3>'."\n";                
            }
        }
       
     if($pirate_rogue_section_twocolumn_query->have_posts()) : 
	while($pirate_rogue_section_twocolumn_query->have_posts()) : 
                $pirate_rogue_section_twocolumn_query->the_post(); 

			$out .= '<article class="'. join( ' ', get_post_class() ) .'">';

			 if ( '' != get_the_post_thumbnail() && ! post_password_required() ) : 
                            $out .= '<div class="entry-thumbnail fadein"><a href="'.get_permalink().'"><span class="thumb-wrap">'.get_the_post_thumbnail('pirate-rogue-front-big').'</span></a></div><!-- end .entry-thumbnail -->'."\n";
			 elseif ( ! post_password_required() && $imagesrc != '') :
                            $out .= '<div class="entry-thumbnail fadein"><a href="'.get_permalink().'"><span class="thumb-wrap"><img src="'.$imagesrc.'"></span></a></div><!-- end .entry-thumbnail -->'."\n";
			 endif;

				 $out .= '<header class="entry-header">'."\n";
					$out .= '<div class="entry-cats">'."\n";
					
                                        $categories = get_the_category();
                                        $separator = ' ';
                                        if ( ! empty( $categories ) ) {
                                            foreach( $categories as $category ) {
                                               $out .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                            }
                                        }
                                        
                                        
					$out .= '</div><!-- end .entry-cats -->'."\n";
                                        $out .= '<h2 class="entry-title"><a href="'.esc_url( get_permalink() ).'" rel="bookmark">';
                                        $out .= get_the_title();
                                        $out .= '</a><span class="screen-reader-text"> ('. get_the_date().')</span></h2>';

                                        
				$out .= '</header><!-- end .entry-header -->'."\n";

				$out .= '<div class="entry-summary">'."\n";
				$out .= get_the_excerpt(); 
				$out .= '</div><!-- end .entry-summary -->'."\n";
			$out .= '</article><!-- #post-## -->'."\n";

	endwhile;
    endif; // have_posts()   
    wp_reset_postdata();
        
    $out .= '</section>'."\n";
    return $out;
 }
 endif;
 
 /*-----------------------------------------------------------------------------------*/
 /* Display blog entries as blogroll
 /*-----------------------------------------------------------------------------------*/
 if ( ! function_exists( 'pirate_rogue_blogroll' ) ) :
 function pirate_rogue_blogroll($posttag = '', $postcat = '', $num = 4, $divclass= '') {
    $posttag = $posttag ? esc_attr( $posttag ) : '';
    
    
    if ((!isset($posttag)) && (!isset($postcat))) {
	// kein wert gesetzt, also nehm ich die letzten Artikel
	$postcat =0;
    } else {
	if (is_string($posttag)) {
	    $posttag = pirate_rogue_get_tag_ID($posttag);
	}
	$postcat = pirate_rogue_get_cat_ID($postcat);
    }
    
    if (!is_int($num)) {
	$num = 4;
    }
    $divclass = $divclass ? esc_attr( $divclass ) : '';

    $parameter =  array(
        'posts_per_page'	=> $num,
        'post_status'		=> 'publish',
        'ignore_sticky_posts'	=> 1,
    );
    $found = 0;
    if ((isset($posttag)) && ($posttag >= 0)) {
	$parameter['tag_id'] = $posttag;
	$found =1;
    }
    if ((isset($postcat)) && ($postcat >= 0)) {
	$parameter['cat'] = $postcat;
	$found =2;
    }
    if ($found==0) {
	return;
    }
    
    $pirate_rogue_blogroll_query = new WP_Query($parameter );
    $out = '<section class="blogroll '.$divclass.'">';
    if($pirate_rogue_blogroll_query->have_posts()) :
	while($pirate_rogue_blogroll_query->have_posts()) : 
	    $pirate_rogue_blogroll_query->the_post();
            $out .= pirate_rogue_load_template_part('template-parts/content-blogroll' ); 
	endwhile; 
    endif; // have_posts()                  
     
    wp_reset_postdata();
    $out .= '</section>'."\n";
    return $out;
 }
 endif;
  /*-----------------------------------------------------------------------------------*/
 /* Display blog entries as list
 /*-----------------------------------------------------------------------------------*/
 if ( ! function_exists( 'pirate_rogue_articlelist' ) ) :
 function pirate_rogue_articlelist($posttag = '', $postcat = '', $num = 5, $divclass= '', $title = '') {
    $posttag = $posttag ? esc_attr( $posttag ) : '';
    
    if ((!isset($posttag)) && (!isset($postcat))) {
	// kein wert gesetzt, also nehm ich die letzten Artikel
	$postcat =0;
    } else {
	if (is_string($posttag)) {
	    $posttag = pirate_rogue_get_tag_ID($posttag);
	}
	$postcat = pirate_rogue_get_cat_ID($postcat);
    }
    
    if (!is_int($num)) {
	$num = 5;
    }
    $divclass = $divclass ? esc_attr( $divclass ) : '';

    $parameter =  array(
        'posts_per_page'	=> $num,
        'post_status'		=> 'publish',
        'ignore_sticky_posts'	=> 1,
    );
    $found = 0;
    if ((isset($posttag)) && ($posttag >= 0)) {
	$parameter['tag_id'] = $posttag;
	$found =1;
    }
    if ((isset($postcat)) && ($postcat >= 0)) {
	$parameter['cat'] = $postcat;
	$found =2;
    }
    if ($found==0) {
	return;
    }
    $pirate_rogue_blogroll_query = new WP_Query($parameter );
    
    
    $divclass = $divclass ? esc_attr( $divclass ) : '';
    $title =  esc_attr( $title );
  

    $out ='';
    if (!empty($title)) {
        $out .= '<section class="section_articlelist"><h2>'.$title.'</h2>';
    }
    $out .= '<ul class="articlelist '.$divclass.'">';
    if($pirate_rogue_blogroll_query->have_posts()) :
	while($pirate_rogue_blogroll_query->have_posts()) : 
	    $pirate_rogue_blogroll_query->the_post();
    
            $out .= '<li>';
            $out .= '<a href="'.esc_url( get_permalink() ).'">';
            $out .= get_the_title();
            $out .= '</a>';
            $out .= '</li>';
	endwhile; 
    endif; // have_posts()                  
     
    wp_reset_postdata();
    $out .= '</ul>'."\n";
    if (!empty($title)) {
        $out .= '</section>';
    }  
    return $out;
 }
 endif;
 
 /*-----------------------------------------------------------------------------------*/
 /* Prints HTML with meta information for the current post-date/time and author.
 /*-----------------------------------------------------------------------------------*/
 if ( ! function_exists( 'pirate_rogue_posted_on' ) ) :
 function pirate_rogue_posted_on() {
 	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

 	$time_string = sprintf( $time_string,
 		esc_attr( get_the_date( 'c' ) ),
 		esc_html( get_the_date() )
 	);

 	$posted_on = sprintf(
 		esc_html_x( '%s', 'post date', 'pirate-rogue'),
 		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
 	);

 	$byline = sprintf(
 		esc_html_x( '%s', 'post author', 'pirate-rogue'),
 		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
 	);
        
        if (('' != get_theme_mod( 'pirate_rogue_front_hideauthor' ) ) || ('' != get_theme_mod( 'pirate_rogue_all_hideauthor' ) )) {
                /* Do not show author information */
        } else {
           echo '<div class="entry-author"> ' . $byline . '</div>';
        }
 	
        echo '<div class="entry-date">' . $posted_on . '</div>';

 }
 endif;

 /*-----------------------------------------------------------------------------------*/
 /* Prints Post Author Information
 /*-----------------------------------------------------------------------------------*/
 if ( ! function_exists( 'pirate_rogue_posted_by' ) ) :
    function pirate_rogue_posted_by() {
	if (('' != get_theme_mod( 'pirate_rogue_front_hideauthor' ) ) || ('' != get_theme_mod( 'pirate_rogue_all_hideauthor' ) )) {
	    return;
	}
       $byline = sprintf(
       /* translators: used to show post author name */
       esc_html_x( '%s', 'post author', 'pirate-rogue'),
       '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html__( 'by ', 'pirate-rogue') . esc_html( get_the_author() ) . '</a></span>'
       );

       echo '<span class="entry-author"> ' . $byline . '</span>';

   }
 endif;
 
 /*-----------------------------------------------------------------------------------*/
 /* Get special excerpt by content
 /*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'pirate_rogue_custom_excerpt' ) ) :
    function pirate_rogue_custom_excerpt($length = 400){
            $excerpt = get_the_content();
               if (!isset($excerpt)) {
                  $excerpt = __( 'No content', 'piratenkleider' );
                }

          if ($length <=0) {
                $length = 100;
           }

          $excerpt = preg_replace('/\s+(https?:\/\/www\.youtube[\/a-z0-9\.\-\?&;=_]+)/i','',$excerpt);
          $excerpt = strip_shortcodes($excerpt);
          $excerpt = strip_tags($excerpt, '<br>,<br />,<b>,</b>,<strong>,</strong>,<em>,</em>'); 


          if (mb_strlen($excerpt)<5) {
              $excerpt = '<!-- '.__( 'No entry for this post', 'piratenkleider' ).' -->';
          }

          $needcontinue =0;
          if (mb_strlen($excerpt) >  $length) {
            $the_str = mb_substr($excerpt, 0, $length);
            $the_str .= "...";
            $needcontinue = 1;
          }  else {
              $the_str = $excerpt;
          }
          $the_str = '<p>'.$the_str.'</p>';
          return $the_str;
    }
endif;
 
 /*-----------------------------------------------------------------------------------*/
 /* The end of this file as you know it
 /*-----------------------------------------------------------------------------------*/