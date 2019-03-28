<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'yocab');
$error="";
$success="";
{  
	include 'dbconnection.php';
  $email=$_POST['email'];
  $pswd=$_POST['pswd'];  
  $q1="select email,password from driver where email='$email' and password='$pswd'";  
  $result1=mysqli_query($con,$q1);  
  $row=mysqli_fetch_assoc($result1);
  $_SESSION['email']=$row['email'];  
  $num1=mysqli_num_rows($result1);  
  if($num1==1)  {  
   $_SESSION['email']=$email; 
   header("Location:driver_home.php");  }  
   else  {    $error="INVALID USERNAME OR PASSWORD!!....TRY AGAIN";    
   $success="";  }
}
?>