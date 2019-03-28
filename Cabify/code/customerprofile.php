<?php
include 'dbconnection.php';
$id=$_SESSION['id'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

     <link rel="icon" href="logo3.png" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <style type="text/css">
    h4,h5{display:inline;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript"> $(document).ready(function() {
   
    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
 </script>
   

    <title>Yo Cabs</title>
 
  <style type="text/css">
    
   .head{
        height: 840px;
        background-image: url("landimg3.jpg");
        background-size: cover;
        box-sizing: border-box;
        background-repeat: no-repeat;
        background-position: center center;
        margin-bottom: 30px;
        text-align: center;

        
                                                                                
      }

   

.head h1{

  size: 500px;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
   text-shadow: 0px 4px 3px rgba(0,0,0,0.4),

                 0px 8px 3px rgba(0,0,0,0.1),

                 0px 18px 23px rgba(0,0,0,0.1); 

  letter-spacing: 5px;
   display: inline-block;
        color: white;



}


      .head p{
        font-size: 28px;
        padding-left: 13px;
        color: white;
        
      }

      .head img{
        width: 120px;
        height: 120px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 90px;
        margin-bottom: 5px;

      }

      .mybtn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

   .mybtn span:after {
    content: '\00bb';
   position: absolute;
    opacity: 0;
   top: 0;
    right: -20px;
    transition: 0.5s;
 }

      .mybtn:hover span {
      padding-right: 25px;
  }

   .mybtn:hover span:after {
  opacity: 1;
  right: 0;
}

  </style>


  </head>
  <body>
   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="logo3.png" width="30" height="30" class="d-inline-block align-top" ><strong> YO CABS</strong></a>
</nav>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item ">
        <a class="nav-link" href="#"><i class="fas fa-home"></i><strong> HOME <span class="sr-only"></span></strong></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-globe"></i></i></i><strong> ABOUT</strong></a>
      </li>
      
    </ul>

   
    
  </div>
</nav>


<div class="head ">

  
<div class="container bootstrap snippet">
    <div class="row">

    </div>
    <div >

              

  
        <?php 
        $q1="select image from customer where userid='$id'";
        $result1=mysqli_query($con,$q1);
        $row=mysqli_fetch_assoc($result1);

     
        
        echo '<img src="'.$row['image'].'"width="500" height="100">';

         ?> 
      
            

        
        
      </div><br>


   
          
              
            <table class="table table-bordered" style="width: 100%; height:100%;" >                  
              <tbody>
                <tr>
           
                  <td ><h4>ID</h4></td>
                  <td><h4><?php echo $id; ?> </h4></td> 
                </tr>
                
                  
                  <td><h4>Name : </h4></td>
                  <td><?php
                                $q="select name from customer where userid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['name']; ?> </h5></td>
                </tr>
                <tr>
            
                    <td><h4>Email ID : </h4></td>
                     <td><?php
                                $q="select email from customer where userid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['email']; ?> </h5></td>
                </tr>
               
               
                 <tr>
               
                    <td><h4>Contact Number : </h4></td>
                     <td> <?php
                                $q="select contact_number from customer where userid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['contact_number']; ?> </h5></td>
                </tr>
                 <tr>
        
                    <td><h4>Address : </h4></td>
                     <td><?php
                                $q="select address from customer where userid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['address']; ?> </h5></td>
                </tr>
                 
              </tbody>
                </table>
              
              
             
               
   

    </div><!--/row-->

        <!-- jquery vendor -->
        <script src="assets/js/lib/jquery.min.js"></script>
        <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="assets/js/lib/menubar/sidebar.js"></script>
        <script src="assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="assets/js/lib/bootstrap.min.js"></script>

        <!-- bootstrap -->

        <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
        <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>

        <script src="assets/js/lib/morris-chart/raphael-min.js"></script>
        <script src="assets/js/lib/morris-chart/morris.js"></script>
        <script src="assets/js/lib/morris-chart/morris-init.js"></script>

        <!--  flot-chart js -->
        <script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
        <script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/js/lib/flot-chart/flot-chart-init.js"></script>
        <!-- // flot-chart js -->


        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.france.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/country/jquery.vmap.usa.js"></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/vector.init.js"></script>

        <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="assets/js/lib/weather/weather-init.js"></script>
        <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!-- scripit init-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   
  </body>
</html>