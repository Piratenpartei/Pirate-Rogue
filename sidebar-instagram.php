<?php
/**
 * Big one-column Instagram widget area in the Footer (for WP Instagram widget).
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-instagram' ) ) {
	return;
}
?>

<aside class="big-instagram-wrap cf">
	<?php if ( is_active_sidebar( 'sidebar-instagram' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-instagram' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- end .big-instagram-wrap -->