<?php
/**
 * The template for displaying 404 error pages.
 * 
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
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

                    

                    <div class="entry-content">
                        <div class="two-columns-one">
                            <header class="entry-header">
                            <h1 class="entry-title">404</h1>       
                    </header><!--end .entry-header -->
                            <p><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pirate-rogue' ); ?>
                            <br>
                                <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try another search term?', 'pirate-rogue' ); ?></p>

                            <?php get_search_form(); ?>
                        </div>
                         <div class="two-columns-one last">


                            <?php 

                            $contentparts= array('videos','marque','videos','videos');
                            $usetemplate = array_rand($contentparts,1);
                            get_template_part('template-parts/content-404-'.$contentparts[$usetemplate] );

                            ?>
                         </div>
                        <div class="divider"></div>
                    </div><!-- end .entry-content -->
            </article><!-- end #post-0 -->

	</div><!-- end #primary -->
    </div><!-- end .blog-wrap -->

</div><!-- end .content-wrap -->

<?php get_footer(); ?>
