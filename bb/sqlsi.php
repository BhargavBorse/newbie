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


//         {
//           if(empty($Email))
// {
//   $errors[] = "you forgot the email";
// }
//   if (empty($Password))
// {
//   $errors[] = "you forgot the password";
//   }
//
// echo "<br> no error in entering data.. <br> proceeding with query";
//
//
//   $retrieve = "SELECT UserName FROM signup where Email = 'Email' AND Password = SHA1('Password')";
//
//   $run = mysqli_query($db,$retrieve) or die("error in query");
//
// if (mysqli_num_rows($run) == 1 )
// {
//  echo "<br> Query run succesfully";
//   $row = mysqli_fetch_array($run, MYSQLI_ASSOC);
//
// return array(true,$row);
//
// $q1= "SELECT UserName FROM signup where Email = '$Email' AND Password = SHA1('$Password') ";
// $q2= "SELECT Password FROM signup where Email = '$Email' AND Password = SHA1('$Password')";
// $Email = @mysqli_query($db, $q1);
// $Password = @mysqli_query($db, $q2);
//
//
//
//
//   setcookie("Email",$Email);
//   header("location : mainhome.php");
//   exit();
//
//
// }
// else {
//   echo "<br> Email and password do not match";
// }

        //}
