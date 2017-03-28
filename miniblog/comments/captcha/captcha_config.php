<?php
// Captcha image generator configuration 

$background = "captchas/random-back-image5.jpg"; // this is the image used for random background creation

$sizex = 100; // captcha image width pixels
$sizey = 40; // captcha image height pixels

$yofs = 3; // VERTICAL text offset for font (varies with font) to get it 'just so'
$random = 1; // 1 is random rotation, 0 is no rotation

$length = 4; // number of characters in security code (must fit on your image!)

$font = "captchas/ransom.ttf";
$size = 20; // pixel size of the font used may need adjusting depending on your chosen font
$bold = 0; // 0=OFF. Some fonts/backgrounds will need bold text, so change $bold=0 to $bold=1

$red = 0; // RGB red channel 0-255 for font color
$green = 0; // RGB green channel 0-255 for font color
$blue = 0; // RGB blue channel 0-255 for font color
?>