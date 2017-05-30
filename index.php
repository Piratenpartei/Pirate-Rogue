<?php
/**
* The main template file.
*
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
*/

get_header(); ?>

    <div id="page-start" class="cf">

<?php
// Featured Slider
if ( '' != get_theme_mod( 'pirate_rogue_featuredtag' ) || '' != get_theme_mod( 'pirate_rogue_featuredcat' ) )  : ?>
<div class="featured-content cf">
	<?php
	// Front Page Featured Post Slider
	get_template_part( 'template-parts/featured-content' ); ?>
</div>
<?php endif; ?>

<?php
// Front Page Section 1 (Featured Top)
if ( '' != get_theme_mod( 'uku_front_section_one_tag' ) || '' != get_theme_mod( 'uku_front_section_one_cat' ) ) : ?>
<?php get_template_part( 'template-parts/front-section-one' ); ?>
<?php endif; ?>

<?php
// Front Page Section 2-column
if ( '' != get_theme_mod( 'pirate_rogue_front_section_twocolumn_tag' ) || '' != get_theme_mod( 'pirate_rogue_front_section_twocolumn_cat' ) ) : ?>
<?php get_template_part( 'template-parts/front-section-twocolumn' ); ?>
<?php endif; ?>

<?php
// Front Page Section 3-column
if ( '' != get_theme_mod( 'uku_front_section_threecolumn_tag' ) || '' != get_theme_mod( 'uku_front_section_threecolumn_cat' ) ) : ?>
<?php get_template_part( 'template-parts/front-section-threecolumn' ); ?>
<?php endif; ?>

<?php
// Front Page Section 4 (Fullwidth)
if ( '' != get_theme_mod( 'uku_front_section_four_tag' ) || '' != get_theme_mod( 'uku_front_section_four_cat' ) ) : ?>
<?php get_template_part( 'template-parts/front-section-four' ); ?>
<?php endif; ?>

<?php
// Hide default blog on Front Page
if ( '' == get_theme_mod( 'uku_front_hideblog' ) ) : ?>
<div id="blog-wrap" class="blog-wrap cf">

	<div id="primary" class="site-content cf" role="main">

		<?php if ( get_theme_mod( 'pirate_rogue_custom_latestposts' ) ) : ?>
			<h3 class="blog-title"><?php echo esc_html( get_theme_mod( 'pirate_rogue_custom_latestposts' ) ); ?></h3>
		<?php else : ?>
			<h3 class="blog-title"><?php esc_html_e('Latest Posts', 'pirate-rogue') ?></h3>
		<?php endif; ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('content' ); ?>

		<?php endwhile; // end of the loop. ?>

		<?php the_posts_pagination( array(
			'next_text' => '<span class="meta-nav">' . esc_html__( 'Older', 'pirate-rogue') . '</span> ' .
			'<span class="screen-reader-text">' . esc_html__( 'Older Posts', 'pirate-rogue') . '</span> ',
			'prev_text' => '<span class="meta-nav">' . esc_html__( 'Newer', 'pirate-rogue') . '</span> ' .
			'<span class="screen-reader-text">' . esc_html__( 'Newer Posts', 'pirate-rogue') . '</span> ',
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'pirate-rogue') . ' </span>',
			) ); ?>
	</div><!-- end #primary -->

	<?php get_sidebar(); ?>

	</div><!-- end .blog-wrap -->
<?php endif; ?>

<?php
// Front Page Section 2 (Featured Bottom)
if ( '' != get_theme_mod( 'pirate_rogue_front_section_two_tag' ) || '' != get_theme_mod( 'pirate_rogue_front_section_two_cat' ) ) : ?>
<?php get_template_part( 'template-parts/front-section-two' ); ?>
<?php endif; ?>

<?php
// Front Page Section About
if ( '' != get_theme_mod( 'pirate_rogue_front_section_about_text' ) ) : ?>
<?php get_template_part( 'template-parts/front-section-about' ); ?>
<?php endif; ?>

<?php
// Front Page Section 3 (on Background)
if ( '' != get_theme_mod( 'uku_front_section_three_tag' ) || '' != get_theme_mod( 'uku_front_section_three_cat' ) ) : ?>
<?php get_template_part( 'template-parts/front-section-three' ); ?>
<?php endif; ?>

<?php
// Front Page Section 4-column
if ( '' != get_theme_mod( 'uku_front_section_fourcolumn_tag' ) || '' != get_theme_mod( 'uku_front_section_fourcolumn_cat' ) ) : ?>
<?php get_template_part( 'template-parts/front-section-fourcolumn' ); ?>
<?php endif; ?>

<?php
// Front Page Section 6-column
if ( '' != get_theme_mod( 'uku_front_section_sixcolumn_tag' ) || '' != get_theme_mod( 'uku_front_section_sixcolumn_cat' ) ) : ?>
<?php get_template_part( 'template-parts/front-section-sixcolumn' ); ?>
<?php endif; ?>

    </div><!-- end #page-start -->

<?php get_footer(); ?>
