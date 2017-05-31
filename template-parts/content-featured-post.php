<?php
/**
 * The template for displaying featured posts in a slider on the front page
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>
<?php
$thumbfallbackid = absint(get_theme_mod( 'pirate_rogue_fallback_slider' ));
	if (!isset($thumbfallbackid)) {
	    $thumbfallbackid =0;	    
	}
 ?>
<article <?php post_class('cf'); ?>>

	<div class="meta-main-wrap">
            <div class="slider-text">

		<header class="entry-header">
			<?php if ( has_category() ) : ?>
			<div class="entry-cats">
				<?php the_category(' '); ?>
			</div><!-- end .entry-cats -->
			<?php endif; // has_category() ?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- end .entry-header -->

		<div class="entry-meta">
			<?php pirate_rogue_posted_by(); ?>
			<span class="entry-date">
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

            </div><!-- end .slider-text -->

	</div><!-- .meta-main-wrap -->

	<?php if ( 'slider-fullscreen' == get_theme_mod( 'uku_sliderstyle' ) 
                || 'slider-boxed' == get_theme_mod( 'uku_sliderstyle' ) 
                && '' != get_the_post_thumbnail() 
                && ! post_password_required() ) : ?>
		<div class="entry-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pirate-rogue-featured-big'); ?></a></div><!-- end .entry-thumbnail -->

	
	<?php elseif ( '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pirate-rogue-featured'); ?></a></div><!-- end .entry-thumbnail -->
        <?php elseif (! post_password_required()) : 
            if ($thumbfallbackid > 0 ) {
                if ( 'slider-fullscreen' == get_theme_mod( 'uku_sliderstyle' ) 
                 || 'slider-boxed' == get_theme_mod( 'uku_sliderstyle' )) {
                     $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-featured-big' )[0];
                } else {
                     $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-featured' )[0];
                } ?>
                 <div class="entry-thumbnail fallback"><a href="<?php the_permalink(); ?>"><img src="<?php echo $imagesrc; ?>" alt=""></a></div><!-- end .entry-thumbnail -->                
            <?php } ?>
	<?php endif; ?>

</article><!-- end post -<?php the_ID(); ?> -->
