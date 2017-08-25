<?php
/**
 * The default template for displaying content
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

?>
<?php 
$thumbfallbackid = absint(get_theme_mod( 'pirate_rogue_fallback_blogroll_thumbnail' ));
if (!isset($thumbfallbackid)) {
    $thumbfallbackid =0;
} else {
    $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-standard-blog' )[0];
}
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>

	<?php if ( '' !== get_the_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail fadein" aria-hidden="true" role="presentation" tabindex="-1">
			<a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('pirate-rogue-standard-blog'); ?></span></a>
		</div><!-- end .entry-thumbnail -->
        <?php elseif ( ! post_password_required() &&  $imagesrc != '') : ?>
		<div class="entry-thumbnail fadein fallback" aria-hidden="true" role="presentation" tabindex="-1">
			<a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><img src="<?php echo $imagesrc; ?>" alt="<?php echo get_the_title();?>"></span></a>
		</div><!-- end .entry-thumbnail -->        
	<?php endif; ?>

	<div class="meta-main-wrap">
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
		<div class="entry-main">
			<header class="entry-header">
                            <?php if ( has_category() ) : ?>
                            <div class="entry-cats">
                                    <?php the_category(' '); ?>
                            </div><!-- end .entry-cats -->
                            <?php endif; // has_category() 
                            echo '<h2 class="entry-title"><a href="'.esc_url( get_permalink() ).'" rel="bookmark">';
                            echo get_the_title();
                            echo '</a><span class="screen-reader-text"> ('. get_the_date().')</span></h2>';
                            ?>
			</header><!-- end .entry-header -->

			<div class="entry-summary">
					<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</div>
        </div><!-- .meta-main-wrap -->
    </article><!-- end post -<?php the_ID(); ?> -->
