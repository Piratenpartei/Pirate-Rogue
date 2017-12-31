<?php
/**
* The template for the Front Page Post Section About
*
* @package Pirate Rogue
* @since Pirate Rogue 1.0
* @version 1.0
*/
?>

    <section id="front-section-about" class="front-section cf">
	<?php if ( '' != get_theme_mod( 'pirate_rogue_front_section_about_title' ) ) : ?>
		<h3 class="front-section-title"><?php echo esc_html(get_theme_mod( 'pirate_rogue_front_section_about_title' ) ); ?></h3>
	<?php endif; ?>

	<div class="section-about-column-one">
		<div class="about-img-wrap" aria-hidden="true" role="presentation" tabindex="-1">
                    <?php if ( '' != get_theme_mod( 'pirate_rogue_front_section_about_image' ) ) : ?>
                            <div class="front-about-img fadein">
                                    <img src="<?php echo esc_url( get_theme_mod( 'pirate_rogue_front_section_about_image' ) ); ?>" alt="">
                            </div><!-- end .front-about-img -->
                    <?php endif; ?>
		</div><!-- end .about-img-wrap -->
                <?php if ( '' != get_theme_mod( 'pirate_rogue_front_section_about_text' ) ) : ?>
                        <p class="section-about-text"><span><?php echo wp_kses_post( get_theme_mod( 'pirate_rogue_front_section_about_text' ) ); ?></span></p>
                <?php endif; ?>
	</div>
	<?php if (has_nav_menu( 'social-front' )  ) : ?>
            <div class="section-about-column-two">
                <?php if ( get_theme_mod( 'pirate_rogue_custom_followus' ) ) : ?>
                        <h3 class="social-front-title"><?php echo esc_html( get_theme_mod( 'pirate_rogue_custom_followus' ) ); ?></h3>
                <?php else : ?>
                        <h3 class="social-front-title"><?php esc_html_e('Follow us', 'pirate-rogue') ?></h3>
                <?php endif; ?>
                <nav id="social-front" class="social-nav">
                        <?php wp_nav_menu( array(
                                'theme_location'	=> 'social-front',
                                'container' 			=> 'false',
                                'depth' 					=> -1));
                                ?>
                </nav>
            </div>
	<?php endif; ?>
    </section>
