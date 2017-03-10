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
        	<?php get_template_part( 'template-parts/content-single' ); ?>
        <?php endwhile; // End of the loop. ?>

<?php get_sidebar(); ?>

</div>
</div><!-- end .singlepost-wrap -->

<?php if ( class_exists( 'Jetpack_RelatedPosts' ) ) : ?>
	<div class="recommended-posts-wrap cf">
		<?php echo do_shortcode( '[jetpack-related-posts]' ); ?>
	</div><!-- end .recommended-posts-wrap -->
<?php endif; ?>

<?php get_footer(); ?>
