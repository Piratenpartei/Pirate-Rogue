<?php
/**
 * Template for displaying the standard search forms
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>

<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label for="s" class="screen-reader-text"><span><?php esc_html_e( 'Search', 'pirate-rogue'); ?></span></label>
	<input type="text" class="search-field" name="s" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'pirate-rogue'); ?>" />
	<input type="submit" class="submit" name="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'pirate-rogue'); ?>" />
</form>
