<?php
session_start();
 
// Generate a random string for captcha code
$captcha_code = substr(md5(rand()), 0, 6);
 
// Save captcha code in session variable
$_SESSION["captcha_code"] = $captcha_code;
 
// Set header to output captcha image
header('Content-Type: image/png');
 
// Create captcha image
$captcha_image = imagecreate(100, 30);
 
// Set captcha image background color
imagecolorallocate($captcha_image, 255, 255, 255);
 
// Set captcha image text color
$text_color = imagecolorallocate($captcha_image, 0, 0, 0);
 
// Write captcha code on image
imagestring($captcha_image, 5, 25, 5, $captcha_code, $text_color);
 
// Output captcha image
imagepng($captcha_image);
 
// Free up memory
imagedestroy($captcha_image);
?>
