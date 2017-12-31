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
		</header>
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
			</span>
                    <?php 
                    endif; // comments_open() 
                    edit_post_link( esc_html__( 'Edit Post', 'pirate-rogue'), '<span class="entry-edit">', '</span>' ); ?>   
		</div>
                    <?php 
                        if ( '' != get_the_post_thumbnail()) {
                            $post_thumbnail_id = get_post_thumbnail_id();
                        } else {
                            $post_thumbnail_id = $thumbfallbackid;
                        }
                    $imagedata =  pirate_rogue_get_image_attributs($post_thumbnail_id);
                    if (isset($imagedata) && isset($imagedata['credits'])) {
                        echo '<div class="credits">'.$imagedata['credits'].'</div>';
                    }  
                    ?>
            </div>
	</div>

	<?php if ( 'slider-fullscreen' == get_theme_mod( 'pirate_rogue_sliderstyle' ) 
                || 'slider-boxed' == get_theme_mod( 'pirate_rogue_sliderstyle' ) 
                && '' != get_the_post_thumbnail() 
                && ! post_password_required() ) :  ?>
		<div class="entry-thumbnail" role="presentation">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pirate-rogue-featured-big'); ?></a> 
                </div>
	
	<?php elseif ( '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail" role="presentation">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pirate-rogue-featured'); ?></a>
                </div>
        <?php elseif (! post_password_required()) : 
            if ($thumbfallbackid > 0 ) {
                if ( 'slider-fullscreen' == get_theme_mod( 'pirate_rogue_sliderstyle' ) 
                 || 'slider-boxed' == get_theme_mod( 'pirate_rogue_sliderstyle' )) {
                     $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-featured-big' )[0];
                } else {
                     $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-featured' )[0];
                } ?>
                 <div class="entry-thumbnail fallback" role="presentation">
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $imagesrc; ?>" alt="<?php echo get_the_title();?>"></a>     
                 </div>            
            <?php } ?>
	<?php endif; ?>
</article>
