<?php

$db=mysqli_connect('localhost','root','','shop_master') or die("Error 404 not found");

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $brand_name=$_POST['brand_name'];
    $brand_desc=$_POST['brand_desc'];
    
    $k = "INSERT INTO brand_master (brand_name, brand_desc) VALUES ('$brand_name','$brand_desc')";
    
    if(mysqli_query($db,$k))
    {
        // echo "Done";
        header("location:brand.php");            
    }
    else {
        echo "error ". mysqli_error($db);
    }
}
?>

<?php
    $db=mysqli_connect('localhost','root','','shop_master') or die("Error 404 not found");

     $id=$_REQUEST['delete'];
    //  echo $id;
    $del="DELETE from brand_master where brand_id = '$id'";
    
    if(mysqli_query($db,$del))
    {
        // echo "Done";
        header("location:brand.php");             
    }
    else {
        echo "error ". mysqli_error($db);
    } 
 	// header("location:brand.php");
?>