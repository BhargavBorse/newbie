<html>
<head>
	<title>Practical 15 B</title>
</head>
<body>
	<form method="post">
		<center>
		<table>
			<tr>
				<td>Enter Number 1</td>
				<td><input type="text" name="num1"></td>
			</tr>
			<tr>
				<td>Enter Number 2</td>
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
		try
		{
			if($val1<1)
			{
				trigger_error("value 1 is less then 1.");
			}
			elseif ($val2<1)
			{
				trigger_error("value2 is less then 1.");
			}
			elseif($val1!=$val2)
			{
				trigger_error("Both value are Diffrent");
			}
			else
			{
				echo "both are same";
			}
		}
		catch(exception $e)
		{
			$e=getmessage("Error");
		}
	}	
?>