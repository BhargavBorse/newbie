<?php
	$con = mysql_connect("localhost","root","") or die('Connection Problem');
	mysql_select_db("demo",$con) or die('Database not Conn.');
?> 
<html>
	<head>
		<title>Database Connectivity Example with Upload & Down Load</title>
	</head>
	<body>
		<form method="POST" action="insert.php" name="comboForm" enctype="multipart/form-data" >
		<center>
			<table border=1>
				<tr>
					<td> Name : </td>
					<td> <input type="text" required="true" name="txtname" />
				</tr>
				<tr>
					<td> City : </td>
					<td> <input type="text" required="true" name="txtcity" />
				</tr>
				<tr>
                      			<td>File Upload:</td>
                      			<td><input type="file" name="uploaded" required="true" value=""></td>
                		</tr> 
                		<tr>
                              <td><input type="submit" name="submit" value="Submit"></td>
                      			<td> <input type="reset" name="Reset" value="Reset"></td>
                		</tr> 
			</table><br/><br/><br/>
			<table border="1">
            			<tr><td>Name</td><td>City</td><td>Image</td><td>Edit</td><td>Delete</td><td>View</td><td>Download</td></tr>
             			<?php
	  				$fetch="select * from demo_master";
  					$m=mysql_query($fetch);
					while($d=mysql_fetch_array($m))
  					{
						?>
						<tr>
               						<td><?php echo $d['name']; ?></td>
        						<td><?php echo $d['city']; ?></td>
        					        <td><img src="<?php echo $d['img']; ?>" height="100" width="100"/></td>
        						<td><a href="edit.php?edit=<?php echo $d['id']; ?>">Edit</a></td>
        						<td><a href="insert.php?delete=<?php echo $d['id']; ?>">Delete</a></td>
								<td><a href="<?php echo $d['img']; ?>">View</a></td>
								<td><a href="download.php?file=<?php echo $d['img']; ?>">Download</a></td>
						</tr>
 						<?php
  							}
						?>
						</tr>       
        		</table>
		</center>
		</form>
	</body>
</html>