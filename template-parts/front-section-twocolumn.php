<?php
/**
 * The template for the Front Page Post Section 2 Columns
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>

<?php
$postnumber = get_theme_mod('pirate_rogue_front_section_twocolumn_number');
$posttag = get_theme_mod('pirate_rogue_front_section_twocolumn_tag');
$tag_link = get_tag_link( $posttag );
$postcat = get_theme_mod('pirate_rogue_front_section_twocolumn_cat');
$category_link = get_category_link($postcat);

$uku_section_twocolumn_query = new WP_Query( array(
	'posts_per_page'        => $postnumber,
	'tag_id'                => $posttag,
	'cat'                   => $postcat,
	'post_status'           => 'publish',
	'ignore_sticky_posts'   => 1,
) );
$thumbfallbackid = absint(get_theme_mod( 'pirate_rogue_fallback_thumbnail' ));
	if (!isset($thumbfallbackid)) {
	    $thumbfallbackid =0;
	} else {
	    $imagesrc = wp_get_attachment_image_src( $thumbfallbackid, 'pirate-rogue-front-big' )[0];
	}
?>

<section id="front-section-twocolumn" class="front-section columns-wrap cf">

	<?php if ( '' != get_theme_mod( 'pirate_rogue_front_section_twocolumn_title' ) && '' != get_theme_mod( 'pirate_rogue_front_section_twocolumn_cat') ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'pirate_rogue_front_section_twocolumn_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $category_link ); ?>"><?php esc_html_e('All posts', 'pirate-rogue') ?></a></span></h3>
	<?php elseif ( '' != get_theme_mod( 'pirate_rogue_front_section_twocolumn_title' ) && '' != get_theme_mod( 'pirate_rogue_front_section_twocolumn_tag' ) ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'pirate_rogue_front_section_twocolumn_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $tag_link ); ?>"><?php esc_html_e('All posts', 'pirate-rogue') ?></a></span></h3>
	<?php endif; ?>

	<?php if($uku_section_twocolumn_query->have_posts()) : ?>
		<?php while($uku_section_twocolumn_query->have_posts()) : $uku_section_twocolumn_query->the_post() ?>
			<article <?php post_class(); ?> itemscope itemtype="http://schema.org/NewsArticle">

                            <?php if ( '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
                                    <div class="entry-thumbnail fadein" aria-hidden="true" role="presentation" tabindex="-1"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('pirate-rogue-front-big'); ?></span></a></div><!-- end .entry-thumbnail -->
                            <?php elseif ( ! post_password_required() && $imagesrc != '') : ?>
                                    <div class="entry-thumbnail fadein" aria-hidden="true" role="presentation" tabindex="-1"><a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><img src="<?php echo $imagesrc; ?>" alt="<?php echo get_the_title();?>"></span></a></div><!-- end .entry-thumbnail -->
                             <?php endif; ?>

                            <header class="entry-header">
                                    <div class="entry-cats" itemprop="articleSection">
                                            <?php the_category(' '); ?>
                                    </div><!-- end .entry-cats -->
                                    <?php 
                                    echo '<h2 class="entry-title" itemprop="headline"><a href="'.esc_url( get_permalink() ).'" rel="bookmark" itemprop="url">';
                                    echo get_the_title();
                                    echo '</a><span class="screen-reader-text"> ('. get_the_date().')</span></h2>';
                                    ?>
                            </header><!-- end .entry-header -->

                            <div class="entry-summary" itemprop="description">
                                    <?php the_excerpt(); ?>
                            </div><!-- end .entry-summary -->
                            <?php echo pirate_rogue_create_schema_thumbnail(); ?>
			</article><!-- #post-## -->

		<?php endwhile; ?>

	<?php endif; // have_posts() ?>

	<?php wp_reset_postdata(); ?>

</section><!-- end #front-section-twocolumn -->
