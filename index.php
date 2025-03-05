<?php
// Content type for displaying the image
header('Content-Type: image/png');

// Load the uploaded image (ss.png) from the 'public' folder
$image = imagecreatefrompng('ss.png');

// Set text color (white in this case)
$textColor = imagecolorallocate($image, 255, 255, 255);

// Set font file and size (from 'public' folder)
$font = 'Roboto-Regular.ttf'; // Corrected path to the font
$fontSize = 20;
$x = 50;
$y = 50;

// Text to overlay
$text = 'Hello, Vercel!';

// Add text to the image
imagettftext($image, $fontSize, 0, $x, $y, $textColor, $font, $text);

// Output the image as PNG
imagepng($image);

// Free memory
imagedestroy($image);
?>
