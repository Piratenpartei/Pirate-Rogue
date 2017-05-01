<?php
/**
* The Template for displaying single posts.
*
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
*/

get_header(); ?>

<div id="singlepost-wrap" class="singlepost-wrap cf">

	<?php // Start the Loop.
	while ( have_posts() ) : the_post(); ?>
        	<?php get_template_part( 'template-parts/content-image' ); ?>
        <?php endwhile; // End of the loop. ?>
    <?php get_sidebar(); ?>

    </div>
</div><!-- end .singlepost-wrap -->


<?php get_footer(); ?>
