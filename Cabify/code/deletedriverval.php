<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'yocab');
$error="";
$success="";
{  
	include 'dbconnection.php';
  $driverid=$_POST['driverid']; 
  $q1="delete from driver where driverid='$driverid'";  
  //echo $q1;
  $result1=mysqli_query($con,$q1);  
  
  // $num1=mysqli_affected_rows($result1);  
  if($result1==1)  {   
   header("Location:drv.php");  }  
   else  {    $error="INVALID USERNAME OR PASSWORD!!....TRY AGAIN";    
   $success="";  }
}
?>