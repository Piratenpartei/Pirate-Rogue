<?php
/**
 * The template for displaying 404 error pages.
 *
 * @package Uku
 * @since Uku 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="content-wrap">

	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
	<div class="entry-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('uku-bigthumb'); ?></a>
	</div><!-- end .entry-thumbnail -->
	<?php endif; ?>

	<div id="blog-wrap" class="blog-wrap cf">

		<div id="primary" class="site-content cf" role="main">

	<article id="post-0" class="page no-results not-found cf">

			<header class="entry-header">
				<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'uku' ); ?></h1>
			</header><!--end .entry-header -->

			<div class="entry-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try another search term?', 'uku' ); ?></p>

				<?php get_search_form(); ?>

			</div><!-- end .entry-content -->
	</article><!-- end #post-0 -->

	</div><!-- end #primary -->

	<?php get_sidebar( 'page' ); ?>

	</div><!-- end .blog-wrap -->

</div><!-- end .content-wrap -->

<?php get_footer(); ?>
