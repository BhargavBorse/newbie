<?php
	$dest = Imagecreatefromjpeg('5.jpg');
	$src1 = Imagecreatefromjpeg('4.jpg');
	$src2 = Imagecreatefromjpeg('6.jpg');
	
	imagefilter($src1,IMG_FILTER_GRAYSCALE);
	imagefilter($src2,IMG_FILTER_GRAYSCALE);
	
	imagecopymerge($dest,$src1,100,1500,0,0,1201,1200,100);
	imagecopymerge($dest,$src2,2700,1500,0,0,1201,1200,100);
	
	header('Content-Type:image/jpeg');
	ImageJpeg($dest);
	
	ImageDestroy($dest);
	ImageDestroy($src1);
	ImageDestroy($src2);
?>