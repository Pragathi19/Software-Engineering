<?php
session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'yocab');



	$name=$_POST['name'];
	$driverid=$_POST['driverid'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact_number=$_POST['contact_number'];
	$password=$_POST['password'];
	$image=$_POST['image'];
	$q="select * from driver where driverid='$driverid'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	
	if($num==0){


	$q1="insert into driver(name,email,address,contact_number,image,password,driverid) values('$name','$email','$address','$contact_number','$image','$password','$driverid')";
	$result1=mysqli_query($con,$q1);
	$num1=mysqli_affected_rows($con);
	if($num1==1)
	{

		header("Location:drv.php");
	}
	else
	 {
 	echo "error";
	 }
 	}
	else
	{
		echo "record already exist";
	}






?>