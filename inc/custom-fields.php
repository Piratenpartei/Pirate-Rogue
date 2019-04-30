<?php

/* 
 * Custom Fields
 * Metaboxes and adjustments for generell custom fields 
 */


add_action( 'load-post.php', 'pirate_rogue_metabox_cf_setup' );
add_action( 'load-post-new.php', 'pirate_rogue_metabox_cf_setup' );


/*-----------------------------------------------------------------------------------*/
/* Meta box setup function.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_metabox_cf_setup() {

    add_action( 'add_meta_boxes', 'pirate_rogue_add_metabox_posts' );	
    add_action( 'add_meta_boxes', 'pirate_rogue_add_metabox_pages' );

    /* Save subtitle */
    add_action( 'save_post', 'pirate_rogue_save_metabox_attributes', 10, 2 );
    
    /* Save Page Sidebar */
    add_action( 'save_post', 'pirate_rogue_save_metabox_page_sidebar', 10, 2 );
}


/*-----------------------------------------------------------------------------------*/
/* Create one or more meta boxes to be displayed on the post editor screen.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_add_metabox_posts() {
    
    /* Subtitle */
    add_meta_box(
		'pirate_rogue_metabox_attributes',		
		esc_html__( 'Attributes', 'pirate-rogue' ),
		'pirate_rogue_do_metabox_attributes',	
		 'post','normal','high'
    );
}
/*-----------------------------------------------------------------------------------*/
/* Create one or more meta boxes to be displayed on the post editor screen.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_add_metabox_pages() {
    /* None yet */
    add_meta_box(
		'pirate_rogue_metabox_page_sidebar',			
		esc_html__( 'Sidebar', 'pirate-rogue' ),		
		'pirate_rogue_do_metabox_page_sidebar',		
		 'page','normal','core'
	);
    
}


/*-----------------------------------------------------------------------------------*/
/*  Display metabox in pages for sidebar
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_do_metabox_page_sidebar( $object, $box ) { 
	wp_nonce_field( basename( __FILE__ ), 'pirate_rogue_metabox_page_sidebar_nonce' ); 
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
	$pirate_rogue_page_sidebar  = get_post_meta( $object->ID, 'pirate_rogue_page_sidebar', true );
	pirate_rogue_form_wpeditor('pirate_rogue_page_sidebar', $pirate_rogue_page_sidebar, __('Content','pirate-rogue'), __('Optional entries for the sidebar','pirate-rogue'), false);
}
/*-----------------------------------------------------------------------------------*/
/* Save the meta box page sidebar data
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_save_metabox_page_sidebar( $post_id, $post ) {
	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['pirate_rogue_metabox_page_sidebar_nonce'] ) || !wp_verify_nonce( $_POST['pirate_rogue_metabox_page_sidebar_nonce'], basename( __FILE__ ) ) )
		return $post_id;


	/* Check if the current user has permission to edit the post. */
	if ( !current_user_can( 'edit_page', $post_id ) )
            return;
       pirate_rogue_save_standard('pirate_rogue_page_sidebar', $_POST['pirate_rogue_page_sidebar'], $post_id, 'page', 'wpeditor');

}
/*-----------------------------------------------------------------------------------*/
/*  Display Options for subtitles on posts 
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_do_metabox_attributes( $object, $box ) { 
	wp_nonce_field( basename( __FILE__ ), 'pirate_rogue_metabox_attributes_nonce' ); 
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
	
	$piratenkleider_untertitel  = get_post_meta( $object->ID, 'piratenkleider_subtitle', true );	
        $untertitel  = get_post_meta( $object->ID, 'pirate_rogue_subtitle', true );
        if ((empty($untertitel)) && (isset($piratenkleider_untertitel))) {
            $untertitel = $piratenkleider_untertitel;
        }
	pirate_rogue_form_text('pirate_rogue_metabox_untertitel', $untertitel, __('Subtitle','pirate-rogue'),  __('Enter a text for a subtitle here, which belongs to the main title of the entry. Do not use more than 120 characters.','pirate-rogue'));
        
        $canonical  = get_post_meta( $object->ID, 'pirate_rogue_canonical', true );
        pirate_rogue_form_url('pirate_rogue_metabox_canonical', $canonical, __('URL (original address)','pirate-rogue'), __('Enter the URL of the original post where the text has been taken from. This could be another blog or website.','pirate-rogue'));
 }
/*-----------------------------------------------------------------------------------*/
/* Save the meta box's post/page metadata.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_save_metabox_attributes( $post_id, $post ) {
	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['pirate_rogue_metabox_attributes_nonce'] ) || !wp_verify_nonce( $_POST['pirate_rogue_metabox_attributes_nonce'], basename( __FILE__ ) ) )
		return $post_id;


	/* Check if the current user has permission to edit the post. */
	if ( !current_user_can( 'edit_post', $post_id ) )
            return;
        
        
        $piratenkleider_untertitel  = get_post_meta( $post_id, 'piratenkleider_subtitle', true );
        if ($piratenkleider_untertitel) {
            delete_post_meta( $post_id, 'piratenkleider_subtitle', $piratenkleider_untertitel );	
        }
        pirate_rogue_save_standard('pirate_rogue_subtitle', $_POST['pirate_rogue_metabox_untertitel'], $post_id, 'text');
        pirate_rogue_save_standard('pirate_rogue_canonical', $_POST['pirate_rogue_metabox_canonical'], $post_id, 'url');

}

/*-----------------------------------------------------------------------------------*/
/* Beim Klabautermann! Da is ja nix mehr!
/*-----------------------------------------------------------------------------------*/