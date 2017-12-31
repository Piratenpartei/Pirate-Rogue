<?php
/*-----------------------------------------------------------------------------------*/
/* Default values
/*-----------------------------------------------------------------------------------*/

$pagebreakargs = array(
    'before'   => '<div class="page-links">' . esc_html__('Page:', 'pirate-rogue'),
    'after'            => '</div>',
    'link_before'      => '<span class="number">',
    'link_after'       => '</span>',
    'next_or_number'   => 'number',
    'separator'        => ' ',
    'nextpagelink'     => __( 'Next page',  'pirate-rogue' ),
    'previouspagelink' => __( 'Previous page',  'pirate-rogue' ),
    'pagelink'         => '%',
    'echo' => 0
    );


// Default Colors
// Notice: This list must match with the SASS-Colorset in css/sass/variables.scss !!!
$default_colorlist = array(
    'main'      => '#ff8800',
    'second'    => '#672082',
    'third'     => '#698bc1',
    'four'      => '#148f93',
    'uspirates' => '#B127AF',
    'tkpirates' => '#00B5B1',
    'chpirates' => '#F9B200',
    'ispirates' => '#51297e',
    
    'black'     => '#000',
    'white'     => '#fff',
    'grey'      => '#e7e7eb',
    'darkgrey'  => '#1a1a1a',
    'blue'      => '#0066ff',
    'red'       => '#d7464d',
    'yellow'    => '#e7b547',
    'green'     => '#85c066'
);

