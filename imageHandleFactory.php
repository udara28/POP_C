<?php
 
  function CreateImage($word,$font='Impact.ttf'){
	// Set the content-type
	header('Content-Type: image/png');
	
	$bbox = imagettfbbox(10, 45, $font, $word);
	$width = $bbox[2]*3;
	$height = (-1)*$bbox[7]*3;
	// Create the image
	$im = imagecreatetruecolor($width, $height);

	// Create some colors
	$white = imagecolorallocate($im, 255, 255, 255);
	$grey = imagecolorallocate($im, 128, 128, 128);
	$black = imagecolorallocate($im, 0, 0, 0);
	//imagefilledrectangle($im, 0, 0, 399, 29, $white);
	$white = imagecolorallocate($im, 255, 255, 255);
	imagefill($im, 0, 0, $white);
	// Add the text
	imagettftext($im, 20, 0, 0, $height - 2, $black, $font, $word);

	// Using imagepng() results in clearer text compared with imagejpeg()
	return $im;
	
   }
?>