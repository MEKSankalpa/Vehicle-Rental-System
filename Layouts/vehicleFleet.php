
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

  $category_id = $_GET['category_id'];

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



     <?php 

        $query = "SELECT * FROM vehicles WHERE vehicle_category ='$category_id'";
        $vehicles = mysqli_query($conn, $query);
        $count = mysqli_num_rows($vehicles);

        if($count > 0){  
           
             while ($row = mysqli_fetch_assoc($vehicles)) {
             
          ?>

       
 


      <div class="container w-100 mx-auto mb-5 mt-5">
         

        <div class="card">
          <div class="fleet-header card-header text-center "><h3><strong><?php echo $row['vehicle_title'] ?></strong></h3> </div>
          <div class="row pl-5">
            <div class="col-4 mt-3 mb-3 ">
              <h5 class="mb-2">Vehicle Details</h5>
              <ul class="list">
                <input type="hidden" name="" id="vehicle_id" value="<?php echo $row['id'] ?>">
                <i class="fa fa-caret-right mr-2 mt-3"></i><span>Title : <?php echo $row['vehicle_title'] ?></span><br>
                <i class="fa fa-caret-right mr-2 mt-3"></i><span>Brand : <?php echo $row['brand_name'] ?></span><br>
                <i class="fa fa-caret-right mr-2 mt-3"></i><span>Model Year : <?php echo $row['model_year'] ?></span><br>
                <i class="fa fa-caret-right mr-2 mt-3"></i><span>Seat Capacity : <?php echo $row['seat_capacity'] ?></span><br>
                <i class="fa fa-caret-right mr-2 mt-3"></i><span>Price Per Day : <?php echo $row['price_per_day'] ?></span><br>
                <i class="fa fa-caret-right mr-2 mt-3"></i><span>Fuel Type : <?php echo $row['fluel_type'] ?></span><br>
                <i class="fa fa-caret-right mr-2 mt-3"></i><span>Engine Capacity : <?php echo $row['engine_capacity'] ?></span><br>
                <i class="fa fa-caret-right mr-2 mt-3"></i><span>Transmission : <?php echo $row['transmission'] ?></span><br>
              </ul>
            </div>
            <div class="col-4 mt-5 p-0">
              <img src="../images/vehicleimages/<?php echo $row['image_name'] ?>" alt="f1v1" height="250" width="300">
            </div>
            <div class="col-4 mt-3 mb-3 ">
              <h5 class="mb-2">Vehicle Features</h5>
              <ul>
                 
                  <?php if($row['airconditioner'] == 1 ){
                       echo '<i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Air Conditioner</span><br>';
                  } ?>

                  <?php if($row['powerdoorlocks'] == 1 ){
                      echo '<i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Power Door Locks</span><br>';
                  } ?>

                  <?php if($row['anti_lock_brake'] == 1 ){
                      echo '<i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>AntiLock Braking System</span><br>';
                  } ?>

                  <?php if($row['brakeassist'] == 1 ){
                      echo '<i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Brake Assist</span><br>';
                  } ?>

                  <?php if($row['powersteering'] == 1 ){
                      echo '<i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Power Steering</span><br>';
                  } ?>

                  <?php if($row['driverairbag'] == 1 ){
                      echo '<i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Driver Airbag</span><br>';
                  } ?>

                  <?php if($row['passenger_air_bag'] == 1 ){
                      echo ' <i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Passenger Airbag</span><br>';
                  } ?>

                  <?php if($row['powerwindow'] == 1 ){
                      echo '<i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Power Windows</span><br>';
                  } ?>

                  <?php if($row['cdplayer'] == 1 ){
                      echo '<i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>CD Player</span><br>';
                  } ?>

                  <?php if($row['central_locking'] == 1 ){
                      echo ' <i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Central Locking</span><br>';
                  } ?>

                  <?php if($row['crashcensor'] == 1 ){
                      echo ' <i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Crash Sensor</span><br>';
                  } ?>

                  <?php if($row['leather_seats'] == 1 ){
                      echo '<i class="fa fa-chevron-circle-right mr-2 mt-3"></i><span>Leather Seats</span><br>';
                  } ?>

                
              </ul>
            </div>
          </div>
        </div>
     
         <?php  if($_SESSION['user_role'] == ""){ ?>

          <div class="text-center mt-3">
            <a href="#" class="btn btn-success reservation_button px-5 py-2" data-toggle="modal" data-target="#res">SELECT VEHICLE</a>
          </div>

         <?php } ?>
      
      </div>


      <?php } }else{  ?>
        <div class="container w-100 mx-auto mb-5 mt-5 text-center">
          <img src="../images/sad.png" alt="sorry image" width="500" height="500">
        <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
          <strong>Sorry!</strong> There are no vehiles at the moment.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div> 

     <?php   } ?>  
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

      <?php
        
         include '../forms/reservation-fleet.php';
      
      ?>
     
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