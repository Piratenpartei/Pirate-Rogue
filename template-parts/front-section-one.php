<?php
/**
 * The template for the Front Page Post Section One
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>

<?php
$posttag = get_theme_mod('uku_front_section_one_tag');
$tag_link = get_tag_link( $posttag );

$postcat = get_theme_mod('uku_front_section_one_cat');
$category_link = get_category_link($postcat);

$pirate_rogue_section_one_first_query = new WP_Query( array(
	'posts_per_page'        => 1,
	'post_status'           => 'publish',
	'tag_id'                => $posttag,
	'cat'                   => $postcat,
	'ignore_sticky_posts' 	=> 1,
) );


	$args = array(
		'posts_per_page'    => 5,
		'offset'            => 1,
		'post_status'       => 'publish',
		'tag_id'            => $posttag,
		'cat'               => $postcat,
		'ignore_sticky_posts' => 1,
	);

$pirate_rogue_section_one_second_query = new WP_Query( $args );
?>

<section id="front-section-one" class="front-section cf">

	<?php if ( '' != get_theme_mod( 'uku_front_section_one_title' ) && '' != get_theme_mod( 'uku_front_section_one_cat') ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'uku_front_section_one_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $category_link ); ?>"><?php esc_html_e('All posts', 'pirate-rogue') ?></a></span></h3>
	<?php elseif ( '' != get_theme_mod( 'uku_front_section_one_title' ) && '' != get_theme_mod( 'uku_front_section_one_tag' ) ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'uku_front_section_one_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $tag_link ); ?>"><?php esc_html_e('All posts', 'pirate-rogue') ?></a></span></h3>
	<?php endif; ?>

	<div class="section-one-column-one">
		<?php if($pirate_rogue_section_one_first_query->have_posts()) {
			while($pirate_rogue_section_one_first_query->have_posts()) : $pirate_rogue_section_one_first_query->the_post();
                            get_template_part('template-parts/content-frontpost-big' );
			endwhile; 

		} // have_posts() ?>

	</div><!-- end .section-one-column-one -->

	<div class="section-one-column-two columns-wrap">
		<?php 
                if($pirate_rogue_section_one_second_query->have_posts()) { 
			while($pirate_rogue_section_one_second_query->have_posts()) : $pirate_rogue_section_one_second_query->the_post();
			    get_template_part('template-parts/content-frontpost-small' );
			endwhile; 
                } // have_posts() 

		wp_reset_postdata(); ?>
	</div><!-- end .section-one-column-two -->
</section><!-- end #front-section-one -->
