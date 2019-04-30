<?php
/**
 * The template for displaying the footer.
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

$blogname = get_bloginfo('name');
?>
    </main>
	<?php get_sidebar( 'instagram' ); ?>

	<?php
	// Big One Column Mailchimp newsletter widget area.
	 get_sidebar( 'newsletter' ); ?>


	<footer id="colophon" class="site-footer cf">
            <h1 class="screen-reader-text"><?php _e('More Informations','pirate-rogue'); ?></h1>
		<?php
		// Big Footer Feature Section
                $footerfeature_image = get_theme_mod( 'pirate_rogue_footerfeature_image' );
                $imagesrc = '';
                 if (isset($footerfeature_image))  {
                    if (is_int($footerfeature_image)) {
                        $imagesrc = wp_get_attachment_image_src( $footerfeature_image, 'pirate-rogue-featured' )[0];
                    } else {
                       $imagesrc = esc_url( $footerfeature_image );
                    }
                }                
		if ( $imagesrc 
                        || get_theme_mod( 'pirate_rogue_footerfeature_text_big' )
                        || get_theme_mod( 'pirate_rogue_footerfeature_text_small' ) ) {
			get_template_part( 'template-parts/footer-feature' );
		} 
                ?>

		<div class="footer-wrap">
			<?php // Footer Menus.
			if ( has_nav_menu( 'footer-one' ) 
                                || has_nav_menu( 'footer-two' ) 
                                || has_nav_menu( 'footer-three' ) 
                                || has_nav_menu( 'footer-four' ) ) : ?>
				<?php get_template_part( 'template-parts/footermenus' ); ?>
			<?php endif; ?>
                    
                        <?php if ( get_theme_mod( 'pirate_rogue_footer_search' ) ) { ?>   
                        <div id="footer-search">
			<?php } else { ?>
			<div id="footer-search" class="screen-reader-text">
			<?php }  ?>
                                <?php get_search_form(); ?>
                        </div>
                       
			<div id="site-info" class="cf">  
				<ul class="credit">
				<?php if ( get_theme_mod( 'pirate_rogue_credit' ) ) : ?>
					<li><?php echo wp_kses_post( get_theme_mod( 'pirate_rogue_credit' ) ); ?></li>
				<?php else : ?>
					<li class="copyright"><?php printf(esc_html__('Copyright &copy; %1$s %2$s', 'pirate-rogue'), date("Y"), $blogname ); ?></li>
					<li class="wp-credit"><?php esc_html_e('Powered by', 'pirate-rogue') ?> <a href="<?php echo esc_url(__( 'https://wordpress.org/', 'pirate-rogue') ); ?>" rel="nofollow"><?php esc_html_e( 'WordPress', 'pirate-rogue'); ?></a></li>
					<li class="theme-author">
					    <?php printf( esc_html__( 'Theme: %1$s by %2$s', 'pirate-rogue'), '<a href="' . esc_url('https://github.com/Piratenpartei/Pirate-Rogue/') . '" rel="nofollow">Pirate Rogue</a>','xwolf' ); ?>
					</li>
				<?php endif; ?>
				</ul><!-- end .credit -->
			</div><!-- end #site-info -->

			<?php if (has_nav_menu( 'social-footer' ) ) : ?>
				<div id="footer-social" class="social-nav">
					<?php if ( get_theme_mod( 'pirate_rogue_custom_followus' ) ) : ?>
						<h2 class="socialmedia"><?php echo esc_html( get_theme_mod( 'pirate_rogue_custom_followus' ) ); ?></h2>
					<?php else : ?>
						<h2 class="socialmedia"><?php esc_html_e( 'Follow us', 'pirate-rogue'); ?>:</h2>
					<?php endif; ?>
					<?php wp_nav_menu( array(
						'theme_location'    => 'social-footer',
						'container'         => 'false',
						'depth'             => -1));
					?>
				</div><!-- end #footer-social -->
			<?php endif; ?>

		</div><!-- end .footer-wrap -->
	</footer><!-- end #colophon -->
</div><!-- end .container-all -->

<?php wp_footer(); ?>

</body>
</html>
