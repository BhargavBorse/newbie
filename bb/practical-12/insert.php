<?php

$db=mysqli_connect('localhost','root','','demo') or die("Error 404 not found");

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $target = "upload";
    $target1 = $target.basename($_FILES['uploaded']['name']);
    move_uploaded_file($_FILES['uploaded']['tmp_name'], $target1);
    
    $name=$_POST['txtname'];
    $city=$_POST['txtcity'];
    
    $k = "INSERT INTO master (name, city, img) VALUES ('$name','$city', '$target1')";
    
    if(mysqli_query($db,$k))
    {
        // echo "Done";
        header("location:demo.php");            
    }
    else {
        echo "error ". mysqli_error($db);
    }
}
?>

<?php
    $id= $_REQUEST['delete'];
    $del = "DELETE FROM master WHERE id='$id'";

    $h = mysqli_query($db, $del);
?>