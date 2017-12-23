<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main-wrap">
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--

__________ .__                  __            __________                  __                                                                                             
\______   \|__|_______ _____  _/  |_   ____   \______   \_____  _______ _/  |_  ___.__.                                                                                  
 |     ___/|  |\_  __ \\__  \ \   __\_/ __ \   |     ___/\__  \ \_  __ \\   __\<   |  |                                                                                  
 |    |    |  | |  | \/ / __ \_|  |  \  ___/   |    |     / __ \_|  | \/ |  |   \___  |                                                                                  
 |____|    |__| |__|   (____  /|__|   \___  >  |____|    (____  /|__|    |__|   / ____|                                                                                  
                            \/            \/                  \/                \/                                                                                       
                                                                                                                                                                         
                                                                                                                                                                         
                                                                                                                                                                         
                                                                                                                                                                         
                                                                                                                                                                         
                                                                                                                                                                         
   _____   .__                                   ___.                                                           .__    _____ ._.                                         
  /  _  \  |  | __  _  _______   ___.__.  ______ \_ |__    ____    ___.__.  ____   __ __ _______  ______  ____  |  | _/ ____\| |                                         
 /  /_\  \ |  | \ \/ \/ /\__  \ <   |  | /  ___/  | __ \ _/ __ \  <   |  | /  _ \ |  |  \\_  __ \/  ___/_/ __ \ |  | \   __\ | |                                         
/    |    \|  |__\     /  / __ \_\___  | \___ \   | \_\ \\  ___/   \___  |(  <_> )|  |  / |  | \/\___ \ \  ___/ |  |__|  |    \|                                         
\____|__  /|____/ \/\_/  (____  // ____|/____  >  |___  / \___  >  / ____| \____/ |____/  |__|  /____  > \___  >|____/|__|    __                                         
        \/                    \/ \/          \/       \/      \/   \/                                \/      \/               \/                                         
 ____ ___        .__                                                                             ___.                              .__                  __               
|    |   \ ____  |  |    ____    ______  ______  ___.__.  ____   __ __    ____  _____     ____   \_ |__    ____   _____    ______  |__|_______ _____  _/  |_   ____      
|    |   //    \ |  |  _/ __ \  /  ___/ /  ___/ <   |  | /  _ \ |  |  \ _/ ___\ \__  \   /    \   | __ \ _/ __ \  \__  \   \____ \ |  |\_  __ \\__  \ \   __\_/ __ \     
|    |  /|   |  \|  |__\  ___/  \___ \  \___ \   \___  |(  <_> )|  |  / \  \___  / __ \_|   |  \  | \_\ \\  ___/   / __ \_ |  |_> >|  | |  | \/ / __ \_|  |  \  ___/     
|______/ |___|  /|____/ \___  >/____  >/____  >  / ____| \____/ |____/   \___  >(____  /|___|  /  |___  / \___  > (____  / |   __/ |__| |__|   (____  /|__|   \___  > /\ 
              \/            \/      \/      \/   \/                          \/      \/      \/       \/      \/       \/  |__|                     \/            \/  )/ 
  __   .__                              .__                                   ___.                              .__                  __                                  
_/  |_ |  |__    ____    ____   _____   |  | __  _  _______   ___.__.  ______ \_ |__    ____   _____    ______  |__|_______ _____  _/  |_   ____                         
\   __\|  |  \ _/ __ \  /    \  \__  \  |  | \ \/ \/ /\__  \ <   |  | /  ___/  | __ \ _/ __ \  \__  \   \____ \ |  |\_  __ \\__  \ \   __\_/ __ \                        
 |  |  |   Y  \\  ___/ |   |  \  / __ \_|  |__\     /  / __ \_\___  | \___ \   | \_\ \\  ___/   / __ \_ |  |_> >|  | |  | \/ / __ \_|  |  \  ___/                        
 |__|  |___|  / \___  >|___|  / (____  /|____/ \/\_/  (____  // ____|/____  >  |___  / \___  > (____  / |   __/ |__| |__|   (____  /|__|   \___  > /\                    
            \/      \/      \/       \/                    \/ \/          \/       \/      \/       \/  |__|                     \/            \/  \/                    


-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-all">
        <nav id="skiplinks" aria-label="<?php _e('Skiplinks', 'pirate-rogue'); ?>">
            <ul>
                <li><a href="#overlay-wrap" data-target="#overlay-wrap" data-firstchild="0" class="jumplink-content"><?php _e('Content','pirate-rogue'); ?></a></li>
                <li><a href="#masthead" data-target="#desktop-navigation" data-firstchild="1" class="jumplink-nav"><?php _e('Main Menu','pirate-rogue'); ?></a></li>        
                <li><a href="#footer-search" data-target="#footer-search" data-firstchild="1" class="jumplink-nav"><?php _e('Search','pirate-rogue'); ?></a></li>
                <li><a href="#colophon" data-target="#colophon" data-firstchild="1" class="jumplink-nav"><?php _e('Footer','pirate-rogue'); ?></a></li>
            </ul>
	</nav>    
        <header id="masthead" class="site-header cf"> 
            <div class="site-header-content">
                    <div id="site-branding" role="banner" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
                            <?php if ( is_front_page() ) : ?>
                                    <h1 class="site-title" itemprop="name"><?php bloginfo( 'name' ); ?></h1>
                            <?php else : ?>
                                    <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                            <?php endif; ?>

                            <?php if ( has_custom_logo() ) : ?>
                                    <div class="custom-logo-wrap">
                                        <?php echo pirate_rogue_get_custom_logo(); ?>
                                        
                                     </div><!-- end .custom-logo-wrap -->
                             <?php endif; ?>

                            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
                            <button aria-hidden="true" id="overlay-open" class="overlay-open overlay-btn"><span><?php esc_html_e( 'Menu', 'pirate-rogue'); ?></span></button>

                            <?php if (has_nav_menu( 'social' ) ) : ?>
                                    <div id="header-social" class="header-social social-nav">
                                        <h2 class="screen-reader-text"><?php _e('Social Media Plattformen','pirate-rogue'); ?></h2>
                                    <?php wp_nav_menu( array(
                                            'theme_location'	=> 'social',
                                            'container' 	=> 'false',
                                            'depth' 		=> -1));
                                    ?>
                                    </div><!-- end #header-social -->
                            <?php endif; ?>
                    </div><!-- end #site-branding -->

                    <nav id="desktop-navigation" class="desktop-navigation cf">
                            <?php wp_nav_menu( array( 'menu_class' => 'menu mainmenu', 'theme_location' => 'primary', 'container' => false, 'walker'  => new Pirate_Rogue_Menu_Walker() ) ); ?>
                    </nav><!-- .main-navigation -->


                    <?php if ( '' == get_theme_mod( 'pirate_rogue_hidesearch' ) ) : ?>
                    <button aria-hidden="true" id="search-open" class="search-open search-btn"><span><?php esc_html_e( 'Search', 'pirate-rogue'); ?></span></button>
                            <div class="desktop-search">                                     
                                <form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
                                        <label for="s" class="screen-reader-text"><span><?php esc_html_e( 'Search', 'pirate-rogue'); ?></span></label>
                                        <input type="text" class="search-field" id="s" name="s" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'pirate-rogue'); ?>" />
                                        <input type="submit" class="submit" name="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'pirate-rogue'); ?>" />
                                </form>     
                            </div><!-- end .desktop-search -->
                    <?php endif; ?>

            </div><!-- .site-header-content -->

            <div class="sticky-header hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
                    <button id="overlay-open-sticky" class="overlay-open overlay-btn"><span><?php esc_html_e( 'Menu', 'pirate-rogue'); ?></span></button>
                    <?php if ( '' == get_theme_mod( 'pirate_rogue_hidesearch' ) ) : ?>
                            <button id="search-open-sticky" class="search-open search-btn"><span><?php esc_html_e( 'Search', 'pirate-rogue'); ?></span></button>
                    <?php endif; ?>

                    <?php if ( has_custom_logo() ) : ?>
                     <div class="custom-logo-wrap">
                             <?php the_custom_logo(); ?>
                     </div><!-- end .custom-logo-wrap -->
                    <?php else : ?>
                            <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>


                    <?php if (has_nav_menu( 'social' ) ) : ?>
                            <nav id="header-social-sticky" class="header-social social-nav">
                                    <?php wp_nav_menu( array(
                                            'theme_location'	=> 'social',
                                            'container' 		=> 'false',
                                            'depth' 			=> -1));
                                    ?>
                            </nav><!-- end #header-social-sticky -->
                    <?php endif; ?>
            </div><!-- end .sticky-header -->
            <div class="inner-offcanvas-wrap" aria-hidden="true">
                    <div class="close-btn-wrap">
                            <button id="overlay-close" class="overlay-btn"><span><?php esc_html_e( 'Close', 'pirate-rogue'); ?></span></button>
                    </div><!-- end .close-btn-wrap -->

                    <div class="overlay-desktop-content cf">

            
                            <div class="overlay-title-wrap">
                                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            </div><!-- end .overlay-title-wrap -->
                

                            <nav id="overlay-nav" class="main-nav cf">
                            <?php
                                    wp_nav_menu( array(
                                        'theme_location'	=> 'primary',
                                        'container' 		=> false,
                                        'walker'  => new Pirate_Rogue_OverlayMenu_Walker()));
                            ?>
                            </nav><!-- .main-navigation -->

                            <?php if (has_nav_menu( 'social' ) ) : ?>
                                    <div id="mobile-social" class="social-nav" role="navigation">
                                        <h2 class="screen-reader-text"><?php _e('Social Media Plattformen','pirate-rogue'); ?></h2>
                                    <?php wp_nav_menu( array(
                                            'theme_location'	=> 'social',
                                            'container' 		=> 'false',
                                            'depth' 			=> -1));
                                    ?>
                                    </div><!-- end #mobile-social -->
                            <?php endif; ?>

                            <?php if ( '' == get_theme_mod( 'pirate_rogue_hidesearch' ) ) : ?>
                            <div class="mobile-search">
                                    <?php get_search_form(); ?>
                            </div><!-- end .mobile-search -->
                            <?php endif; ?>

                            <?php get_sidebar( 'offcanvas' ); ?>

                    </div><!-- end .overlay-desktop-content -->
            </div><!-- end .inner-offcanvas-wrap -->
    </header><!-- end #masthead -->
    <div id="printhead"></div>
    <div id="overlay-wrap" class="overlay-wrap cf"></div><!-- end #overlay-wrap -->
    <main>
