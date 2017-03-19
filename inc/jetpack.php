<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 */

/*-----------------------------------------------------------------------------------*/
/* Customize Jetpack Related Posts
/*-----------------------------------------------------------------------------------*/
function jetpackme_more_related_posts( $options ) {
		$options['size'] = 4;
		return $options;
}
add_filter( 'jetpack_relatedposts_filter_options', 'jetpackme_more_related_posts' );

/*-----------------------------------------------------------------------------------*/
/* Remove Related Posts in defalut position (added via shortcode to the single.php)
/*-----------------------------------------------------------------------------------*/
function jetpackme_remove_rp() {
		if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
				$jprp = Jetpack_RelatedPosts::init();
				$callback = array( $jprp, 'filter_add_target_to_dom' );
				remove_filter( 'the_content', $callback, 40 );
		}
}
add_filter( 'wp', 'jetpackme_remove_rp', 20 );

/*-----------------------------------------------------------------------------------*/
/* Remove Sharing Icons position (added via shortcode to the single.php)
/*-----------------------------------------------------------------------------------*/
function jptweak_remove_share() {
		remove_filter( 'the_content', 'sharing_display',19 );
		remove_filter( 'the_excerpt', 'sharing_display',19 );
		if ( class_exists( 'Jetpack_Likes' ) ) {
				remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
		}
}

add_action( 'loop_start', 'jptweak_remove_share' );

/*-----------------------------------------------------------------------------------*/
/* Jetpack Setup
/*-----------------------------------------------------------------------------------*/
function uku_jetpack_setup() {

	/**
		* Add theme support for Infinite Scroll.
	 */
	add_theme_support( 'infinite-scroll', array(
		'type'      => 'click',
		'container'	=> 'primary',
	) );

}
add_action( 'after_setup_theme', 'uku_jetpack_setup' );
