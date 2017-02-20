<?php

/* 
 * Custom Fields
 * Metaboxes and adjustments for generell custom fields 
 */


add_action( 'load-post.php', 'pirate_rogue_metabox_cf_setup' );
add_action( 'load-post-new.php', 'pirate_rogue_metabox_cf_setup' );



/* Meta box setup function. */
function pirate_rogue_metabox_cf_setup() {

    add_action( 'add_meta_boxes', 'pirate_rogue_add_metabox_posts' );	
    add_action( 'add_meta_boxes', 'pirate_rogue_add_metabox_pages' );

    /* Save subtitle */
    add_action( 'save_post', 'pirate_rogue_save_metabox_untertitel', 10, 2 );

}


/* Create one or more meta boxes to be displayed on the post editor screen. */

function pirate_rogue_add_metabox_posts() {
    
    /* Subtitle */
    add_meta_box(
		'pirate_rogue_metabox_untertitel',		
		esc_html__( 'Subtitle', 'piratenkleider' ),
		'pirate_rogue_do_metabox_untertitel',	
		 'post','normal','high'
    );


}
function pirate_rogue_add_metabox_pages() {
    /* None yet */
}


/* Display Options for subtitles on posts */
function pirate_rogue_do_metabox_untertitel( $object, $box ) { 
	wp_nonce_field( basename( __FILE__ ), 'pirate_rogue_metabox_untertitel_nonce' ); 
	$post_type = get_post_type( $object->ID); 
	
	if ( 'post' == $post_type ) {
	    if ( !current_user_can( 'edit_post', $object->ID) )
		return;
        } elseif ('page' == $post_type ) {
             if ( !current_user_can( 'edit_page', $object->ID) )
		return;
	} else {
	    return;
	}
	
	$untertitel  = get_post_meta( $object->ID, 'piratenkleider_subtitle', true );	
	pirate_rogue_form_text('pirate_rogue_metabox_untertitel', $untertitel, __('Untertitel (Inhaltsüberschrift)','pirate_rogue'));

 }

/* Save the meta box's post/page metadata. */
function pirate_rogue_save_metabox_untertitel( $post_id, $post ) {
	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['pirate_rogue_metabox_untertitel_nonce'] ) || !wp_verify_nonce( $_POST['pirate_rogue_metabox_untertitel_nonce'], basename( __FILE__ ) ) )
		return $post_id;


	/* Check if the current user has permission to edit the post. */
	if ( !current_user_can( 'edit_post', $post_id ) )
            return;
        
        pirate_rogue_save_standard('piratenkleider_subtitle', $_POST['pirate_rogue_metabox_untertitel'], $post_id, 'text');

}