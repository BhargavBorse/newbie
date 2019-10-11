<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cookies</title>

	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			border-radius:8px;	
			background-image: url(926968.png);
			background-repeat: no-repeat;
 			background-size: cover;
		}
		fieldset{
			width:50%;
			border-radius:8px;
			border-color:black;
			background-color: rgba(255, 255, 255, 0.8);
			margin-left: 25%;
			margin-top: 10%; 
		}
	</style>
</head>
<body>
		<fieldset>
		<?php
			echo "<center> <h1>Cookies Successfully Saved</h1>  </br>";
			echo "<b>Your Username is: </b>",$_COOKIE['username'], "</br>";
			echo "<b>Your Password is: </b>",$_COOKIE['password'], "</center>";
		?>
		<br><br>
		</fieldset>
</body>
</html>

