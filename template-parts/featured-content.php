<?php
/**
 * The template for displaying featured content slider
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>
<?php
	// Get a number of Front page recent posts set in the customizer
	$featuredtag = get_theme_mod('pirate_rogue_featuredtag');
        $featurednum = absint( get_theme_mod('pirate_rogue_featured_slider_num'));        
        $postcat = get_theme_mod('pirate_rogue_featuredcat');

        
        if (!isset($featurednum)) {
            $featurednum = 3;
        }
  
        $args = array(
		'posts_per_page'    => $featurednum,
		'post_status'       => 'publish',
		'tag_id'            => $featuredtag,
                'cat'               => $postcat,     
                'ignore_sticky_posts' => 1,
	);

	$uku_front_query = new WP_Query( $args );
	if($uku_front_query->have_posts()) { ?>
            <div class="featured-slider cf">          
            <?php 
	  	while($uku_front_query->have_posts()) : $uku_front_query->the_post(); 
                    // Include the featured content template.
                    get_template_part( 'template-parts/content', 'featured-post' );
                endwhile; 
                /* Restore original Post Data */
		wp_reset_postdata();
            ?>
	</div>
        <?php } ?>
