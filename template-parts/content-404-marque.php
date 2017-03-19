<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$font_sizes = array(22, 20, 18, 16);
$text_fields = array(
    __('File not found', 'pirate_rogue'),
    __('404', 'pirate_rogue'),
    __('Lost', 'pirate_rogue'),
    __('These are not the droids you are looking for', 'pirate_rogue'),
    __('Not here anymore', 'pirate_rogue'),
    __('Arrrgh!', 'pirate_rogue'),
    __('Arr!', 'pirate_rogue'),
    __('404', 'pirate_rogue'),
    __('Versenk mich doch!', 'pirate_rogue'),
    __('Beim Klabautermann! ', 'pirate_rogue'),
    __('404', 'pirate_rogue'),
    __('Yo-ho-ho', 'pirate_rogue'),
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
