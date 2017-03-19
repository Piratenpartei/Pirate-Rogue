<?php
/**
* The template for the Front Page Post Section About
*
* @package Uku
* @since Uku 1.0
* @version 1.0.1
*/
?>

<section id="front-section-about" class="front-section cf">

	<?php if ( '' != get_theme_mod( 'uku_front_section_about_title' ) ) : ?>
		<h3 class="front-section-title"><?php echo esc_html(get_theme_mod( 'uku_front_section_about_title' ) ); ?></h3>
	<?php endif; ?>

	<div class="section-about-column-one">
		<div class="about-img-wrap">

			<?php if (has_nav_menu( 'social-front' ) && 'neo' == get_theme_mod('uku_main_design') ) : ?>
				<div class="section-about-column-two">
					<nav id="social-front" class="social-nav" role="navigation">
						<?php wp_nav_menu( array(
							'theme_location'	=> 'social-front',
							'container'				=> 'false',
							'depth'						=> -1));
							?>
						</nav><!-- end .social-nav -->
					</div><!-- end ..section-about-column-two -->
				<?php endif; ?>

				<?php if ( '' != get_theme_mod( 'uku_front_section_about_image' ) ) : ?>
					<div class="front-about-img fadein">
						<img src="<?php echo esc_url( get_theme_mod( 'uku_front_section_about_image' ) ); ?>" alt="">
					</div><!-- end .front-about-img -->
				<?php endif; ?>
			</div><!-- end .about-img-wrap -->

			<?php if ( '' != get_theme_mod( 'uku_front_section_about_text' ) ) : ?>
				<p class="section-about-text"><span><?php echo wp_kses_post( get_theme_mod( 'uku_front_section_about_text' ) ); ?></span></p>
			<?php endif; ?>
		</div><!-- end .section-about-column-one -->

		<?php if (has_nav_menu( 'social-front' ) && '' == get_theme_mod('uku_main_design') or 'standard' == get_theme_mod('uku_main_design') ) : ?>
			<div class="section-about-column-two">
				<?php if ( get_theme_mod( 'uku_custom_followus' ) ) : ?>
					<h3 class="social-front-title"><?php echo esc_html( get_theme_mod( 'uku_custom_followus' ) ); ?></h3>
				<?php else : ?>
					<h3 class="social-front-title"><?php esc_html_e('Follow us', 'uku') ?></h3>
				<?php endif; ?>
				<nav id="social-front" class="social-nav" role="navigation">
					<?php wp_nav_menu( array(
						'theme_location'	=> 'social-front',
						'container' 			=> 'false',
						'depth' 					=> -1));
						?>
					</nav>
				</div><!-- end .section-about-column-two -->
				<?php endif; ?>
</section><!-- end #front-section-about -->
