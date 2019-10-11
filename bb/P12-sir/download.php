<?php
	$filename = $_REQUEST['file'];
	header("Content-Type: application/octet-stream");
	header("Content-Disposition: attachment; filename=".basename($filename));
	readfile($filename);
?>