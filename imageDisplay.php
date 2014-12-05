<?php
	include 'imageHandleFactory.php';
	
	$msgString=$_GET['msg'];
	$split_str=explode(" ",$msgString);
	$size=sizeof($split_str);
	
	for($i=0;$i<$size;$i++)
	{
		//echo $split_str[$i].$i;
		if(($i%2)==0){
			$imgTemp=createImage($split_str[$i]);
		}
		else
		{
			$imgTemp=createImage($split_str[$i],'monofont.ttf');
		}
		if($i==0){
			$img=$imgTemp;
		}else{
			$img=merge($img,$imgTemp);
		}
	}


	
	header('Content-Type: image/png');
	imagepng($img);
	imagedestroy($img);


//CreateImage('hi');
//$img2 = CreateImage('world');

//merge($img1,$img2);


function merge($image_x, $image_y) {

 $width_x = imagesx($image_x);
 $width_y = imagesx($image_y);
 $height_x = imagesy($image_x);
 $height_y = imagesy($image_y);
 // Create new image with desired dimensions

 $image = imagecreatetruecolor($width_x+$width_y,$height_x);
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



?>