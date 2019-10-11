<?php
	$con = mysql_connect("localhost","root","") or die('Connection Problem');
	mysql_select_db("demo",$con) or die('Database not Conn.');
	$id=$_REQUEST['edit'];
?> 
<?php
	$fetch="Select * from demo_master where id='$id'";
	$m=mysql_query($fetch);
	$d=mysql_fetch_array($m);
?>
<html>
<head>
<title>Database Connectivity Example</title>
</head>
<form method="post" action="edit.php?edit=<?php echo $d['id']; ?>" name="comboForm" enctype="multipart/form-data" >
	<center>
	<table border=1>
                <tr>
                      <td>Name:</td>
                      <td><input type="text" name="txtname" value="<?php echo $d['name']; ?>"/></td>
                </tr>
                <tr>
                      <td>City:</td>
                      <td><input type="text" name="txtcity" value="<?php echo $d['city']; ?>" ></td>
                </tr>
                <tr>
                      <td>
                          <input type="submit" name="Edit" value="Edit"></td>
                      <td> <input type="reset" name="Reset" value="Reset">
                      </td>
                </tr> 
	</table>
	</center>
</form>
</html>
<?php
if(isset($_POST['Edit']))
{
	$name=($_POST['txtname']);
	$city=($_POST['txtcity']);

	$up="Update demo_master set name='$name',city='$city' where id=".$id;
	$g=mysql_query($up);
	header("location:index.php");
 }
?> 