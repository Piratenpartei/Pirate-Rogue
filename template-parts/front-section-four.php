<?php
/**
 * The template for the Front Page Post Section Four
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>

<?php
	$posttag = get_theme_mod('uku_front_section_four_tag');
	$tag_link = get_tag_link( $posttag );

	$postcat = get_theme_mod('uku_front_section_four_cat');
	$category_link = get_category_link($postcat);

	$uku_section_four_query = new WP_Query( array(
		'posts_per_page'        => 1,
		'post_status'		=> 'publish',
		'tag_id' 		=> $posttag,
		'cat' 			=> $postcat,
		'ignore_sticky_posts'	=> 1,
	) );
	
	$thumbfallbackid = absint(get_theme_mod( 'pirate_rogue_fallback_thumbnail' ));
	if (!isset($thumbfallbackid)) {
	    $thumbfallbackid =0;
	} else {
	    $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-featured' )[0];
	}
	
?>

<section id="front-section-four" class="front-section cf">
	<?php if ( '' != get_theme_mod( 'uku_front_section_four_title' ) && '' != get_theme_mod( 'uku_front_section_four_cat') ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'uku_front_section_four_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $category_link ); ?>"><?php esc_html_e('All posts', 'pirate-rogue') ?></a></span></h3>
	<?php elseif ( '' != get_theme_mod( 'uku_front_section_four_title' ) && '' != get_theme_mod( 'uku_front_section_four_tag' ) ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'uku_front_section_four_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $tag_link ); ?>"><?php esc_html_e('All posts', 'pirate-rogue') ?></a></span></h3>
	<?php endif; ?>

	<?php if($uku_section_four_query->have_posts()) : ?>
		<?php while($uku_section_four_query->have_posts()) : $uku_section_four_query->the_post() ?>
		<article <?php post_class('cf'); ?> itemscope itemtype="http://schema.org/NewsArticle">

			<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="entry-thumbnail fadein" aria-hidden="true" role="presentation" tabindex="-1"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('pirate-rogue-featured'); ?></span></a></div><!-- end .entry-thumbnail -->
			<?php elseif ( ! post_password_required() && $imagesrc != '') : ?>
				<div class="entry-thumbnail fadein" aria-hidden="true" role="presentation" tabindex="-1"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><img src="<?php echo $imagesrc; ?>" alt="<?php echo get_the_title();?>"></span></a></div><!-- end .entry-thumbnail -->

			<?php endif; ?>
			<div class="meta-main-wrap">
				<div class="entry-main">
					<header class="entry-header">
						<?php if ( has_category() ) : ?>
						<div class="entry-cats" itemprop="articleSection"><?php the_category(' '); ?></div>
						<?php endif; // has_category() 
                                                
                                                echo '<h2 class="entry-title" itemprop="headline"><a href="'.esc_url( get_permalink() ).'" rel="bookmark" itemprop="url">';
                                                echo get_the_title();
                                                echo '</a><span class="screen-reader-text"> ('. get_the_date().')</span></h2>';
                                                ?>
					</header>
					<div class="entry-meta">
						<?php pirate_rogue_posted_by(); ?>
						<span class="entry-date" aria-hidden="true">
							<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
						</span>
						<?php if ( comments_open() ) : ?>
						<span class="entry-comments">
							<?php comments_popup_link(
								'<span class="leave-reply"><span class="comment-name">' . esc_html__( 'Comments', 'pirate-rogue') .  '</span>' . esc_html__( '0', 'pirate-rogue') . '</span>',
								'<span class="comment-name">' . esc_html__( 'Comments', 'pirate-rogue') .  '</span>' . esc_html__( '1', 'pirate-rogue'),
								'<span class="comment-name">' . esc_html__( 'Comments', 'pirate-rogue') .  '</span>' . esc_html__( '%', 'pirate-rogue') )
							; ?>
						</span>
                                                <?php endif; // comments_open() ?>
						<?php edit_post_link( esc_html__( 'Edit Post', 'pirate-rogue'), '<span class="entry-edit">', '</span>' ); ?>
					</div>
				</div>
			</div>
                        <?php echo pirate_rogue_create_schema_thumbnail(); ?>
		</article>

		<?php endwhile; ?>

	<?php endif; // have_posts() ?>
	<?php wp_reset_postdata(); ?>
</section>
