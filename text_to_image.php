<?php
header('Content-type: image/png');
$text = " Hello";
//$fontSize  = 20;
//$imgWidth = 400;
//$imgHeight = 80;
//$font = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf';
//https://cdnjs.cloudflare.com/ajax/libs/ink/3.1.10/fonts/Roboto_slab/robotoslab-bold-webfont.ttf

$font_path = 'https://cdnjs.cloudflare.com/ajax/libs/ink/3.1.10/fonts/Roboto_slab/robotoslab-bold-webfont.ttf';

// Create a 100*30 image
$im = imagecreate(500, 200);

// White background and blue text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

// Write the string at the top left
//imagestring($im, 50, 200, 80, 'Hello world!', $textcolor);

 imagettftext($im, 25, 0, 75, 300, $textcolor, $font_path, $text);

// Output the image


imagepng($im);
imagedestroy($im);

 ?>
