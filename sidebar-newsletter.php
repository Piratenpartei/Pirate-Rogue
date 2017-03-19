<?php
/**
 * Big one-column Mailchimp Newsletter widget area in the Footer for the serif design style only.
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-newsletter' ) ) {
	return;
}
?>

<aside class="big-newsletter-wrap cf">
	<?php if ( is_active_sidebar( 'sidebar-newsletter' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-newsletter' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- end .big-newsletter-wrap -->
