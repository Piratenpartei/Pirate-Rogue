<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Uku
 * @since Uku 1.0
 * @version 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) && 'sidebar-no' != get_theme_mod( 'uku_sidebar' ) ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
