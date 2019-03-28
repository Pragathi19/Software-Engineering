<?php
session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'yocab');



	$cab_no=$_POST['cab_no'];
	$cab_type=$_POST['cab_type'];
	$availability=$_POST['availability'];
	$AC=$_POST['AC'];
	$q="select * from cab where cab_no='$cab_no'";
	$result=mysqli_query($con,$q);
	
	if($result==0){


	$q1="insert into cab(cab_number,type,availability,ac) values('$cab_no','$cab_type','$availability','$AC')";
	$result1=mysqli_query($con,$q1);
	$num1=mysqli_affected_rows($con);
	if($num1==1)
	{

		header("Location:cab.php");
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