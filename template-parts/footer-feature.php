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
	$linktitle = "";
	$linktitle = esc_html(get_theme_mod( 'pirate_rogue_footerfeature_title' ) );
	if (!isset($linktitle) || (empty(trim($linktitle)))) {
	    $linktitle = __('Featured','pirate-rogue');
	}
	
	if ( '' != get_theme_mod( 'pirate_rogue_footerfeature_title' )) { ?>
            <h2 class="footer-feature-title"><?php echo $linktitle; ?></h2>
	<?php } else {   ?>
	    <h2 class="screen-reader-text"><?php echo $linktitle; ?></h2>
	<?php } 
        
        $link = get_theme_mod( 'pirate_rogue_footerfeature_btn_link' );
        $footerfeature_image = get_theme_mod( 'pirate_rogue_footerfeature_image' );
        $imagesrc = '';
         if (isset($footerfeature_image))  {
            if (is_int($footerfeature_image)) {
                $imagesrc = wp_get_attachment_image_src( $footerfeature_image, 'pirate-rogue-featured' )[0];
            } else {
               $imagesrc = esc_url( $footerfeature_image );
            }      
        }
        ?>
            <div class="footer-feature-image fadein">
                <?php if (!empty($link)) {
                    echo '<a href="'.$link.'">';
                }
                if ($imagesrc) {
                    echo '<img src="'.$imagesrc.'" alt="'.$linktitle.'">';
                } elseif ( has_custom_logo() && '' != get_theme_mod( 'pirate_rogue_customlogofooter' ) ) {
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    if ( $custom_logo_id ) {               
                        echo wp_get_attachment_image( $custom_logo_id, 'pirate-rogue-featured', false );
                    }
                }
                if (!empty($link)) {
                    echo '</a>';
                }
                ?>
            </div>
      
	<div class="footer-feature-textwrap">
		<?php if ( '' !== get_theme_mod( 'pirate_rogue_footerfeature_text_big' ) ) : ?>
			<p class="text-big"><?php echo wp_kses_post( get_theme_mod( 'pirate_rogue_footerfeature_text_big' ) ); ?></p>
		<?php endif; ?>

		<?php if ( '' !== get_theme_mod( 'pirate_rogue_footerfeature_text_small' ) ) : ?>
			<p class="text-small"><?php echo wp_kses_post( get_theme_mod( 'pirate_rogue_footerfeature_text_small' ) ); ?></p>
		<?php endif;
                
                $button_text = get_theme_mod( 'pirate_rogue_footerfeature_btn_text' );
                $button_text = esc_html($button_text);
                
		if (!empty($link) && (!empty($button_text)))  {
                    echo '<a class="footer-feature-btn" href="'.$link.'">'.$button_text.'</a>';
                } ?>
	</div>
    </section>
