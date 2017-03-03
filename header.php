<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main-wrap">
 *
 * @package Uku
 * @since Uku 1.0
 * @version 1.0.2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?>

	<div class="container-all">

	<header id="masthead" class="site-header cf" role="banner">

		<div class="site-header-content">

			<?php if ( 'neo' == get_theme_mod( 'uku_main_design' ) || 'serif' == get_theme_mod( 'uku_main_design' )) : ?>
				<nav id="desktop-navigation" class="desktop-navigation cf" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false,)); ?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<div id="site-branding">
				<?php if ( is_front_page() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php if ( has_custom_logo() ) : ?>
					<div class="custom-logo-wrap">
						<?php the_custom_logo(); ?>
					 </div><!-- end .custom-logo-wrap -->
				 <?php endif; ?>

				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<button id="overlay-open" class="overlay-open overlay-btn"><span><?php esc_html_e( 'Menu', 'uku' ); ?></span></button>

				<?php if (has_nav_menu( 'social' ) ) : ?>
					<nav id="header-social" class="header-social social-nav" role="navigation">
					<?php wp_nav_menu( array(
						'theme_location'	=> 'social',
						'container' 		=> 'false',
						'depth' 			=> -1));
					?>
					</nav><!-- end #header-social -->
				<?php endif; ?>
			</div><!-- end #site-branding -->

			<?php if ( '' == get_theme_mod( 'uku_main_design' ) || 'standard' == get_theme_mod( 'uku_main_design' ) ) : ?>
				<nav id="desktop-navigation" class="desktop-navigation cf" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false,)); ?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( '' == get_theme_mod( 'uku_hidesearch' ) ) : ?>
			<button id="search-open" class="search-open search-btn"><span><?php esc_html_e( 'Search', 'uku' ); ?></span></button>
				<div class="desktop-search">
					<?php if ( 'neo' == get_theme_mod( 'uku_main_design') || 'serif' == get_theme_mod( 'uku_main_design' )) : ?>
						<button id="search-close" class="search-close"><span><?php esc_html_e( 'Search', 'uku' ); ?></span></button>
					<?php endif; ?>
					<?php get_search_form(); ?>
				</div><!-- end .desktop-search -->
			<?php endif; ?>

		</div><!-- .site-header-content -->

		<div class="sticky-header hidden">
			<button id="overlay-open-sticky" class="overlay-open overlay-btn"><span><?php esc_html_e( 'Menu', 'uku' ); ?></span></button>
			<?php if ( '' == get_theme_mod( 'uku_hidesearch' ) ) : ?>
				<button id="search-open-sticky" class="search-open search-btn"><span><?php esc_html_e( 'Search', 'uku' ); ?></span></button>
			<?php endif; ?>

			<?php if ( has_custom_logo() ) : ?>
			 <div class="custom-logo-wrap">
				 <?php the_custom_logo(); ?>
			 </div><!-- end .custom-logo-wrap -->
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>


			<?php if (has_nav_menu( 'social' ) && 'serif' != get_theme_mod( 'uku_main_design' ) ) : ?>
				<nav id="header-social-sticky" class="header-social social-nav" role="navigation">
					<?php wp_nav_menu( array(
						'theme_location'	=> 'social',
						'container' 		=> 'false',
						'depth' 			=> -1));
					?>
				</nav><!-- end #header-social-sticky -->
			<?php endif; ?>


		</div><!-- end .sticky-header -->

			<div class="inner-offcanvas-wrap">
				<div class="close-btn-wrap">
					<button id="overlay-close" class="overlay-btn"><span><?php esc_html_e( 'Close', 'uku' ); ?></span></button>
				</div><!-- end .close-btn-wrap -->

				<div class="overlay-desktop-content cf">

					<?php if ( 'neo' == get_theme_mod( 'uku_main_design' )) : ?>
					<div class="overlay-title-wrap">
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					</div><!-- end .overlay-title-wrap -->
					<?php endif; ?>

					<nav id="overlay-nav" class="main-nav cf" role="navigation">
					<?php
						wp_nav_menu( array(
							'theme_location'	=> 'primary',
							'container' 		=> false,));
					?>
					</nav><!-- .main-navigation -->

					<?php if (has_nav_menu( 'social' ) ) : ?>
						<nav id="mobile-social" class="social-nav" role="navigation">
						<?php wp_nav_menu( array(
							'theme_location'	=> 'social',
							'container' 		=> 'false',
							'depth' 			=> -1));
						?>
						</nav><!-- end #mobile-social -->
					<?php endif; ?>

					<?php if ( '' == get_theme_mod( 'uku_hidesearch' ) ) : ?>
					<div class="mobile-search">
						<?php get_search_form(); ?>
					</div><!-- end .mobile-search -->
					<?php endif; ?>

					<?php get_sidebar( 'offcanvas' ); ?>

				</div><!-- end .overlay-desktop-content -->

			</div><!-- end .inner-offcanvas-wrap -->

	</header><!-- end #masthead -->

	<div id="overlay-wrap" class="overlay-wrap cf"></div><!-- end #overlay-wrap -->

	<?php if ( 'serif' == get_theme_mod( 'uku_main_design' )  && is_front_page() &&  get_header_image() ) : ?>
		<div id="headerimg-wrap" style="background-image:url(<?php header_image(); ?>);">

				<?php if ( ! '' == get_theme_mod( 'uku_custom_header_intro' )) : ?>
					<div class="header-intro-wrap">
						<p class="header-intro-text"><?php echo wp_kses_post( get_theme_mod( 'uku_custom_header_intro' ) ); ?></p>
					</div><!-- end .header-intro-wrap -->
				<?php endif; ?>

				<?php if ( 'Scroll Down' == get_theme_mod( 'uku_scrolldownbtn_text' )  || '' == get_theme_mod( 'uku_scrolldownbtn_text' )) : ?>
					<a href="#page-start" id="scrolldown"><?php esc_html_e( 'Scroll Down', 'uku' ); ?></a>
				<?php else : ?>
					<a href="#page-start" id="scrolldown"><?php echo esc_html( get_theme_mod( 'uku_scrolldownbtn_text' ) ); ?></a>
				<?php endif; ?>

		</div>
	<?php elseif ( get_header_image()  && is_front_page() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="header-image"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
	<?php endif; ?>
