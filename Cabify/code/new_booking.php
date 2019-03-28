<?php
//session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'yocab');
$_SESSION["identity"]="CUSTOMER";
$error="";
$success="";
{  
  include 'dbconnection.php';

  $pickup=$_POST['pickup'];
  $dest=$_POST['destination'];
  $date=$_POST['date'];
  $time=$_POST['time']; 
  $ac= $_POST['ac'];
  $cabtype= $_POST['cabtype'];
  // $time=substr($time,0,-1);
  $datetime=$date." ".$time;
  $q2="select cab_number from cab where type='$cabtype' and ac='$ac'";
  //echo $q2;
  $result2=mysqli_query($con,$q2);
  if($result2)
  {
    $count = mysqli_num_rows($result2); 
    //echo " ".$count;
    //$result->close();
    if($count!=0)
    {
      $row = mysqli_fetch_row($result2);
      $cab_n=$row[0];
      $id=$_SESSION['id'];
      $q1="insert into trip(trip_time,userid,cab_number,destination,pickup) values('$datetime','$id','$cab_n','$dest','$pickup')"; 
      echo $q1; 

      $result1=mysqli_query($con,$q1); 
      // echo $result1;
      if($result1)  
      { 
        $_SESSION['email']=$email;  
        header("Location:payment1.php");  
      }  
      else  
      {    
        echo 'Could not run query2: '; 
      }
    }
    else
    {
      echo "NO CABS AVAILABLE..TRY AGAIN!!!";
      //$success=""; 
    }
    
    
  }
  else{
      echo 'Could not run query1: ' . mysql_error(); 
  }
   
}
?>