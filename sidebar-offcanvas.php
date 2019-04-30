<?php
/**
 * The template for the off canvas widget areas
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-offcanvas' ) ) {
	return;
}
?>

<div id="offcanvas-wrap">
    <a href="#offcanvas-wrap" id="offcanvas-widgets-open"><span><?php esc_html_e( 'Info', 'pirate-rogue'); ?></span></a>
    <aside id="sidebar-offcanvas" class="sidebar-offcanvas cf">
            <?php if ( is_active_sidebar( 'sidebar-offcanvas' ) ) : ?>
                    <div class="widget-area">
                            <?php dynamic_sidebar( 'sidebar-offcanvas' ); ?>
                    </div><!-- .widget-area -->
            <?php endif; ?>
    </aside><!-- end .sidebar-offcanvas -->
</div><!-- end .offcanvas-wrap -->
