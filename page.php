<?php
/**
 * The template for displaying all pages with
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="content-wrap">
	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
	<div class="entry-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div><!-- end .entry-thumbnail -->
	<?php endif; ?>

	<div id="blog-wrap" class="blog-wrap cf">
		<div id="primary" class="site-content cf" role="main">
		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );     
			endwhile;
		?>
		</div><!-- end #primary -->
            <?php get_sidebar( 'page' ); ?>
	</div>
    </div>

<?php get_footer(); ?>
