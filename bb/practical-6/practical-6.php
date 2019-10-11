<html>
<head>
	<title>Practical-6</title>
    <link rel="stylesheet" href="practical-6.css">

</head>
<body>
	<center>
	<form method="POST" action="#">
		<table class="table-main" border="3px">
			<tr>
				<td><b>String 1:</b></td>
				<td><input type="text" name="str1" id="text_main" size="26" required></td>
			</tr>
			<tr>
				<td><b>String 2:</b></td>
				<td><input type="text" name="str2" id="text_main" size="26" required></td>
			</tr>
			<tr>
				<td><b>Option:</b></td>
				<td><select id="dropdown" name="option">
				<option value="0">---Select---</option>				
				<option value="1">Find-Length</option>
				<option value="2">Concat Both the String</option>
				<option value="3">Convert String to Lower</option>
				<option value="4">Convert String to Upper</option>
				<option value="5">ASCII value of first char of string</option>
				<option value="6">Count First word of String</option>
				<option value="7">Convert firstcharacter to Lower</option>
				<option value="8">Convert firstcharacter to Upper</option>
				<option value="9">Compare both the String</option>
				<option value="10">Sub String</option>
				<option value="11">String Position</option>
				<option value="12">String Reverse Position</option>
				<option value="13">String Case Compare</option>
				</td>
			</tr>
			<tr align="center">
				<td><input type="reset" name="reset" id="button2" value="Reset"></td>
				<td><input type="submit" name="submit" id="button2" value="Result"></td>
			</tr>
		</table>
		<table border="3px">
			<tr>
				<th>String 1</th>
				<th>String 2</th>
				<th>Operation</th>
				<th>Result</th>
			</tr>
		</table>
	</form>	
	</center>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$string_1=$_POST['str1'];
		$string_2=$_POST['str2'];
		$opt=$_POST['option'];
		
		switch($opt){
			case 1:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						Find length
					</td> 
					<td>
						$string_1=".strlen($string_1)." &<br> $string_2=".strlen($string_2)."
					</td>
				</tr>";
				break;
			case 2:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						Concat both string
					</td> 
					<td>".$string_1,$string_2."
					</td>
				</tr>";
				break;
			case 3:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						Convert String to Lower
					</td> 
					<td>
						$string_1= ".strtolower($string_1)." &<br> $string_2=".strtolower($string_2)."
					</td> 
				</tr>";
				break;
			case 4:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						Convert String to Upper
					</td> 
					<td>
						$string_1= ".strtoupper($string_1)." &<br> $string_2=".strtoupper($string_2)."
					</td> 
				</tr>";
				break;
			case 5:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						ASCII value of first char of String
					</td> 
					<td>
						$string_1= ".ord($string_1)." &<br> $string_2=".ord($string_2)."
					</td> 
				</tr>";
				break;
			case 6:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						Count word of the string
					</td> 
					<td>
						$string_1= ".str_word_count($string_1)." &<br> $string_2=".str_word_count($string_2)."
					</td> 
				</tr>";
				break;
			case 7:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						Convert firstcharacter to Lower
					</td> 
					<td>
						$string_1= ".lcfirst($string_1)." &<br> $string_2=".lcfirst($string_2)."
					</td> 
				</tr>";
				break;
			case 8:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						Convert firstcharacter to Upper
					</td> 
					<td>
						$string_1= ".ucfirst($string_1)." &<br> $string_2=".ucfirst($string_2)."
					</td> 
				</tr>";
				break;
			case 9:if(strcmp($string_1,$string_2)==0)
					{		
						$a="Both String are same";				
					}
					else
					{	
						$a="Both are different";
					}
					echo"<tr><td>$string_1</td> <td>$string_2</td> <td>Compare both strings</td> <td>$a</td> </tr>";
				break;
			case 10:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						Sub String
					</td> 
					<td>
						$string_1= ".substr($string_1,1)." &<br> $string_2=".substr($string_2,3)."
					</td> 
				</tr>";
				break;
			case 11:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						String Position
					</td> 
					<td>
						$string_1= ".strpos($string_1,"J")." &<br> $string_2=".strpos($string_2,"T")."
					</td> 
				</tr>";
				break;
			case 12:echo"
				<tr>
					<td>
						$string_1
					</td> 
					<td>
						$string_2
					</td> 
					<td>
						String Reverse Position
					</td> 
					<td>
						$string_1= ".strrpos($string_1,"y")." &<br> $string_2=".strrpos($string_2,"a")."
					</td> 
				</tr>";
				break;
			case 13:if(strcasecmp($string_1,$string_2)==0)
						{
							$a="Your String is Same";
						}
					else
						{
							$a="Your String is Different";
						}
						echo"
							<tr>
								<td>
									$string_1
								</td> 
								<td>
									$string_2
								</td> 
								<td>
									String Case Compare
								</td> 
								<td>
									$a
								</td> 
							</tr>";
				break;
		}
	}
?>