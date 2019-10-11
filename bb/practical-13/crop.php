<?php
	
	header('Content-Type:image/jpeg');
	$name = '2.jpg';
	$myimage = imagecreatefromjpeg($name);
	list($width,$height) = getimagesize($name);
	$scale = 0.5;
	
	$myimagezoom = imagecreatetruecolor($width*$scale,$height*$scale);
	$myimagecrop = imagecreatetruecolor(2500,1000);
	
	$b = imagecopyresampled($myimagezoom,$myimage,0,0,0,0,$width*$scale,$height*$scale,$width,$height);
	$b = imagecopyresampled($myimagecrop,$myimage,0,0,0,291,2144,865,$width,$height);
	
	imagejpeg($myimagezoom,$filename."zoom.jpg");
	imagejpeg($myimagecrop,$filename."crop.jpg");
	
?>