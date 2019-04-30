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
<header class="entry-header">
	<h1 class="entry-title"><?php the_title(); ?></h1>
</header>
<div class="entry-content">
<?php
	the_content();
	echo wp_link_pages($pagebreakargs);
?>
</div>
<?php edit_post_link( esc_html__( 'Edit Page', 'pirate-rogue'), '<div class="edit-link cf">', '</div>' ); ?>