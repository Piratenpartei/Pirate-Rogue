<?php
/**
 * The template for the Page widget area
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */




$pirate_rogue_page_sidebar  = get_post_meta( $post->ID, 'pirate_rogue_page_sidebar', true );
if (! is_active_sidebar( 'sidebar-2' ) && (empty($pirate_rogue_page_sidebar)) ) {
	return;
}
// If we get this far, we have widgets or content. Let's do this.

?>

<aside id="sidebar-page" class="sidebar-page widget-area" role="complementary">
    <?php 
	if (!empty($pirate_rogue_page_sidebar)) { ?>
	    <div class="widget textwidget">
		<?php echo do_shortcode($pirate_rogue_page_sidebar); ?>
	    </div><!-- .widget-area -->	    
	<?php }
    
	if ( is_active_sidebar( 'sidebar-2' ) ) : 
           dynamic_sidebar( 'sidebar-2' ); 
	endif; ?>
</aside><!-- .sidebar-page -->
