<?php
/**
* The template for the Front Page Post Section 6 Columns
*
* @package Uku
* @since Uku 1.0
* @version 1.0.5
*/
?>

<?php
$postnumber = get_theme_mod('uku_front_section_sixcolumn_number');
$posttag = get_theme_mod('uku_front_section_sixcolumn_tag');
$tag_link = get_tag_link( $posttag );
$postcat = get_theme_mod('uku_front_section_sixcolumn_cat');
$category_link = get_category_link($postcat);

$uku_section_sixcolumn_query = new WP_Query( array(
	'posts_per_page'			=> $postnumber,
	'tag_id' 							=> $posttag,
	'cat' 								=> $postcat,
	'post_status'					=> 'publish',
	'ignore_sticky_posts' => 1,
) );
?>

<section id="front-section-sixcolumn" class="front-section cf">

	<?php if ( '' != get_theme_mod( 'uku_front_section_sixcolumn_title' ) && '' != get_theme_mod( 'uku_front_section_sixcolumn_cat') ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'uku_front_section_sixcolumn_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $category_link ); ?>"><?php esc_html_e('All posts', 'uku') ?></a></span></h3>
	<?php elseif ( '' != get_theme_mod( 'uku_front_section_sixcolumn_title' ) && '' != get_theme_mod( 'uku_front_section_sixcolumn_tag' ) ) : ?>
		<h3 class="front-section-title"><?php echo esc_html( get_theme_mod( 'uku_front_section_sixcolumn_title' ) ); ?><span><a class="all-posts-link" href="<?php echo esc_url( $tag_link ); ?>"><?php esc_html_e('All posts', 'uku') ?></a></span></h3>
	<?php endif; ?>

	<div class="section-sixcolumn-postwrap columns-wrap">
		<?php if($uku_section_sixcolumn_query->have_posts()) : ?>
			<?php while($uku_section_sixcolumn_query->have_posts()) : $uku_section_sixcolumn_query->the_post() ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( 'serif' === get_theme_mod( 'uku_main_design' ) && '' !== get_the_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail fadein">
							<a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('uku-serif-small'); ?></span></a>
						</div><!-- end .entry-thumbnail -->
					<?php elseif ( '' !== get_the_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail fadein">
							<a href="<?php the_permalink(); ?>"><span class="thumb-wrap"><?php the_post_thumbnail('uku-front-small'); ?></span></a>
						</div><!-- end .entry-thumbnail -->
				<?php endif; ?>

					<header class="entry-header">
						<div class="entry-cats">
							<?php the_category(' '); ?>
						</div><!-- end .entry-cats -->
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</header><!-- end .entry-header -->

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- end .entry-summary -->
				</article><!-- #post-## -->

			<?php endwhile; ?>

		<?php endif; // have_posts() ?>

		<?php wp_reset_postdata(); ?>

	</div><!-- end .section-sixcolumn-postwrap -->
</section><!-- end #front-section-sixcolumn -->
