<?php
	$user="";
	$pwd="";
	$user_error="";
	$pwd_error="";
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(empty($_POST['user'])||empty($_POST['pwd']))
		{
			"<script type='text/javascript'> alert('Please Filled all details!!!'); </script>";
		}
		else
		{
			$user="bb";
			$pwd="bb";
			if($_POST['user']===$user && $_POST['pwd']===$pwd)
			{
				header('Location:Register.php');
			}
			else
			{
				if($_POST['user']!==$user && $_POST['pwd']!==$pwd)
				{
					$user_error="*Invalid Username!!!";
					$pwd_error="*Invalid Password!!!";
				}
				elseif($_POST['user']!==$user)
				{
					$user_error="*Invalid Username!!!";
				}
				
				elseif($_POST['pwd']!==$pwd)
				{
					$pwd_error="*Invalid Password!!!";
				}
			}
		}
	}
?><!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center>
	<div id="box">
	<h1>Login</h1>
	<div>
		<form action="" method="post">
			<table>
				<tr>
					<th>Username</th>
					<td><input type="text" name="user" class="form-control size" autofocus="yes"></td>
					<td><span id="error"><p><?php echo "$user_error"; ?></p></span></td>
				</tr>
				<tr>
					<th>Password</th>
					<td><input type="password" name="pwd" class="form-control size"></td>
					<td><span id="error"><p><?php echo "$pwd_error"; ?></p></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" class="btn btn-success"></td>
				</tr>
			</table>
		</form>
	</div>
	</div>
	</center>
</body>
</html>
