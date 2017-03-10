<?php
/*-----------------------------------------------------------------------------------*/
/* Pirate Rogue Shortcodes Shortcodes
/*-----------------------------------------------------------------------------------*/
// Enable shortcodes in widget areas
add_filter( 'widget_text', 'do_shortcode' );

/*-----------------------------------------------------------------------------------*/
/* Multi Columns Shortcodes
/* Don't forget to add "_last" behind the shortcode if it is the last column.
/*-----------------------------------------------------------------------------------*/

// Two Columns
function pirate_rogue_shortcode_two_columns_one( $atts, $content = null ) {
   return '<div class="two-columns-one">' . ($content) . '</div>';
}
add_shortcode( 'two_columns_one', 'pirate_rogue_shortcode_two_columns_one' );

function pirate_rogue_shortcode_two_columns_one_last( $atts, $content = null ) {
   return '<div class="two-columns-one last">' . ($content) . '</div>';
}
add_shortcode( 'two_columns_one_last', 'pirate_rogue_shortcode_two_columns_one_last' );

// Three Columns
function pirate_rogue_shortcode_three_columns_one($atts, $content = null) {
   return '<div class="three-columns-one">' . ($content) . '</div>';
}
add_shortcode( 'three_columns_one', 'pirate_rogue_shortcode_three_columns_one' );

function pirate_rogue_shortcode_three_columns_one_last($atts, $content = null) {
   return '<div class="three-columns-one last">' . ($content) . '</div>';
}
add_shortcode( 'three_columns_one_last', 'pirate_rogue_shortcode_three_columns_one_last' );

function pirate_rogue_shortcode_three_columns_two($atts, $content = null) {
   return '<div class="three-columns-two">' . ($content) . '</div>';
}
add_shortcode( 'three_columns_two', 'pirate_rogue_shortcode_three_columns_two' );

function pirate_rogue_shortcode_three_columns_two_last($atts, $content = null) {
   return '<div class="three-columns-two last">' . ($content) . '</div>';
}
add_shortcode( 'three_columns_two_last', 'pirate_rogue_shortcode_three_columns_two_last' );

// Four Columns
function pirate_rogue_shortcode_four_columns_one($atts, $content = null) {
   return '<div class="four-columns-one">' . ($content) . '</div>';
}
add_shortcode( 'four_columns_one', 'pirate_rogue_shortcode_four_columns_one' );

function pirate_rogue_shortcode_four_columns_one_last($atts, $content = null) {
   return '<div class="four-columns-one last">' . ($content) . '</div>';
}
add_shortcode( 'four_columns_one_last', 'pirate_rogue_shortcode_four_columns_one_last' );

function pirate_rogue_shortcode_four_columns_two($atts, $content = null) {
   return '<div class="four-columns-two">' . ($content) . '</div>';
}
add_shortcode( 'four_columns_two', 'pirate_rogue_shortcode_four_columns_two' );

function pirate_rogue_shortcode_four_columns_two_last($atts, $content = null) {
   return '<div class="four-columns-two last">' . ($content) . '</div>';
}
add_shortcode( 'four_columns_two_last', 'pirate_rogue_shortcode_four_columns_two_last' );

function pirate_rogue_shortcode_four_columns_three($atts, $content = null) {
   return '<div class="four-columns-three">' . ($content) . '</div>';
}
add_shortcode( 'four_columns_three', 'pirate_rogue_shortcode_four_columns_three' );

function pirate_rogue_shortcode_four_columns_three_last($atts, $content = null) {
   return '<div class="four-columns-three last">' . ($content) . '</div>';
}
add_shortcode( 'four_columns_three_last', 'pirate_rogue_shortcode_four_columns_three_last' );


// Divide Text Shortcode
function pirate_rogue_shortcode_divider($atts, $content = null) {
   return '<div class="divider"></div>';
}
add_shortcode( 'divider', 'pirate_rogue_shortcode_divider' );


/*-----------------------------------------------------------------------------------*/
/* Info Boxes Shortcodes
/*-----------------------------------------------------------------------------------*/

function pirate_rogue_shortcode_white_box($atts, $content = null) {
   return '<div class="box white-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'white_box', 'pirate_rogue_shortcode_white_box' );

function pirate_rogue_shortcode_yellow_box($atts, $content = null) {
   return '<div class="box yellow-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'yellow_box', 'pirate_rogue_shortcode_yellow_box' );

function pirate_rogue_shortcode_red_box($atts, $content = null) {
   return '<div class="box red-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'red_box', 'pirate_rogue_shortcode_red_box' );

function pirate_rogue_shortcode_blue_box($atts, $content = null) {
   return '<div class="box blue-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'blue_box', 'pirate_rogue_shortcode_blue_box' );

function pirate_rogue_shortcode_green_box($atts, $content = null) {
   return '<div class="box green-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'green_box', 'pirate_rogue_shortcode_green_box' );

function pirate_rogue_shortcode_lightgrey_box($atts, $content = null) {
   return '<div class="box lightgrey-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'lightgrey_box', 'pirate_rogue_shortcode_lightgrey_box' );

function pirate_rogue_shortcode_grey_box($atts, $content = null) {
   return '<div class="box grey-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'grey_box', 'pirate_rogue_shortcode_grey_box' );

function pirate_rogue_shortcode_dark_box($atts, $content = null) {
   return '<div class="box dark-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'dark_box', 'pirate_rogue_shortcode_dark_box' );

function pirate_rogue_shortcode_maincolor_box($atts, $content = null) {
   return '<div class="box maincolor-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'maincolor_box', 'pirate_rogue_shortcode_maincolor_box' );

function pirate_rogue_shortcode_secondcolor_box($atts, $content = null) {
   return '<div class="box secondcolor-box">' . do_shortcode( ($content) ) . '</div>';
}
add_shortcode( 'secondcolor_box', 'pirate_rogue_shortcode_secondcolor_box' );

/*-----------------------------------------------------------------------------------*/
/* Buttons Shortcodes
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'link'	=> '#',
    'target' => '',
    'color'	=> '',
    'size'	=> '',
	 'form'	=> '',
	 'font'	=> '',
    ), $atts));

    $color = ($color) ? ' '.$color. '-btn' : '';
    $size = ($size) ? ' '.$size. '-btn' : '';
    $form = ($form) ? ' '.$form. '-btn' : '';
    $font = ($font) ? ' '.$font. '-btn' : '';
    $target = ($target == 'blank') ? ' target="_blank"' : '';

    $out = '<a' .$target. ' class="standard-btn' .$color.$size.$form.$font. '" href="' .$link. '"><span>' .do_shortcode($content). '</span></a>';

    return $out;
}
add_shortcode('button', 'pirate_rogue_button');
/*-----------------------------------------------------------------------------------*/
/* Accordion: Surrounding Markup
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_accordion( $atts, $content = null ) {

    if( isset($GLOBALS['accordion_count']) )
      $GLOBALS['accordion_count']++;
    else
      $GLOBALS['accordion_count'] = 0;

    $defaults = array();
    extract( shortcode_atts( $defaults, $atts ) );
    $output = '';

      $output .= '<div class="accordion" id="accordion-' . $GLOBALS['accordion_count'] . '">';
      $output .= do_shortcode( $content );
      $output .= '</div>';

    return $output;
}
add_shortcode('accordion', 'pirate_rogue_accordion' );
// add_shortcode('accordionsub', array( $this, 'pirate_rogue_accordion' ));
    // Define more as one shortcode name to allow nestet accordions

/*-----------------------------------------------------------------------------------*/
/* Accordion: Single Accordion Tab
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_accordion_tab( $atts, $content = null ) {

    if( !isset($GLOBALS['current_accordiontab']) )
      $GLOBALS['current_accordiontab'] = 0;
    else 
      $GLOBALS['current_accordiontab']++;


    $defaults = array( 'title' => 'Tab', 'color' => '', 'id' => '', 'load' => '');
    extract( shortcode_atts( $defaults, $atts ) );

    $addclass = '';

    $title = esc_attr($title);
    $color = $color ? ' ' . esc_attr( $color ) : '';
    $load = $load ? ' ' . esc_attr( $load ) : '';

    if (!empty($load)) {
        $addclass .= " ".$load;
    }

    $id = intval($id) ? intval($id) : 0;
    if ($id<1) {
        $id = $GLOBALS['current_accordiontab'];
    }

    $output = '<div class="accordion-group'.$color.'">';
    $output .= '<div class="accordion-heading acc-head-'.$id.'"><a class="accordion-toggle';
    $output .='" data-toggle="collapse" data-parent="#accordion-' . $GLOBALS['accordion_count'] . '" href="#collapse_' . $id .'">' . $title . '</a></div>'."\n";
    $output .= '<div id="collapse_' . $id . '" class="accordion-body'. $addclass .'">';
    $output .= '<div class="accordion-inner clearfix">'."\n";
    $output .= do_shortcode($content);
    $output .= '</div>';
    $output .= '</div></div>';

    return $output;
}
add_shortcode('collapse', 'pirate_rogue_accordion_tab');
add_shortcode('accordion-item',  'pirate_rogue_accordion_tab');
add_shortcode('accordion-tab','pirate_rogue_accordion_tab' );

// Define more as one shortcode name to allow nestet accordions	


/*-----------------------------------------------------------------------------------*/
/* Shortcodes to display feature sections top
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_shortcode_section_featured_3to1( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'cat'	=> '',
    'tag'	=> '',
    'title'	=> '',
    'id'	=> '',
    'num'	=> '',
    ), $atts));

    $cat = ($cat) ? $cat : '';
    $tag = ($tag) ? $tag : '';
    $title = ($title) ? $title : '';
    $id = ($id) ? $id : '';
    $num = ($num) ? intval($num) : 5;
    
    $out = pirate_rogue_section_featured_3to1($tag, $cat, $title, $num, $id, 'shortcode-section');
	
    if (empty($out)) {
	echo '<p class="box red-box">'.__("No result for category \"$cat\", Tag \"$tag\"",'uku').'</p>';	
    }
    return $out;
}
add_shortcode('section_featured_3to1', 'pirate_rogue_shortcode_section_featured_3to1');
add_shortcode('section_featured_top', 'pirate_rogue_shortcode_section_featured_3to1');

/*-----------------------------------------------------------------------------------*/
/* Shortcodes to display feature sections bottom
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_shortcode_section_featured_1to3( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'cat'	=> '',
    'tag'	=> '',
    'title'	=> '',
    'id'	=> '',
    'num'	=> '',
    ), $atts));

    $cat = ($cat) ? $cat : '';
    $tag = ($tag) ? $tag : '';
    $title = ($title) ? $title : '';
    $id = ($id) ? $id : '';
    $num = ($num) ? intval($num) : 9;
    
    $out = pirate_rogue_section_featured_1to3($tag, $cat, $title, $num, $id, 'shortcode-section');
	
    if (empty($out)) {
	echo '<p class="box red-box">'.__("No result for category \"$cat\", Tag \"$tag\"",'uku').'</p>';	
    }
    return $out;
}
add_shortcode('section_featured_1to3', 'pirate_rogue_shortcode_section_featured_1to3');
add_shortcode('section_featured_bottom', 'pirate_rogue_shortcode_section_featured_1to3');

/*-----------------------------------------------------------------------------------*/
/* The end of this file inc/shortcodes.php as you know it
/*-----------------------------------------------------------------------------------*/