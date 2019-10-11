<?php

$db=mysqli_connect('localhost','root','','master_nbh') or die("Error 404 not found");

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $enrollno=$_POST['enroll_no'];
      $password=$_POST['password'];

      $z="select*from mech_profile where enroll_no='$enrollno' AND password='$password'";
      if(mysqli_num_rows(mysqli_query($db,$z))==1)
      {
        echo "Successfully Submitted.";
        header("location:index.php");
      }
      else {
        echo "Incorrect Enrollment Number or Password";
      }
    }
 ?>
