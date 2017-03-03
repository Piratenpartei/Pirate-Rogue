<?php
/**
 * The template for displaying Small Posts in the Front Page Sections (using a 4:3 image ratio)
 *
 * @package Uku
 * @since Uku 1.1
 * @version 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ('' != get_the_post_thumbnail() && ! post_password_required()) : ?>
		<div class="entry-thumbnail fadein">
			<a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('uku-neo-blog'); ?></span></a>
			<?php if ( has_post_format('video') ) : ?>
				<span class="video-icon"><?php esc_html_e('Video', 'uku') ?></span>
			<?php endif; ?>
		</div><!-- end .entry-thumbnail -->
	<?php endif; ?>

	<header class="entry-header">
		<div class="entry-cats">
			<?php the_category(' '); ?>
		</div><!-- end .entry-cats -->
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- end .entry-header -->

</article><!-- #post-## -->
