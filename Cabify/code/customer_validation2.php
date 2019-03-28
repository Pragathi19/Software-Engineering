<?php
//session_start();
$con=mysqli_connect('localhost','root','panchapasha123');
mysqli_select_db($con,'yocab');
$_SESSION["identity"]="CUSTOMER";
$error="";
$success="";
{  
	include 'dbconnection.php';
  $email=$_POST['email'];
  $name=$_POST['uname'];
  $password=$_POST['password']; 
  $address1= $_POST['address1'];
  $address2= $_POST['address2'];
  $phone= $_POST['phone'];
  $city= $_POST['city'];
  $state= $_POST['state'];
  $zip= $_POST['zip'];
  $addr=$address1." ".$address2." ".$city." ".$state." ".$zip;
  $q1="insert into customer(email,contact_number,address,name,password) values('$email','$phone','$addr','$name','$password');";  
  echo $q1;
  $result1=mysqli_query($con,$q1);  
  echo " ".$result1;
  if($result1==1)
  {
   // $num1=mysqli_num_rows($result1);
      $_SESSION['email']=$email;  
      header("Location:customer_home.php");  
  }  
  else 
  {
    echo 'Could not run query: ' . mysql_error();
  }
}
?>