<?php
/**
 * The template used for displaying page content.
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */

global $pagebreakargs;
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> itemscope itemtype="http://schema.org/WebPage">
	<header class="entry-header">
		<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
	</header>
	<div class="entry-content" itemprop="text">
		<?php 
                    the_content(); 
                    echo wp_link_pages($pagebreakargs);
		?>
	</div>
	<?php echo pirate_rogue_create_schema_thumbnail(); ?>
	<?php edit_post_link( esc_html__( 'Edit Page', 'pirate-rogue'), '<div class="edit-link cf">', '</div>' ); ?>
    </article>
