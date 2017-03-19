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
    $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'uku-front-small' )[0];
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() ) { ?>
		<div class="entry-thumbnail fadein"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('uku-front-small'); ?></span></a></div><!-- end .entry-thumbnail -->	
	<?php } elseif ( ! post_password_required() && $imagesrc != '') {  ?>
		<div class="entry-thumbnail fadein"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><img src="<?php echo $imagesrc; ?>"></span></a></div><!-- end .entry-thumbnail -->
	<?php } ?>

	<header class="entry-header">
		<div class="entry-cats">
			<?php the_category(' '); ?>
		</div><!-- end .entry-cats -->
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- end .entry-header -->

</article><!-- #post-## -->
