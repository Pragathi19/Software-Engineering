<?php

$con=mysqli_connect('localhost','root','panchapasha123');
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
     $q2="select driverid from driver where email='$email'"; 

  $result2=mysqli_query($con,$q2);  
  $row=mysqli_fetch_assoc($result2);

  $_SESSION['id']=$row['driverid']; 
   header("Location:driver_home.php");  }  
   else  {    $error="INVALID USERNAME OR PASSWORD!!....TRY AGAIN";    
   $success="";  }
}
?>s