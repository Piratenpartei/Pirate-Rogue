<?php
/**
 * The template for the Page widget area
 *
 * @package Uku
 * @since Uku 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>

<aside id="sidebar-page" class="sidebar-page widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .sidebar-page -->
