<?php
/**
 * The template for displaying Small Posts in the Front Page Sections
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 * 
 */

$thumbfallbackid = absint(get_theme_mod( 'pirate_rogue_fallback_thumbnail' ));
if (!isset($thumbfallbackid)) {
    $thumbfallbackid =0;
} else {
    $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-front-small' )[0];
}
?>
<article <?php post_class(); ?> itemscope itemtype="http://schema.org/NewsArticle">
	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() ) { ?>
		<div class="entry-thumbnail fadein" aria-hidden="true" role="presentation" tabindex="-1"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('pirate-rogue-front-small'); ?></span></a></div><!-- end .entry-thumbnail -->	
	<?php } elseif ( ! post_password_required() && $imagesrc != '') {  ?>
		<div class="entry-thumbnail fadein" aria-hidden="true" role="presentation" tabindex="-1"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><img src="<?php echo $imagesrc; ?>" alt="<?php echo get_the_title();?>"></span></a></div><!-- end .entry-thumbnail -->
	<?php } ?>

	<header class="entry-header">
		<div class="entry-cats" itemprop="articleSection"><?php the_category(' '); ?></div>
                <?php 
                 echo '<h2 class="entry-title" itemprop="headline"><a href="'.esc_url( get_permalink() ).'" rel="bookmark" itemprop="url">';
                echo get_the_title();
                echo '</a><span class="screen-reader-text"> ('. get_the_date().')</span></h2>';
                ?>
	</header>
        <?php echo pirate_rogue_create_schema_thumbnail(); ?>
</article>
