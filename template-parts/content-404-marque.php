<?php
/**
 * The template for displaying 404 error in marque
 */
?>

<?php
$font_sizes = array(22, 20, 18, 16);
$text_fields = array(
    __('File not found', 'pirate-rogue'),
    __('404', 'pirate-rogue'),
    __('Lost', 'pirate-rogue'),
    __('These are not the droids you are looking for', 'pirate-rogue'),
    __('Not here anymore', 'pirate-rogue'),
    __('Arrrgh!', 'pirate-rogue'),
    __('Arr!', 'pirate-rogue'),
    __('404', 'pirate-rogue'),
    __('Versenk mich doch!', 'pirate-rogue'),
    __('Beim Klabautermann! ', 'pirate-rogue'),
    __('404', 'pirate-rogue'),
    __('Yo-ho-ho', 'pirate-rogue'),
);

$scrollamount_range = array(1, 2, 3, 4, 5, 6, 7, 8);
$colors = array('#ff8000', '#2b2b2b', '#672082', '#698bc1');
$leftmax = 315;
$topmax = 110;
$number = 20;

$output = '';
for ($i = 1; $i <= $number; $i++) {
     $usecolor = $colors[array_rand($colors, 1)];
     $usescroll = $scrollamount_range[array_rand($scrollamount_range,1)];
     $usetext =  $text_fields[array_rand($text_fields,1)];
     $useleft = rand(1,$leftmax);
     $usetop = rand(1,$topmax);
     $useheight = rand(70,460);
     $usesize =  $font_sizes[array_rand($font_sizes,1)];
     $output .= '<marquee style="z-index:2;position:absolute;left:'.$useleft.'px;top:'.$usetop.'px;font-size:'.$usesize.'px;';
     $output .= 'color:'.$usecolor.';height:'.$useheight.'px;" scrollamount="'.$usescroll.'" direction="down">'.$usetext.'</marquee>';
     
}
$output .= '<span style="position:absolute;top:400px"></span>';
echo $output;
?>
