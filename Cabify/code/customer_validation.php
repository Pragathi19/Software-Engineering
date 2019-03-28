<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'yocab');
$_SESSION["identity"]="CUSTOMER";
$error="";
$success="";
{  
	include 'dbconnection.php';
  $email=$_POST['email'];
  $pswd=$_POST['pswd'];  
  $q1="select email,password from customer where email='$email' and password='$pswd'";  

  $result1=mysqli_query($con,$q1);  
  $row=mysqli_fetch_assoc($result1);  
  $num1=mysqli_num_rows($result1);  
  if($num1==1)  { 
  $_SESSION['email']=$email;
   $q2="select userid from customer where email='$email'"; 

  $result2=mysqli_query($con,$q2);  
  $row=mysqli_fetch_assoc($result2);

  $_SESSION['id']=$row['userid']; 
   header("Location:customer_home.php");}    
   else  {    $error="INVALID USERNAME OR PASSWORD!!....TRY AGAIN";    
   $success="";  }
}
?>