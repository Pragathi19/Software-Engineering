<?php
include 'dbconnection.php';
$id=$_SESSION['id'];
?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>National Institute Of Technology - Information Technology</title>




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NITK</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">



        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- Styles -->
        <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
        <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/lib/helper.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index1.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>NITK - IT   </span></a></div>
                    <ul>
                        <li><a href="admin1.php"><i class="ti-user"></i>FACULTY</a></li>
                    </ul>
                    <ul>
                        <li class="label">Main</li>
                        <li><a href="faculty1.php"><i class="ti-calendar"></i>Dashboard </a></li>
                        <li><a href="fprofile.php"><i class="ti-user"></i> Profile</a></li>
                        <li><a href="calender.php"><i class="ti-calendar"></i> Calender </a></li>
                        <li><a href="index1.html"><i class="ti-close"></i> Logout</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>

       
                                <li class="header-icon dib"><span class="user-avatar"><?php echo $_SESSION['name']; ?><i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Faculty</span>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li><a href="fprofile.php"><i class="ti-user"></i> <span>Profile</span></a></li>
                                               
                                                <li><a href="index1.html"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<div class="container bootstrap snippet">
    <div class="row">
        
        <div class="col-sm-2"></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <?php 
        $q1="select profilepic from faculty where facultyid='$id'";
        $result1=mysqli_query($con,$q1);
        $row=mysqli_fetch_assoc($result1);

         ?> 
        
        <h4>Upload a different photo...</h4>
        <form method="post">
        <input type="file" name="file" class="text-center center-block file-upload">
         <button type="submit" name="submit1" class="btn btn-primary">SUBMIT</button>
        </form>
        <?php 
            if(isset($_POST['submit1']))
            {
                $pic=$_POST['file'];
                $q1="update faculty set profilepic='$pic' where facultyid='$id'";
                $result1=mysqli_query($con,$q1);
                $q2="select profilepic from faculty where facultyid='$id'";
                $result2=mysqli_query($con,$q2);
                $row1=mysqli_fetch_assoc($result2);
                echo '<img src="'.$row1['profilepic'].'"class="avatar img-circle img-thumbnail" alt="avatar">';
            }
            else
            {
                 echo '<img src="'.$row['profilepic'].'"class="avatar img-circle img-thumbnail" alt="avatar">';
            }

         ?> 
      
            

        
        
      </div><br>
          
          
          
     <body>          
         
          
        </div><!--/col-3-->
        <div class="col-sm-9">
           <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">View</a></li>
                <li><a data-toggle="tab" href="#messages">Update</a></li>
                
              </ul> 

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              
            <table class="table">                  
              <tbody>
                <tr>
                  <th scope="row"><h4>1</h4></th>
                  <td><h4>ID</h4></td>
                  <td><h4><?php echo $_SESSION['id']; ?> </h4></td> 
                </tr>
                <tr>
                  <th scope="row"><h4>2</h4></th>
                  <td><h4>Name : </h4></td>
                  <td><h4 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $_SESSION['name']; ?> </h4></td>
                </tr>
                <tr>
                  <th scope="row"><h4>3</h4></th>
                  <td><h4>Position : </h4></td>
                  <td><?php
                                $q="select position from faculty where facultyid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['position']; ?> </h5></td>
                </tr>
                <tr>
                     <th scope="row"><h4>4</h4></th>
                    <td><h4>Bank Account Number : </h4></td>
                     <td><?php
                                $q="select accountno from faculty where facultyid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['accountno']; ?> </h5></td>
                </tr>
                <tr>
                     <th scope="row"><h4>5</h4></th>
                    <td><h4>Gender : </h4></td>
                     <td><?php
                                $q="select gender from faculty where facultyid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['gender']; ?> </h5></td>
                </tr>
               
                 <tr>
                     <th scope="row"><h4>6</h4></th>
                    <td><h4>Date Of Birth : </h4></td>
                     <td><?php
                                $q="select dob from faculty where facultyid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['dob']; ?> </h5></td>
                </tr>
                 <tr>
                     <th scope="row"><h4>7</h4></th>
                    <td><h4>Address : </h4></td>
                     <td><?php
                                $q="select address from faculty where facultyid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['address']; ?> </h5></td>
                </tr>
                 <tr>
                     <th scope="row"><h4>8</h4></th>
                    <td><h4>Contact : </h4></td>
                     <td> <?php
                                $q="select mobileno from faculty where facultyid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['mobileno']; ?> </h5></td>
                </tr>
                 <tr>
                     <th scope="row"><h4>9</h4></th>
                    <td><h4>Email Id: </h4></td>
                     <td><?php
                                $q="select emailid from faculty where facultyid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['emailid']; ?> </h5></td>
                </tr>
                 <tr>
                     <th scope="row"><h4>10</h4></th>
                    <td><h4>Blood-Group : </h4></td>
                     <td><?php
                                $q="select bloodgrp from faculty where facultyid='$id'";
                                $result=mysqli_query($con,$q);
                                $row = mysqli_fetch_array($result)


                                ?>
                                <h5 style="font-size: 20px,font-weight:bold"><?php echo "   ";echo $row['bloodgrp']; ?> </h5></td>
                </tr>

              </tbody>
                </table>
              
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">  
                  <form class="form" action="fprofile1.php" method="post" id="registrationForm">
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="name"><h4>Name*</h4></label>
                              <input type="text" class="form-control" name="name" id="last_name" placeholder="last name" title="enter your  name .">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Accountno*</h4></label>
                              <input type="number" class="form-control" name="acc" id="phone" minlength="11"  maxlength="11" placeholder="enter phone" title="enter your Account number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile*</h4></label>
                              <input type="number" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" minlength="10" maxlength="10" mtitle="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email*</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="txet"><h4>Address*</h4></label>
                              <input type="text" name="address" class="form-control" id="address" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password*</h4></label>
                              <input type="password" minlength="6" maxlength="15" class="form-control" name="pass" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>       
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

    <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
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
</body>