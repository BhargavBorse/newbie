<?php 
	$img = @imageCreateFromJpeg('1.jpg');
	header('Content-Type:image/jpeg');
	ImageJpeg($img);
	ImageDestroy($img);

?>