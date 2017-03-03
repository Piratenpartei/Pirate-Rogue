<?php
/**
 * Template for displaying the standard search forms
 *
 * @package Uku
 * @since Uku 1.0
 * @version 1.0.1
 */
?>

<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label for="s" class="screen-reader-text"><span><?php esc_html_e( 'Search', 'uku' ); ?></span></label>
	<input type="text" class="search-field" name="s" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'uku' ); ?>" />
	<input type="submit" class="submit" name="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'uku' ); ?>" />
</form>
