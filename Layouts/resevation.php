
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
    <link rel="stylesheet" href="../css/resevation.css">

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
               
               <h1> <strong>DRIVE TO YOUR DREAM</strong> </h1>
               <h2>Rent a car with SafeRunner and enjoy your destination </h2>
                
           </div>
       </section>

<!-- Resevation Forms -->

<section id="reservation-section" style="background-color:#FAFAFA">

<div class="container p-5 " >
          <div class="row">
            <div class="col-sm-6 mx-auto p-3">
                <h5 class="">Please Fill the Form With Your Details</h5>    
                <hr class="mb-4">
                <form action="../backend/reservation.php" class="needs-validation" method="post" novalidate id="reserve_contact">
                  <div class="form-row">

                      <div class="col-md-2 mb-3">
                        <label for="validationDefaultUsername"><strong>Title</strong></label>
                        <div class="input-group">
                          <select class="form-control" id="sel1" aria-describedby="inputGroupPrepend" name="reserver_title" required>
                            <option value="Mr">Mr.</option>
                            <option value="Mrs">Mrs.</option>
                            <option value="Ms">Ms.</option>
                            <option vlaue="Dr">Dr.</option>
                            <option value="Prof">Prof.</option>
                            <option value="Rev">Rev.</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md mb-3">
                        <label for="validationDefault01"><strong>First name</strong></label>
                        <input type="text" class="form-control" id="validationDefault01" value="<?php echo $res['first_name'] ?>" required data-pristine-required-message="This field is required" name="first_name">
                      </div>
                      <div class="form-group col-md mb-3">
                        <label for="validationDefault02"><strong>Last name</strong></label>
                        <input type="text" class="form-control" id="validationDefault02" value="<?php echo $res['last_name'] ?>" required data-pristine-required-message="This field is required" name="last_name">
                      </div>
                  </div>
                  <div class="form-row">

                    <div class="form-group col-md-6 mb-3">
                      <label for="validationDefault04"><strong>Phone number</strong></label>
                      <input type="tel" class="form-control" id="validationDefault04" value="<?php echo $res['contact_number'] ?>" required data-pristine-required-message="This field is required" data-pristine-type="number" name="tele">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="contact_me"><strong>Contact Me</strong></label>      
                        <select id="contact_me" name="contact_me" class="form-control">
                            <option value="Phone">Phone</option>
                            <option value="Email">Email</option>
                           
                        </select>                    
                    </div>
                  </div>

                  <div class=" form-row">
                    <div class="form-group col-md mb-3">
                      <label for="validationDefault03"><strong>Email</strong></label>
                      <input type="email" class="form-control" id="validationDefault03" value="<?php echo $res['email'] ?>" required data-pristine-required-message="This field is required" name="email">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md mb-3">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><strong>Comments</strong></label>
                      <textarea class="form-control" id="exampleFormControlTextarea1"  rows="3" name="comment"></textarea>
                    </div>
                    </div>
                  </div>

                 

                  <input type="hidden" name="vehicle_name" value="<?php echo $_GET['vehicle_name'] ?>">
                  <input type="hidden" name="pick_up_date" value="<?php echo $_GET['pick_up_date'] ?>">
                  <input type="hidden" name="pick_up_time" value="<?php echo $_GET['pick_up_time'] ?>">
                  <input type="hidden" name="drop_off_date" value="<?php echo $_GET['drop_off_date'] ?>">
                  <input type="hidden" name="drop_off_time" value="<?php echo $_GET['drop_off_time'] ?>">
                  <input type="hidden" name="passangers" value="<?php echo $_GET['passangers'] ?>">
                  <input type="hidden" name="driver" value="<?php echo $_GET['driver'] ?>">
                  <input type="hidden" name="pick_up_location" value="<?php echo $_GET['pick_up_location'] ?>">
                  <input type="hidden" name="reserve_date" value="<?php echo  date("Y-m-d") ?>">
                  <input type="hidden" name="rental_cost" value="<?php 

                        $vehicle_id = $_GET['vehicle_name'];  
                        $query = "SELECT * FROM vehicles WHERE id='$vehicle_id'"; 
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);  
                  
                        $date1 = new DateTime($_GET['pick_up_date']);
                        $date2 = new DateTime($_GET['drop_off_date']);

                        $diff = date_diff($date1,$date2);
                        echo ($row['price_per_day']*$diff->format('%d'));
                  
                  ?>">
                 
                 <script
                          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                          data-key="<?php echo $publishableKey?>"
                          data-amount="<?php echo ($row['price_per_day']*$diff->format('%d')*100); ?>"
                          data-name="<?php  echo $row['vehicle_title'];  ?>"
                          data-description="<?php  echo $row['vehicle_title'];  ?>"
                          data-image="../images/vehicleimages/<?php echo $row['image_name'] ?>"
                          data-currency="LKR"
                          data-email="<?php  echo $res['email'] ?>"
                         
                >
                </script>
                </form>

              </div>

            <div class="col-sm-6 mx-auto p-3 ml-3">
            <h5 class="">Reservation Details</h5> 
            <hr class="mb-4">
                <table class="table table-bordered" style="border-width:2px">
                  <tbody id="reservation-details">
                    <tr>
                      <td>SELECTED VEHICLE</td>
                      <td><?php echo $row['vehicle_title'];  ?></td>
                    </tr>
                    <tr>
                      <td>RESERVE FROM</td>
                      <td><?php echo $_GET['pick_up_date']; ?></td>
                    </tr>
                    <tr>
                      <td>RESERVE TO</td>
                      <td><?php echo $_GET['drop_off_date'] ?></td>
                    </tr>
                    <tr>
                      <td>RESERVED FOR</td>
                      <td><?php   echo $diff->format('%d days');  ?></td>
                    </tr>
                    <tr>
                      <td>RESERVED ON</td>
                      <td><?php echo  date("Y-m-d"); ?></td>
                    </tr>
                    <tr>
                      <td>NO OF PASSENGERS</td>
                      <td><?php echo  $_GET['passangers']; ?></td>
                    </tr>
                    <tr>
                      <td>VEHICLE RENTAL</td>
                      <td>Rs: <?php  
                         echo ($row['price_per_day']*$diff->format('%d'));
                      ?></td>
                    </tr>
                   
                    <tr>
                      <td>PICK UP LOCATION</td>
                      <td><?php echo  $_GET['pick_up_location']; ?></td>
                    </tr>
                   
                    
                    
                  </tbody>
              </table>
              <a href="#" class="btn btn-primary  px-5 py-2 " data-toggle="modal" data-target="#vehicle-details">View Vehicle Details</a>
            </div>
          </div>
        </div>
   
        </section>

      <main class="main-content" id="about">
         
          <div class="about container p-5" >
            <h1 class="text-center">ABOUT US</h1>
            <p class=" text-justify pt-4 ">We endeavor to provide the finest standards of customer care and highly personalized service to all of our customers looking for Sri Lanka vehicle rental opportunities, with over 30 years of expertise in the sector. Our service is backed by a networked front office, fully-fledged mechanical servicing, and valet service, and our fleet is one of the largest, most contemporary, most diverse in Sri Lanka.</p>
          </div>

          <section class="offers" id="offers">

             <h1>OFFERS</h1>
             <p>Some of the offers that are being introduced these days</p>
            
             <div class="offer-content row d-flex justify-content-center">
             
                  <div class="card col-3 m-4 px-0" style="width: 18rem;">
                    <img class="card-img-top" src="../images/offer1.jpeg" alt="Card image cap" height="250px">
                    <div class="card-body">
                      <h4 class="text-left">FAMILY CARS</h4>
                      <h6 class="text-left">From <span class="price">$120</span>  per weekend</h6>
                      <p class="card-text text-justify mt-3">Premium family vehicles like SUVs seating four to seven people and minivans seating seven. No matter if your family is renting a car for a day trip or for a week-long road trip, you have more space to stretch out.</p>

                       <hr>
                      <a href="" class="btn offer-btn btn-outline-success">View Offer </a> 
                    </div>
                  </div>

                  <div class="card col-3 m-4 px-0" style="width: 18rem;">
                    <img class="card-img-top" src="../images/offer2.jpeg" alt="Card image cap" height="250px">
                    <div class="card-body">
                      <h4 class="text-left">LUXURY & PRESTIGE CARS</h4>
                      <h6 class="text-left">From <span class="price">$150</span>  per weekend</h6>
                      <p class="card-text text-justify mt-3">Rental cars include the Mercedes-Benz S Class, BMW 6 Series, and Jaguar F-Type just to name a few. Choose a high-performance luxury car to make the journey as enjoyable as the destination.</p>
                      <hr>
                      <a href="" class="btn offer-btn btn-outline-success">View Offer </a> 

                    </div>
                  </div>

                  <div class="card col-3 m-4 px-0" style="width: 18rem;">
                   
                    <img class="card-img-top" src="../images/offer4.jpeg" alt="Card image cap" height="250px">
                    <div class="card-body">
                      <h4 class="text-left">TOP SELLERS</h4>
                      <h6 class="text-left">From <span class="price">$100</span>  per weekend</h6>
                      <p class="card-text text-justify mt-3">Many of the best-selling models saw sales increases compared with this time last year. We will continue to update this ranking quarterly as the top demands are changing throughout the year.</p>
                      <hr>
                      <a href="" class="btn offer-btn btn-outline-success">View Offer </a> 
                    </div>
                  </div>
                  

             </div>
 
          </section>

          <section class="service" id="services">

             <h1>SERVICES</h1>
             <p>Our services can be customized to fit your specific transportation needs.</p>

             <div class="offer-content row d-flex justify-content-center">
                  
                <div class="card col-md-2 m-3 pb-2 service-card" style="width: 18rem;">
                  <div class="card-body">
                    <div class="icon mx-auto mb-3 d-flex align-items-center justify-content-center">
                       <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <h5 class="card-title mb-2 ">World Wide</h5>
                    <p class="card-text">24 hrs world wide backup services with affiliated Garages and Mobile units.</p>
                    
                  </div>
                </div>

                <div class="card col-md-2 m-3 pb-2 service-card" style="width: 18rem;">
                  <div class="card-body">
                   
                    <div class="icon mx-auto mb-3 d-flex align-items-center justify-content-center">
                      <i class="fa fa-car" aria-hidden="true"></i>
                    </div>
                    <h5 class="card-title mb-2 ">Over 1000 Vehicles</h5>
                    <p class="card-text">Over 100 4WD Jeeps, 150 Vans, 500 Cars, Double Cabs, Luxury Coaches, Lorries etc.</p>
                    
                  </div>
                </div>

                <div class="card col-md-2 m-3 pb-2 service-card" style="width: 18rem;">
                  <div class="card-body">
                    <div class="icon mx-auto mb-3 d-flex align-items-center justify-content-center">
                      <i class="fa fa-flag" aria-hidden="true"></i>

                    </div>
                    <h5 class="card-title mb-2 ">Insurance</h5>
                    <p class="card-text">Comprehensive Insurance available for all our vehicles including Passengers</p>
                    
                  </div>
                </div>

                <div class="card col-md-2 m-3 pb-2 service-card" style="width: 18rem;">
                  <div class="card-body">
                    <div class="icon mx-auto mb-3 d-flex align-items-center justify-content-center">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <h5 class="card-title mb-2 ">Our Strength</h5>
                    <p class="card-text">100 In-house Operational Staff, 70 Automobile Technicians and 300 permanent Drivers from every branch of the Island.</p>
                    
                  </div>
                </div>
             
             </div>

          </section>

          <section class="testimonials" id="portfolio">
                <div class="container testimonials-contain">

                  <div class="owl-carousel testimonials-carousel ">

                      <div class="testimonial-item text-center ">
                          
                        <img src="../images/testimonials-1.jpg" class="testimonial-img " alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                          <i class=""></i>
                          We chose saferunner as a rental software solutions company because of its flexibility, depth of features and most importantly customer-centric support model.
                          <i class=""></i>
                        </p>
                      </div>

                      <div class="testimonial-item text-center ">
                          
                        <img src="../images/testimonials-2.jpg" class="testimonial-img " alt="">
                        <h3>Susan zhen</h3>
                        <h4>Public Services Manager</h4>
                        <p>
                          <i class=""></i>
                          This website tells you immediately which vehicles are available and which aren’t. It saves you time and helps you stay organized.
                          <i class=""></i>
                        </p>
                      </div>

                      <div class="testimonial-item text-center ">
                          
                        <img src="../images/testimonials-3.jpg" class="testimonial-img " alt="">
                        <h3>Kathi Peterson</h3>
                        <h4>Quality Engineer</h4>
                        <p>
                          <i class=""></i>
                          By far the most complete renting software, with many features (fleet management, contract automatization, damages overview, payment integration, etc) and great customer support.
                          <i class=""></i>
                        </p>
                      </div>

                      <div class="testimonial-item text-center ">
                          
                        <img src="../images/testimonials-4.jpg" class="testimonial-img " alt="">
                        <h3>James Potter</h3>
                        <h4>Developer</h4>
                        <p>
                          <i class=""></i>
                          Saferunner Rental Software is ideal for any type of vehicle rental.
                          <i class=""></i>
                        </p>
                      </div>

                      <div class="testimonial-item text-center ">
                          
                        <img src="../images/testimonials-5.jpg" class="testimonial-img " alt="">
                        <h3>Jakson Hamilton</h3>
                        <h4>Businessman</h4>
                        <p>
                          <i class=""></i>
                          The software is user friendly, fast, and easy to use.
                          <i class=""></i>
                        </p>
                      </div>

                    
          
                   </div> 
                </div>
          </section>

          <section class="contact" id="contact">
  
            <h1>Contact Us</h1>
            <p>We would love to hear from you. Get in touch with us.</p>  

            <div class="row justify-content-center">
                <div class="col-md-5 mx-2  contact-social ">

                    <div class=" social-icon pt-4">
                        
                        <div class="share mx-auto d-flex justify-content-center align-items-center">
                          <i class="fa fa-share-alt" aria-hidden="true"></i>
                        </div>

                        <h4 class="my-3">Social Profiles</h4>

                        <div class="d-flex justify-content-center align-items-center pb-5">
                            <div class="share-icons mx-2 d-flex justify-content-center align-items-center">
                              <i class="fa fa-facebook-official" aria-hidden="true"></i>
                          
                            </div>
                            <div class="share-icons mx-2 d-flex justify-content-center align-items-center">
                              <i class="fa fa-twitter" aria-hidden="true"></i>
                          
                            </div>
                            <div class="share-icons mx-2 d-flex justify-content-center align-items-center">
                              <i class="fa fa-instagram" aria-hidden="true"></i>
                          
                            </div>
                            <div class="share-icons mx-2 d-flex justify-content-center align-items-center">
                              <i class="fa fa-skype" aria-hidden="true"></i>
                          
                            </div>
                            <div class="share-icons mx-2 d-flex justify-content-center align-items-center">
                              <i class="fa fa-linkedin" aria-hidden="true"></i>
                          
                            </div>
                        </div>
                        
                    </div> 

                    <div class=" row pt-4  justify-content-center">
                       
                      <div class="col-md-5 mx-2 pt-4 email-box">
  
                        <div class="share mx-auto d-flex justify-content-center align-items-center">
                          <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>

                        <h4 class="my-3">Email Us</h4>
                        <email>safeRunner@gmail.com</email>
  
                      </div>
                       <div class="col-md-5 mx-2 pt-4  call-box">
  
                        <div class="share mx-auto d-flex justify-content-center align-items-center">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>

                        <h4 class="my-3">Call Us</h4>
                        <h6>047785694</h6> 
  
                      </div>
  
                   </div>
  

                   
                     
                </div>
                <div class="col-md-5 mx-2 p-4 contact-form">
                  
                  <div class="form-row  form-group">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                  </div>

                  <div class="form-group ">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Subject">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"  placeholder="Your Message"></textarea>
                  </div>

                  <button class="btn btn-outline-success">Send Message</button>

                </div>
            </div>

          </section>

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
         
         include '../forms/login.form.php'; 

         include '../forms/signup.form.php'; 

         include '../vehicle/vehicle_details_user.php'; 

      
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