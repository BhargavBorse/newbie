<?php

	$enrollErr = $nameErr = $courseErr = $semErr = $lresultErr = "";
	$cgpaErr = $addErr = $cityErr = $pinErr = $noErr = $emailErr = "";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["enroll"]))
		{
			$enrollErr = "Enrolment No is required";
		}
		else
		{
			$enroll = trim($_POST["enroll"]);
			if(!preg_match("/^(([A-Za-z]){1,1}(|-)([0-9]){4,4})$/",$enroll))
			{
				$enrollErr = "Enter in this format e.g A1234";
			}
		}
		
		
		if(empty($_POST["name"]))
		{
			$nameErr = "Name is required";
		}
		else
		{
			$name = trim($_POST["name"]);
			if(!preg_match("/^[a-zA-Z]*$/",$name))
			{
				$nameErr = "Only letter and whitespace allow";
			}
		}
		if(empty($_POST["course"]))
		{
			$courseErr = "Course is required";
		}
		if(empty($_POST["sem"]))
		{
			$semErr = "Semester is required";
		}
		if(empty($_POST["lresult"]))
		{
			$lresultErr = "Last Result is required";
		}
		if(empty($_POST["cgpa"]))
		{
			$cgpaErr = "CGPA is required";
		}
		else
		{
			$cgpa = trim($_POST["cgpa"]);
			if(!preg_match("/^[0-9.]{3,5}$/",$cgpa))
			{
				$cgpaErr = "CGPA must be in floating number";
			}
		}
		if(empty($_POST["address"]))
		{
			$addErr = "Address is required";
		}
		if(empty($_POST["city"]))
		{
			$cityErr = "City is required";
		}
		else
		{
			$city = trim($_POST["city"]);
			if(!preg_match("/^[a-zA-Z]*$/",$city))
			{
				$cityErr = "City must be in alphabet";
			}
		}
		if(empty($_POST["pincode"]))
		{
			$pinErr = "Pincode is required";
		}
		else
		{
			$pincode = trim($_POST["pincode"]);
			if(!preg_match("/^[0-9]{6}$/",$pincode))
			{
				$pinErr = "Only number allowed and max 6 number";
			}
		}
		if(empty($_POST["contactno"]))
		{
			$noErr = "Contact No is required";
		}
		
		else
		{
			$contactno = trim($_POST["contactno"]);
			if(!preg_match("/^[0-9]{10}$/",$contactno))
			{
				$noErr = "Only number allowed and max 10 number";
			}
		}
		if(empty($_POST["email"]))
		{
			$emailErr = "Email is required";
		}
		else
		{
			$email = trim($_POST['email']);
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$emailErr = "Enter in this format e.g abc@gmail.com";
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regular Expression</title>
    
    <style>
        body{
            background-image: url(erez-attias-58871-unsplash.jpg);
        }
        table{
            width: 40%;
            height: 100px;
            background-color: white;
            color: black;
            font-family: 'Times New Roman', Times, serif;
            margin-top: 5%;
        }
    </style>
	</head>
	<body>
	<form action="" method="POST" style="margin-top:10%;">
		<center>
		<table border=1>
			<tr>
				<td><span style="color:red;"> * Required Fields</span></td>
			</tr>
			<tr>
				<td>Enrollment No</td>
					<td><input type="text" name="enroll" placeholder="Enter Your Enrollment No">*<span style="color:red;"><?php echo $enrollErr; ?></span></td>
			</tr>
			<tr>
				<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Your Name">*<span style="color:red;"><?php echo $nameErr; ?></span></td>
			</tr>
			<tr>
				<td>Course</td>
				<td>
					<select name="course">
						<option value="">--Select Any--</option>
						<option value="BCA">BCA</option>
						<option value="MCA">MCA</option>
					</select>*<span style="color:red;"><?php echo $courseErr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Semester</td>
				<td>
					<select name="sem">
						<option value="">--Select Any--</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>*<span style="color:red;"><?php echo $semErr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Last result</td>
					<td><input type="text" name="lresult" placeholder="Enter Your Last Result">*<span style="color:red;"><?php echo $lresultErr; ?></span></td>
			</tr>
			<tr>
				<td>CGPA</td>
					<td><input type="text" name="cgpa" placeholder="Enter Your CGPA">*<span style="color:red;"><?php echo $cgpaErr; ?></span></td>
			</tr>
			<tr>
				<td>Address</td>
					<td><textarea name="address" ></textarea>*<span style="color:red;"><?php echo $addErr; ?></span></td>
			</tr>
			<tr>
				<td>City</td>
					<td><input type="text" name="city" placeholder="Enter Your City">*<span style="color:red;"><?php echo $cityErr; ?></span></td>
			</tr>
			<tr>
				<td>Pincode</td>
					<td><input type="text" name="pincode" placeholder="Enter Your Pincode">*<span style="color:red;"><?php echo $pinErr; ?></span></td>
			</tr>
			<tr>
				<td>Contact No</td>
					<td><input type="text" name="contactno" placeholder="Enter Your Contact No">*<span style="color:red;"><?php echo $noErr; ?></span></td>
			</tr>
			<tr>
				<td>Email</td>
					<td><input type="mail" name="email" placeholder="Enter Your Email">*<span style="color:red;"><?php echo $emailErr; ?></span></td>
			</tr>
			
			<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td><input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
		</center>
	</form>
	</body>
</html>