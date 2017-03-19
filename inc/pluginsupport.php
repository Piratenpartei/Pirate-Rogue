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
/* Oh no! Here is the end!?! 
/*-----------------------------------------------------------------------------------*/