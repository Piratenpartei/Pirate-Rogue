<?php
/**
 * The template for displaying the Featured Bottom Post on the Front Page Sections
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

$thumbfallbackid = absint(get_theme_mod( 'pirate_rogue_fallback_thumbnail' ));
if (!isset($thumbfallbackid)) {
    $thumbfallbackid =0;
} else {
    $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-front-big' )[0];
}
?>

<article <?php post_class(); ?> itemscope itemtype="http://schema.org/NewsArticle">
	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail fadein" aria-hidden="true" role="presentation" tabindex="-1"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pirate-rogue-featured-bottom'); ?></a></div><!-- end .entry-thumbnail -->
	<?php elseif ( ! post_password_required()  && $imagesrc != '')  : ?>
		<div class="entry-thumbnail fadein" aria-hidden="true" role="presentation" tabindex="-1"><a href="<?php the_permalink(); ?>"><img src="<?php echo $imagesrc; ?>" alt="<?php echo get_the_title();?>"></a></div><!-- end .entry-thumbnail -->		
	<?php endif; ?>
	<div class="entry-text-wrap">
            <header class="entry-header">
                <div class="entry-cats" itemprop="articleSection">
                        <?php the_category(' '); ?>
                </div>
                <?php 
                echo '<h2 class="entry-title" itemprop="headline"><a href="'.esc_url( get_permalink() ).'" rel="bookmark" itemprop="url">';
                echo get_the_title();
                echo '</a><span class="screen-reader-text"> ('. get_the_date().')</span></h2>';
                    ?>
            </header>
	</div>
        <?php echo pirate_rogue_create_schema_thumbnail(); ?>
</article>
