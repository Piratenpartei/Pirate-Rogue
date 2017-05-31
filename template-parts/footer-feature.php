<?php
/**
 * The template for the Big Footer Feature Section
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>

    <section id="big-footer-feature" class="big-footer-feature cf">

	<?php 
	$linkttitle = "";
	
	if ( '' != get_theme_mod( 'pirate_rogue_footerfeature_title' )) { 
	    $linkttitle = esc_html(get_theme_mod( 'pirate_rogue_footerfeature_title' ) );
	?>
    	<h2 class="footer-feature-title"><?php echo $linkttitle; ?></h2>
	<?php } else { 
	    $linkttitle = __('Featured','pirate-rogue');
	    ?>
         <h2 class="screen-reader-text"><?php echo _e('Featured','pirate-rogue'); ?></h2>
	<?php } ?>

        <div class="footer-feature-image fadein">

                <?php if ( '' !== get_theme_mod( 'pirate_rogue_footerfeature_btn_link' ) ) { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'pirate_rogue_footerfeature_btn_link' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'pirate_rogue_footerfeature_image' ) ); ?>"  alt="<?php echo $linkttitle; ?>"></a>
                <?php } else {
                        if ( '' !== get_theme_mod( 'pirate_rogue_footerfeature_image' ) ) { ?>
                             <img src="<?php echo esc_url( get_theme_mod( 'pirate_rogue_footerfeature_image' ) ); ?>" alt="<?php echo $linkttitle; ?>">
                        <?php }
                } ?>
        </div><!-- end .footer-feature-image -->

	<div class="footer-feature-textwrap">

		<?php if ( '' !== get_theme_mod( 'pirate_rogue_footerfeature_text_big' ) ) : ?>
			<p class="text-big"><?php echo wp_kses_post( get_theme_mod( 'pirate_rogue_footerfeature_text_big' ) ); ?></p>
		<?php endif; ?>

		<?php if ( '' !== get_theme_mod( 'pirate_rogue_footerfeature_text_small' ) ) : ?>
			<p class="text-small"><?php echo wp_kses_post( get_theme_mod( 'pirate_rogue_footerfeature_text_small' ) ); ?></p>
		<?php endif; ?>

		<?php if ( '' !== get_theme_mod( 'pirate_rogue_footerfeature_btn_text' ) ) : ?>
		<a class="footer-feature-btn" href="<?php echo esc_url( get_theme_mod( 'pirate_rogue_footerfeature_btn_link' ) ); ?>"><?php echo esc_html( get_theme_mod( 'pirate_rogue_footerfeature_btn_text' ) ); ?></a>
		<?php endif; ?>

	</div><!-- end .footer-feature-textwrap -->
    </section><!-- end #big-footer-feature -->
