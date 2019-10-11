<?php
	$con = mysql_connect("localhost","root","") or die('Connection Problem');
	mysql_select_db("demo",$con) or die('Database not Conn.');

	if(isset($_POST['submit']))
 	{
 		$target = "upload/"; //Folder Name
 		$target1 = $target . basename( $_FILES['uploaded']['name']) ;
		move_uploaded_file($_FILES['uploaded']['tmp_name'], $target1);
 
		$name=($_POST['txtname']);
     	$city=($_POST['txtcity']);
     
		$k="insert into demo_master(name,city,img) values('$name','$city','$target1')";
		$a=mysql_query($k); 
		header("location:index.php");
	}
?>
<?php
 	$id=$_REQUEST['delete'];
    $del="DELETE from demo_master where id = '$id'";
    $h=mysql_query($del); 
 	header("location:index.php");
?>