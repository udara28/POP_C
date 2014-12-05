<?php
 
function createImage($word,$font='fonts/impact.ttf'){  
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
	 
function mergeImagesHorizontally($image_x, $image_y) {
  
   	$width_x = imagesx($image_x);
   	$width_y = imagesx($image_y);
   	
	$height_x = imagesy($image_x);
   	$height_y = imagesy($image_y);
   	// Create new image with desired dimensions
  
   	$image = imagecreatetruecolor($width_x+$width_y,max($height_x,$height_y));
   	$white = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $white);
   
   	imagecopy($image, $image_x, 0, 0, 0, 0, $width_x, $height_x);
	imagecopy($image, $image_y, $width_x, $height_x-$height_y, 0, 0, $width_y, $height_y);
  
     // Clean up  
	//imagedestroy($image);
	imagedestroy($image_x);
	imagedestroy($image_y);
	//imagejpeg($image, 'im.jpg');
	return $image;
}

function mergeImagesVertically($image_x, $image_y) {
	$width_x = imagesx($image_x);
   	$width_y = imagesx($image_y);
   	
	$height_x = imagesy($image_x);
   	$height_y = imagesy($image_y);
	
	$image = imagecreatetruecolor(max($width_x,$width_y),$height_x + $height_y);
	$white = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $white);
	
	imagecopy($image, $image_x, 0, 0, 0, 0, $width_x, $height_x);
	imagecopy($image, $image_y, 0, $height_x, 0, 0, $width_y, $height_y);
	
	// Clean up  
	//imagedestroy($image);
	imagedestroy($image_x);
	imagedestroy($image_y);
	//imagejpeg($image, 'im.jpg');
	return $image;
}
?>