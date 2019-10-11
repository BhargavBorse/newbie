<html>
<head>
	<title>Practical 15 A</title>
</head>
<body>
	<form method="post">
		<center>
		<table>
			<tr>
				<td>Enter Value 1</td>
				<td><input type="text" name="num1"></td>
			</tr>
			<tr>
				<td>Enter Value 2</td>
				<td><input type="text" name="num2"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
				<td><input type="reset" name="reset" value="reset"></td>
			</tr>
		</table>
	</center>
	</form>
</body>
</html>
<?php
	if(isset($_POST["submit"]))
	{
		$val1=$_POST['num1'];
		$val2=$_POST['num2'];
		if($val1!=$val2)
		{
			trigger_error("Both value are not same");
		}	
		else
		{
			echo "both are same";
		}
	}	
?>