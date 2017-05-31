<?php
/**
 * The template for displaying Big Featured Posts in the Front Page Sections
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
     
<article  <?php post_class(); ?>>

	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail fadein">
			<a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('pirate-rogue-front-big'); ?></span></a>
			<?php if ( has_post_format('video') ) : ?>
				<span class="video-icon"><?php esc_html_e('Video', 'pirate-rogue') ?></span>
			<?php endif; ?>
		</div><!-- end .entry-thumbnail -->
	<?php elseif ( ! post_password_required() && $imagesrc != '') : ?>
		<div class="entry-thumbnail fadein">
			<a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><img src="<?php echo $imagesrc; ?>" alt=""></span></a>
			<?php if ( has_post_format('video') ) : ?>
				<span class="video-icon"><?php esc_html_e('Video', 'pirate-rogue') ?></span>
			<?php endif; ?>
		</div><!-- end .entry-thumbnail -->
	<?php endif; ?>

	<div class="entry-text-wrap">
		<div class="entry-text">
			<header class="entry-header">
				<div class="entry-cats">
					<?php the_category(' '); ?>
				</div><!-- end .entry-cats -->
				<?php 
                                echo '<h2 class="entry-title"><a href="'.esc_url( get_permalink() ).'" rel="bookmark">';
                                echo get_the_title();
                                echo '</a><span class="screen-reader-text"> ('. get_the_date().')</span></h2>';
                                ?>
			</header><!-- end .entry-header -->

			

			<div class="entry-meta">
				<?php pirate_rogue_posted_by(); ?>
				<span class="entry-date" aria-hidden="true">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
				</span><!-- end .entry-date -->
				<?php if ( comments_open() ) : ?>
					<span class="entry-comments">
						<?php comments_popup_link(
							'<span class="leave-reply"><span class="comment-name">' . esc_html__( 'Comments', 'pirate-rogue') .  '</span>' . esc_html__( '0', 'pirate-rogue') . '</span>',
							'<span class="comment-name">' . esc_html__( 'Comments', 'pirate-rogue') .  '</span>' . esc_html__( '1', 'pirate-rogue'),
							'<span class="comment-name">' . esc_html__( 'Comments', 'pirate-rogue') .  '</span>' . esc_html__( '%', 'pirate-rogue') )
						; ?>
					</span><!-- end .entry-comments -->
				<?php endif; // comments_open() ?>
				<?php edit_post_link( esc_html__( 'Edit Post', 'pirate-rogue'), '<span class="entry-edit">', '</span>' ); ?>
			</div><!-- end .entry-meta -->
                        
                        <div class="entry-summary">   
                           
					 <?php echo pirate_rogue_custom_excerpt(600); ?>
			</div><!-- end .entry-summary -->
                        
		</div><!-- end .entry-text -->
	</div><!-- end .entry-text-wrap -->

</article><!-- #post-## -->
