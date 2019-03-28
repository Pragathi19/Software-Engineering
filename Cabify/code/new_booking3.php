<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'yocab');
$_SESSION["identity"]="CUSTOMER";
$error="";
$success="";
{  
  include 'dbconnection.php';
  $fare=$_POST['fare'];
  $id=$_SESSION['id'];
  $q2="update trip set fare='$fare' where userid='$id'"; 
  echo $q2;
  $result1=mysqli_query($con,$q2);
  // $num1=mysqli_affected_rows($con);
  if($result1)
  {

    header("Location:new_booking.html");
  }
  else
   {
  header("Location:new_booking.html");
   }
}
?>