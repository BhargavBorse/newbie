<?php

$db=mysqli_connect('localhost','root','','shop_master') or die("Error 404 not found");

if(isset($_POST['save']))
{


    $bname=$_POST['brand_name'];
    $q="SELECT * FROM brand_master where brand_name='$bname'";
    $r= mysqli_query($db, $q);
    while($row=mysqli_fetch_array($r))
                {
                    $bid=$row['brand_id'];
                }
    $pname=$_POST['prod_name'];
    $pcolor=$_POST['prod_color'];
    $pprice=$_POST['prod_price'];
    $pdesc=$_POST['prod_desc'];
    $query="INSERT INTO `product_master`(`brand_id`, `prod_id`, `prod_name`, `prod_color`, `prod_price`, `prod_desc`) VALUES ('$bid',null,'$pname','$pcolor','$pprice','$pdesc')";
    $result=mysqli_query($db,$query);
    if($result){
    header('location:product.php');
    }
}
?>