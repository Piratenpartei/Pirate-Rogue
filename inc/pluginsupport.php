<?php

/*-----------------------------------------------------------------------------------*/
/* Pluginsupport - special filters and hooks for plugins
/*-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/* Reset canonical URL for wpSEO
/*-----------------------------------------------------------------------------------*/
add_filter(
    'wpseo_set_canonical',
    function($input) { 
        if (is_single()) {    
            $canonical = get_post_meta( get_the_ID(), 'pirate_rogue_canonical', true );
             if ($canonical) {
                $canonical = esc_url( $canonical );
                if ($canonical) {
                     return $canonical;
                }
            }
        }
        return $input;
    }
);

/*-----------------------------------------------------------------------------------*/
/* Plugin TinyMCE: Button für Seitenumbruch ergänzen
/*-----------------------------------------------------------------------------------*/
add_filter( 'mce_buttons', 'kb_add_next_page_button', 1, 2 );
function kb_add_next_page_button( $buttons, $id ) {
  if ( 'content' === $id ) {
    array_splice( $buttons, 13, 0, 'wp_page' );
  }
  return $buttons;
}



/*-----------------------------------------------------------------------------------*/
/* Oh no! Here is the end!?! 
/*-----------------------------------------------------------------------------------*/