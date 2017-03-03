<?php
/**
 * The template for displaying archive pages
 *
 * @package Uku
 * @since Uku 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="content-wrap">

	<div id="blog-wrap" class="blog-wrap cf">

	<div id="primary" class="site-content cf" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<?php
					the_archive_title( '<h1 class="archive-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- end .archive-header -->

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination( array(
					'next_text' => '<span aria-hidden="true" class="meta-nav">' . esc_html__( 'Older', 'uku' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Older Posts', 'uku' ) . '</span> ',
					'prev_text' => '<span aria-hidden="true" class="meta-nav">' . esc_html__( 'Newer', 'uku' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Newer Posts', 'uku' ) . '</span> ',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'uku' ) . ' </span>',
			) );

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div><!-- end #primary -->

	<?php get_sidebar(); ?>

	</div><!-- end .blog-wrap -->
</div><!-- end .content-wrap -->

<?php get_footer(); ?>
