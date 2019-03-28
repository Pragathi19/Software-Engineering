
<?php
include 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="icon" href="logo3.png" type="image/gif" sizes="16x16">

  <!--font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   
<!--Animate.css-->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 

    <title>Yo Cabs</title>

    <style type="text/css">
      
      .head{
        height: 700px;
        background-image: url("11.jpg");
        background-size: cover;
        box-sizing: border-box;
        background-repeat: no-repeat;
        background-position: center center;
        margin-bottom: 30px;
        

      }

      .head h1{
        padding-top: 30px;
        padding-left: 10px;
        display: inline-block;
        color: white;
      }

      .head p{
        font-size: 28px;
        padding-left: 13px;
        color: white;
        
      }

      .location{
        margin-right: 30px;
        margin-top: 30px;
        display: inline-block;

      }

      .logo{
        margin-top: 15px;
        margin-bottom: 15px;

      }


     .footicon{
      float: right;
      display: inline-block;
      size: 20px;
      padding-right: 20px;
     }

div.modal-content {
  margin: 30px;
background-color: black;
  border: 1px solid black;
  opacity: 0.8;
 /* For IE8 and earlier */
}
     

     

    </style>

  </head>
  <body >
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="landing.html" >
    <img src="logo3.png" width="30" height="30" class="d-inline-block align-top" ><strong>YO CABS</strong></a>
</nav>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" id="pass" href="admin_home.php"><i class="fas fa-home"></i><strong> HOME <span class="sr-only">(current)</span></strong></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="# "><i class="fas fa-user"></i><strong> PROFILE</strong></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="aboutUs.html"><i class="fas fa-globe"></i><strong> ABOUT</strong></a>
      </li>

       <li class="nav-item ">
        <a class="nav-link" href="review.html"><i class="fas fa-comments"></i><strong> REVIEW </strong></a>
      </li>
      
    </ul>

    

  <a href="landing.php"><button type="submit" class="btn btn-primary mb-2">Logout</button></a>

   



    
  </div>
</nav>

 <div class="head ">




  <p class="bounceIn animated" style="text-align: center;  font-size: 75px"><font color="silver">Experience the best Rides in your city.</p>

   <a href="viewdriver.php"><button type="button" class="btn btn-danger btn-lg mybtn" style="vertical-align:middle; margin-top: 430px; margin-left: 725px; width: 200px; height: 100px;"><span> View Driver Details </span></button></a>
   <button type="button" class="btn btn-danger btn-lg mybtn" style="vertical-align:middle; margin-top: 430px; margin-left:10px; width: 200px; height: 100px;" data-toggle="modal" data-target="#exampleModalCenter"><span> Add Drivers </span></button>
    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Sign Up</button> -->
<!-- Modal 1-->

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" >
       
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Drivers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="addcab" action="adddriver.php" method="post">

        <!-- Sign up page-->

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCarNumber">Driver-Name</label>
      <input type="text" class="form-control" id="Driver-Name" name="name" placeholder="Driver-Name">
    </div>


    <div class="form-group col-md-6">
      <label for="inputCarNumber">Driver-ID</label>
      <input type="number" class="form-control" id="Driver-ID" name="driverid" placeholder="Driver-ID">
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCarNumber">Password</label>
      <input type="Password" class="form-control" id="Password" name="password" placeholder="Password">
    </div>

    <div class="form-group col-md-6">
      <label for="inputCarNumber">Contact</label>
      <input type="number" class="form-control" id="Contact" name="contact_number" maxlength="10" placeholder="Contact">
    </div>

   
  </div>


    <div class="form-group ">
      <label for="inputCarNumber">Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="address">
    </div>

     <div class="form-group ">
      <label for="inputCarNumber">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="email">
    </div>



    <div class="form-group">
      <label for="inputCarNumber">Profile-Pic</label><br>
      <input type="file" name="image" class="text-center center-block file-upload" placeholder="Profile-Pic">
    </div>
    <br>

    


    

  
  
  

  <!-- Sign up page end -->

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
      </div>
      
    
  
    </div>
  </div>
</div>
<!--Modal 1 End-->

   <a href="deletedriver.php"><button type="button" class="btn btn-danger btn-lg mybtn" style="vertical-align:middle; margin-top: 430px; margin-left:10px; width: 200px; height: 100px;"><span> Delete Driverss </span></button></a>

  </div>









<!-- Footer starts-->

<div class="jumbotron jumbotron-fluid" style="background-color: #282C35; color: white;">
  <div class="container">
    <div class="row">
      <diV class="col-md-4">
        <h5>Popular Routes</h5>
      </diV>
        <diV class="col-md-4">
            <div class="list-group">
                <h5>Northern India</h5>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Chandigarh Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Agra Outstation Cabs</a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Jaipur Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Shimla Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Nainital Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Indore Outstation Cabs </a></p>
            </div>
      </diV>
        <diV class="col-md-4">
            <div class="list-group">
                <h5>South India</h5>
                <p><a href="#" style="text-decoration: none;"class="text-light">Manglore to Bangalore Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Manglore to Mysore Outstation Cabs</a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Manglore to Chennai Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Manglore to Mumbai Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Manglore to Trissur Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Manglore to Hyderabad Outstation Cabs </a></p>
            </div>
      </diV>
     </div>
      <hr>
  </div>
</div>



</font>
<div class="last">
 &copy; YO CABS 2018. All Rights Reserved.
  <div class="footicon" style="margin-bottom: 10px;">
    <a href="https://www.facebook.com/profile.php?id=100012159498460" target="_blank"><i style="font-size:28px; margin-right: 10px; " class="fa">&#xf082;</i></a>
    <a href=""><i style="font-size:28px; margin-right: 10px;" class="fa">&#xf099;</i></a>
    <a href=""><i style="font-size:28px;" class="fa">&#xf16d;</i></a>
 </div>

</div>


<!--Footer Ends-->

   <script type="text/javascript">
    
     $("#pass").fadeIn();
   

   </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   

  </body>
</html>
