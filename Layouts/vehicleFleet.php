
<?php

session_start();
include_once "../helpers/db.php";
require('../payment/config.php');

if (isset($_SESSION['user_name'])) {

  if(isset($_SESSION['user_id'])){
     $id = $_SESSION['user_id'];
     $sql = "SELECT * FROM users WHERE id='$id'";
     $user_data = mysqli_query($conn, $sql);
     $res = mysqli_fetch_assoc($user_data);
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Vehical Rental</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="../css/reservation.css">

    <!-- font-awesome -->
    <script src="https://use.fontawesome.com/50ae888db0.js"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Owl carsuel  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> 

    <script src="https://unpkg.com/sweet-scroll/sweet-scroll.min.js"></script>
    
    <body>
       
       <header id="header" class="fixed-top d-flex  align-items-center header-transparent ">
            
            <nav class="nav-menu d-none d-lg-block ">
              <ul>
                <li class="active"><a href="welcome.php">Home</a></li>
                <li><a href="#about"  data-scroll>About</a></li>
                <li><a href="#offers" data-scroll>Fleets</a></li>
                <li><a href="#services" data-scroll>Services</a></li>
                <li><a href="#portfolio" data-scroll>Testimonials</a></li>
                <li><a href="#contact" data-scroll>Contact</a></li>
        
              </ul>

             
            </nav>
            
            <nav class="nav-menu ml-auto d-none d-lg-block">
              
              <?php   if(isset($_SESSION['user_name'])){
                         if($_SESSION['user_role'] == ""){ ?>
                    
                                <ul class="nav ">
                                      <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="#"><?php echo $_SESSION['user_name'] ?></a>
                                      </li>

                                      <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="../backend/signout.php">Signout</a>
                                      </li>
                                     
                                  </ul>


                           <?php }else{ ?>

                                <ul>
                                   <li><a href="../Pages/dashboard.php">Dashboard</a></li>
                                </ul> 

                         <?php  } ?>     

                      
              
              <?php  }else{  ?>
               
                <ul>
                  <li class=""><a href="#" data-toggle="modal" data-target="#login_modal" id="login_navi">Login</a></li>
                  <li><a href="#about" data-toggle="modal" data-target="#signup_modal" id="signup_navi">Signup</a></li>
               </ul>  
              
               <?php }  ?>



            </nav>

       </header> 

       <section class="cover fixed" id="cover_img">
           <div class="cover-content">
               
               <h1> <strong>ALL ABOUT THE DRIVE</strong> </h1>
               <!-- <h2>Rent a car with SafeRunner and enjoy your destination </h2> -->
                
           </div>
       </section>

<!-- content -->
      <div class="container w-75 mx-auto mb-5 mt-5">
          <h1><strong>CARS</strong></h1>
        <hr>

        <div class="card">
          <div class="fleet-header text-center mt-2"><h3><strong>TOYOTA AQUA HYBRID</strong></h3> </div>
          <div class="row">
            <div class="col-3 mt-3 mb-3 offset-1">
              <h5>Details</h5>
              <ul class="list">
                <i class="fa fa-caret-right mr-1"></i><span>Title</span><br>
                <i class="fa fa-caret-right mr-1"></i><span>Brand</span><br>
                <i class="fa fa-caret-right mr-1"></i><span>Model Year</span><br>
                <i class="fa fa-caret-right mr-1"></i><span>Seat Capacity</span><br>
                <i class="fa fa-caret-right mr-1"></i><span>Price Per Day</span><br>
                <i class="fa fa-caret-right mr-1"></i><span>Fuel Type</span><br>
              </ul>
            </div>
            <div class="col-4 mt-5">
              <img src="../images/aqua.jpg" alt="f1v1">
            </div>
            <div class="col-3 mt-3 mb-3 offset-1">
              <h5>Features</h5>
              <ul>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Air Conditioner</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Power Door Locks</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>AntiLock Braking System</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Brake Assist</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Power Steering</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Driver Airbag</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Passenger Airbag</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Power Windows</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>CD Player</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Central Locking</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Crash Sensor</span><br>
                <i class="fa fa-chevron-circle-right mr-1"></i><span>Leather Seats</span><br>
              </ul>
            </div>
          </div>
        </div>
        <div class="text-center">
        <a href="" class="btn select-btn btn-outline-warning mt-2"><strong>SELECT VEHICLE</strong> </a>
        </div>
      </div>
<!--content-->

          <footer class="footer">

            <div class="container">
              <h3>Faster Safer Rider</h3>
              <p>Enjoy the efficient and specialized services of SafeRunnR Rent a Car; Sri Lanka's leading rent-a-car company.</p>
              <div class="social-links">
                <a href="#" class="twitter"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#" class="facebook"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="instagram">  <i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="google-plus">  <i class="fa fa-skype" aria-hidden="true"></i></i></a>
                <a href="#" class="linkedin">  <i class="fa fa-linkedin" aria-hidden="true"></i></a>
              </div>
              <div class="copyright">
                &copy; 2021 Copyright <strong><span>SafeRunner</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">web technologies group</a>
              </div>
            </div>

          </footer>
         
      </main>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/pristine.js"></script>
<script src="../js/welcome.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/validation.js"></script>
<script src="../js/modal.js"></script>
<script src="../js/scroll.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
 } else {
  include_once "../Pages/unauthorized.php";
}

?>