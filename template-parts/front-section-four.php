<?php
/**
 * The template for the Front Page Post Section Four
 *
 * @package Uku
 * @since Uku 1.0
 * @version 1.0.5
 */
?>

<?php
	$posttag = get_theme_mod('uku_front_section_four_tag');
	$tag_link = get_tag_link( $posttag );

	$postcat = get_theme_mod('uku_front_section_four_cat');
	$category_link = get_category_link($postcat);

	$uku_section_four_query = new WP_Query( array(
		'posts_per_page'			=> 1,
		'post_status'					=> 'publish',
		'tag_id' 							=> $posttag,
		'cat' 								=> $postcat,
		'ignore_sticky_posts'	=> 1,
	) );
?>

<section id="front-section-four" class="front-section cf">

	<?php if ( '' != get_theme_mod( 'uku_front_section_four_title' ) && '' != get_theme_mod( 'uku_front_section_four_cat') ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'uku_front_section_four_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $category_link ); ?>"><?php esc_html_e('All posts', 'uku') ?></a></span></h3>
	<?php elseif ( '' != get_theme_mod( 'uku_front_section_four_title' ) && '' != get_theme_mod( 'uku_front_section_four_tag' ) ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'uku_front_section_four_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $tag_link ); ?>"><?php esc_html_e('All posts', 'uku') ?></a></span></h3>
	<?php endif; ?>

	<?php if($uku_section_four_query->have_posts()) : ?>
		<?php while($uku_section_four_query->have_posts()) : $uku_section_four_query->the_post() ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>

			<?php if ( 'neo' == get_theme_mod('uku_main_design') && '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="entry-thumbnail fadein"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('uku-bigthumb'); ?></span></a></div><!-- end .entry-thumbnail -->
			<?php elseif ( '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="entry-thumbnail fadein"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('uku-featured'); ?></span></a></div><!-- end .entry-thumbnail -->
			<?php endif; ?>

			<div class="meta-main-wrap">

				<div class="entry-main">
					<header class="entry-header">
						<?php if ( has_category() ) : ?>
						<div class="entry-cats">
							<?php the_category(' '); ?>
						</div><!-- end .entry-cats -->
						<?php endif; // has_category() ?>
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</header><!-- end .entry-header -->

					<div class="entry-meta">
						<?php uku_posted_by(); ?>
						<span class="entry-date">
							<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
						</span><!-- end .entry-date -->
						<?php if ( comments_open() ) : ?>
						<span class="entry-comments">
							<?php comments_popup_link(
								'<span class="leave-reply"><span class="comment-name">' . esc_html__( 'Comments', 'uku' ) .  '</span>' . esc_html__( '0', 'uku' ) . '</span>',
								'<span class="comment-name">' . esc_html__( 'Comments', 'uku' ) .  '</span>' . esc_html__( '1', 'uku' ),
								'<span class="comment-name">' . esc_html__( 'Comments', 'uku' ) .  '</span>' . esc_html__( '%', 'uku' ) )
							; ?>
						</span><!-- end .entry-comments -->
					<?php endif; // comments_open() ?>

						<?php edit_post_link( esc_html__( 'Edit Post', 'uku' ), '<span class="entry-edit">', '</span>' ); ?>
					</div><!-- end .entry-meta -->
				</div><!-- .entry-main -->
			</div><!-- .meta-main-wrap -->
		</article><!-- end post -<?php the_ID(); ?> -->

		<?php endwhile; ?>

	<?php endif; // have_posts() ?>

	<?php wp_reset_postdata(); ?>

</section><!-- end #front-section-four -->
