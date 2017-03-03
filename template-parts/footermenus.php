<?php
/**
 * The template for the footer menus
 *
 * @subpackage Uku
 * @since Uku 1.0
  * @version 1.0.1
 */
?>

<div class="footer-menus-wrap cf">

	<?php if ( has_custom_logo() && '' != get_theme_mod( 'uku_customlogofooter' ) ) : ?>
		<div class="custom-logo-wrap">
			<?php the_custom_logo(); ?>
		</div><!-- end .custom-logo-wrap -->
	<?php else : ?>
		<p class="title-footer"><?php bloginfo( 'name' ); ?></p>
	<?php endif; ?>

	<?php if (has_nav_menu( 'footer-one' ) ) : ?>
	<nav id="footer-menu-one" class="footer-menu" role="navigation">
		<?php
			$location = 'footer-one';
			$menu_obj = uku_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-one',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav><!-- end #footer-one -->
	<?php endif; ?>

	<?php if (has_nav_menu( 'footer-two' ) ) : ?>
	<nav id="footer-menu-two" class="footer-menu" role="navigation">
		<?php
			$location = 'footer-two';
			$menu_obj = uku_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-two',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav><!-- end #footer-two -->
	<?php endif; ?>

	<?php if (has_nav_menu( 'footer-three' ) ) : ?>
	<nav id="footer-menu-three" class="footer-menu" role="navigation">
		<?php
			$location = 'footer-three';
			$menu_obj = uku_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-three',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav><!-- end #footer-three -->
	<?php endif; ?>

	<?php if (has_nav_menu( 'footer-four' ) ) : ?>
	<nav id="footer-menu-four" class="footer-menu" role="navigation">
		<?php
			$location = 'footer-four';
			$menu_obj = uku_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-four',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav><!-- end #footer-four -->
	<?php endif; ?>

</div><!-- end .footer-menus-wrap -->
