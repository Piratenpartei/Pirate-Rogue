<?php
/**
 * The template for the Big Footer Feature Section
 *
 * @package Uku
 * @since Uku 1.0
 * @version 1.0.4
 */
?>

<section id="big-footer-feature" class="big-footer-feature cf">

	<?php if ( '' != get_theme_mod( 'uku_footerfeature_title' )) : ?>
    	<h2 class="footer-feature-title"><?php echo esc_html(get_theme_mod( 'uku_footerfeature_title' ) ); ?></h2>
        <?php else : ?>
         <h2 class="screen-reader-text"><?php echo _e('Featured','pirate-rogue'); ?></h2>
    <?php endif; ?>

    <div class="footer-feature-image fadein">

	    <?php if ( '' != get_theme_mod( 'uku_footerfeature_btn_link' ) ) { ?>
		<a href="<?php echo esc_url( get_theme_mod( 'uku_footerfeature_btn_link' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'uku_footerfeature_image' ) ); ?>" width="600" height="600"></a>
            <?php } else {
                    if ( '' != get_theme_mod( 'uku_footerfeature_image' ) ) { ?>
                         <img src="<?php echo esc_url( get_theme_mod( 'uku_footerfeature_image' ) ); ?>" width="600" height="600">
                    <?php }
            } ?>
    </div><!-- end .footer-feature-image -->

	<div class="footer-feature-textwrap">

		<?php if ( '' != get_theme_mod( 'uku_footerfeature_text_big' ) ) : ?>
			<p class="text-big"><?php echo wp_kses_post( get_theme_mod( 'uku_footerfeature_text_big' ) ); ?></p>
		<?php endif; ?>

		<?php if ( '' != get_theme_mod( 'uku_footerfeature_text_small' ) ) : ?>
			<p class="text-small"><?php echo wp_kses_post( get_theme_mod( 'uku_footerfeature_text_small' ) ); ?></p>
		<?php endif; ?>

		<?php if ( '' != get_theme_mod( 'uku_footerfeature_btn_text' ) ) : ?>
		<a class="footer-feature-btn" href="<?php echo esc_url( get_theme_mod( 'uku_footerfeature_btn_link' ) ); ?>"><?php echo esc_html( get_theme_mod( 'uku_footerfeature_btn_text' ) ); ?></a>
		<?php endif; ?>

	</div><!-- end .footer-feature-textwrap -->
</section><!-- end #big-footer-feature -->
