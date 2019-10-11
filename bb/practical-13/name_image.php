<?php 
	header('Content-Type:image/jpeg');
	$img = imagecreate(200,200);
	
	$bg_color = imagecolorallocate($img,255,0,0);
	$txt_color = imagecolorallocate($img,0,0,255);
	
	imagestring($img,55,35,100,"Bhargav Borse",$txt_color);
	
	imagepng($img);
	imagedestroy($img);
?>