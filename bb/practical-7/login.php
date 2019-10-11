<html>
	<head>
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
				width:30%;
				border-radius:8px;
				border-color:black;
				background-color: rgba(255, 255, 255, 0.8);
				margin-left: 33%;
			}
			input[type=text], input[type=password] {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 2px solid ;
				border-radius:8px;	
			}
			button {
				background-color: #ffa41f;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 100%;
				border-radius:8px;	
			}
			button:hover {
				text-transform: capitalize;
				background: #ffa41f;
				color: #FFFFFF;
				padding: 1em 2em;
				letter-spacing: 2px;
				border: none;
				border: 2px solid #ffa41f;
				font-size: .9em;
				outline: none;
				transition: 0.5s all;
				-webkit-transition: 0.5s all;
				-moz-transition: 0.5s all;
				-o-transition: 0.5s all;
				-ms-transition: 0.5s all;
				text-transform: uppercase;
				width: 100%;
				font-weight: 600;
				margin-top: 1.5em;
				-webkit-appearance: none;
			}
		</style>
	</head>
<?php
	$username="username";
	$password="password";
	if(isset($_REQUEST['login']))
	{
		$username=$_REQUEST["username"];
		$password=$_REQUEST["password"];
		
		setcookie('username',$username);
		setcookie('password',$password);
		header("location:cookie.php");
	}
?>
<body>
	<br><br><br><br><br>
	<fieldset><h1><u> <center> Login to your Account </center></u></h1>
		<form method="POST">
			Username <input type="text" name="username"><br>
			Password <input type="password" name="password"><br>
			<button type="submit" value="submit" name="login">LOGIN</button><br>
			<br>
		</form>
	</fieldset>
</body>
</html> 