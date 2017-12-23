<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>
<?php 
$style = 'style-1';
$format = 'list';
$preauthor = 0;
if (is_single() || is_page()) { 
    if ( class_exists( 'Pirate_Crew' ) && 'content' != get_theme_mod( 'pirate_rogue_crewmember-position' )&& $post->ID ) {
        $preauthor =  get_post_meta( $post->ID, 'pirate_crew_member_id', true );	
        $style = pirate_rogue_sanitize_pirate_crew_member_style(get_theme_mod( 'pirate_rogue_crewmember-style' ));
        $format = pirate_rogue_sanitize_pirate_crew_member_format(get_theme_mod( 'pirate_rogue_crewmember-format' ));
        $title = get_theme_mod( 'pirate_rogue_crewmember-title' );
    }
}
if (( is_active_sidebar( 'sidebar-1' ) && 'sidebar-no' != get_theme_mod( 'pirate_rogue_sidebar' ) ) or ($preauthor)) { ?>
	<aside id="secondary" class="sidebar widget-area"> 
	    <?php if ($preauthor) {		
		if (isset($title)) {  
		    echo '<h2 class="widget-title">'.$title.'</h2>';
		}
		echo do_shortcode( '[pirate id="'.$preauthor.'" format="'.$format.'" style="'.$style.'" showcontent="0"]' ); 
	    }
	    if ( is_active_sidebar( 'sidebar-1' ) && 'sidebar-no' != get_theme_mod( 'pirate_rogue_sidebar' ) ) {
		 dynamic_sidebar( 'sidebar-1' );
	    }
	    ?>
	</aside><!-- .sidebar .widget-area -->
<?php } ?>
