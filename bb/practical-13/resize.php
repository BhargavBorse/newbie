<?php
	$filename = '3.jpg';
	$percent = 0.5;
	header('Content-Type:image/jpeg');
	list($width,$height) = GetImageSize($filename);
	$newwidth = $width * $percent;
	$newheight = $height * $percent;
	$thumb = imageCreateTrueColor($newwidth,$newheight);
	$source = imageCreatefromjpeg($filename);
	ImageCopyresized($thumb,$source,0,0,0,0,$newwidth,$newheight,$width,$height);
	imagejpeg($thumb);
?>