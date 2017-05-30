<?php
/**
 * The template for the Shop widget area
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>

<aside id="sidebar-shop" class="sidebar-page widget-area">
	<?php if ( is_active_sidebar( 'sidebar-shop' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-shop' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .sidebar-shop -->
