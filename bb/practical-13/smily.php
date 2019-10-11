<?php 
	header('Content-Type:image/jpeg');
	$img = imagecreate(400,400);
	
	$bg_color = imagecolorallocate($img,255,0,0);
	$coloryellow = imagecolorallocate($img,255,255,0);
	$colorblack = imagecolorallocate($img,0,0,0);
	$colorred = imagecolorallocate($img,255,0,0);
	
	imagefilledarc($img,200,200,200,200,0,360,$coloryellow,IMG_ARC_PIE);
	imagefilledarc($img,160,170,20,20,0,360,$colorblack,IMG_ARC_PIE);
	imagefilledarc($img,240,170,20,20,0,360,$colorblack,IMG_ARC_PIE);
	imagefilledarc($img,200,220,60,60,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,40,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,41,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,42,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,43,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,44,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,45,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,46,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,47,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,48,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,49,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,50,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,51,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,52,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,53,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,54,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,55,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,56,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,57,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,58,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,59,0,180,$colorblack,IMG_ARC_NOFILL);
	imagefilledarc($img,200,220,60,60,0,180,$colorblack,IMG_ARC_NOFILL);
	
	
	
	
	imagepng($img);
	imagedestroy($img);
?>