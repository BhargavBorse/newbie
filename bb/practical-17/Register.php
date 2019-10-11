<?php
	$name_error="";
	$age_error="";
	$address_error="";
	$n=$_POST['name'];
	$a=$_POST['age'];
	$ad=$_POST['address'];
	
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(empty($_POST['name']))
		{
			$name_error="*Name field can't be empty";
		}
		else
		{
			$nm=test_input($_POST['name']);
			if(!preg_match('/^[a-zA-Z ]*$/',$nm))
			{
				$name_error="*Must only contain letters and whitespace";
		 	}
			else
			{
				$name_error=" ";
			}
		}
		if(empty($_POST['age']))
		{
			$age_error="*Age field can't be empty";
		}
		else
		{
			if ($_POST['age']<18)
			{
				$age_error="Age Must Greater Than 18";	
			}
			else
			{
				$age=test_input($_POST['age']);
			}
		}
		if(empty($_POST['address']))
		{
			$address_error="*Address field can't be empty";
		}
		else
		{
			$ad=test_input($_POST['address']);
			if(!preg_match('/[A-Za-z0-9]/',$ad))
			{
				$address_error="*Only contain alphanumeric";
			}
			else
			{
				$address_error=" ";
			}
		}

	}
	function test_input($data) 
	{   
		$data = trim($data);   
		return $data; 
	}
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style>
		body{
			background-image: url(926968.png);
			color: white;
			font-family:verdana;
            font-size: 10pt;
		}
		input[type=text] {
				width: 50%;
				padding: 9px 20px;
				margin: 8px 0;
				margin-left: 13%;
				display: inline-block;
				border: 2px solid ;
				border-radius:8px;
					
			}
		table{
			width: 30%;
		}
		#button2{
	        width:100px;
	        height:35px;
	        left:750px;
	        top:625px;
	        background-color: black;
	        font-family:verdana;
	        font-size:18px;
	        color: white;
	        border-radius:5px 5px 5px 5px;
	        margin-left: 2%;
	        border-style: none;
	        cursor:pointer;	
        }
	</style>
</head>
<body>
	<center>
	<div id="box">
	<br><br><br>
		<h1>Register </h1>
		<form method="post" action="">
			<table border="1" style="background-color: white; color: black;">
				<tr>
					<th>Name</th>
					<td><input type="text" name="name" class="size form-control"></td>
					<td><span id="error"><p>
						<?php
							echo $name_error;
					 	?>
					 </p></span></td>
				</tr>
				<tr>
					<th>Age</th>
					<td><input type="text" name="age" class="size form-control"></td>
					<td><span id="error"><p>
						<?php 
							echo $age_error;
						?>
					</p></span></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><input type="text" name="address" class="size form-control"></td>
					<td><span id="error"><p>
						<?php 
							echo $address_error;
						?>
					</p></span></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" id="button2" name="submit" value="Submit" class="btn btn-primary">
						<input type="reset" id="button2" name="clear" value="Clear" class="btn btn-warning">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<br><br><br>
	<div id="box">
		<?php include("class.php"); ?>
		<?php
			$regis = new register($n,$a,$ad);

			echo "<span style='font-size:20px; align:left;'>";
	    	echo "<table border='1' style='background-color: white; color: black;'>";
				echo "<tr>";
					echo "<th>";
						echo "Name";
					echo "</th>";
					echo "<td style='padding: 10px;'>";
						echo $regis->show_name();
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "Age";
					echo "</th>";
					echo "<td style='padding: 10px;'>";
						echo $age;
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<th>";
						echo "Address";
					echo "</th>";
					echo "<td style='padding: 10px;'>";
						echo $regis->show_address();
					echo "</td>";
				echo "</tr>";
			echo "</table>";
			echo "</span>";
		?>
	</div>
	</center>
</body>
</html>

