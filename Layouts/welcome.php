<?php

session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Vehical Rental</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  </head>
    <link rel="stylesheet" href="../css/welcome.css">

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
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about"  data-scroll>About</a></li>
                <li><a href="#fleet" data-scroll>Fleet</a></li>
                <li><a href="#services" data-scroll>Services</a></li>

                <?php   if(!isset($_SESSION['user_name'])){  ?>

                      <li><a href="#" data-toggle="modal" data-target="#login_modal">Reservation</a></li>

                 <?php }  ?>   

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
               
               <h1> <strong>SAFE ADVENTURE</strong> </h1>
               <h2>Rent a car with SafeRunner and enjoy your destination</h2>

               <?php   if(isset($_SESSION['user_name'])  && $_SESSION['user_role'] == ""){  ?>
                 <a href="#" class="btn btn-success reservation_button px-5 py-2" data-toggle="modal" data-target="#res">Reservation</a>
               <?php }  ?>   

               <?php if(isset($_GET['reservation'])){ ?>
                  <div class="alert alert-success mt-3" role="alert" id="res-alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> Your reservation completed!
                  </div>

               <?php } ?>

           </div>
       </section>

      <main class="main-content" id="about">
         
          <div class="about container p-5" >
            <h1 class=" text-center">ABOUT US</h1>
            <p class=" text-justify pt-4 ">We endeavor to provide the finest standards of customer care and highly personalized service to all of our customers looking for Sri Lanka vehicle rental opportunities, with over 30 years of expertise in the sector. Our service is backed by a networked front office, fully-fledged mechanical servicing, and valet service, and our fleet is one of the largest, most contemporary, most diverse in Sri Lanka. We are always striving to improve our service and get customers to their destination as comfortably, efficiently and quickly as possible. Customer satisfaction is our highest priority.</p>
          </div>

          <section class="fleet" id="fleet">

             <h1>VEHICLE FLEET</h1>
             <p><i>Some of the categories that are being introduced</i></p>
            
             <div class="offer-content row d-flex justify-content-center">
             
                  <div class="card col-3 m-4 px-0" style="width: 18rem;">
                    <img class="card-img-top" src="../images/fleet1.jpeg" alt="Card image cap" height="250px">
                    <div class="card-body">
                      <h4 class="text-center"><strong>CARS</strong> </h4>
                       <hr>
                      <a href="../Layouts/vehicleFleet.php" class="btn fleet-btn btn-outline-success">View Fleet </a> 
                    </div>
                  </div>

                  <div class="card col-3 m-4 px-0" style="width: 18rem;">
                    <img class="card-img-top" src="../images/fleet2.jpeg" alt="Card image cap" height="250px">
                    <div class="card-body">
                      <h4 class="text-center"><strong>VANS</strong> </h4>
                      <hr>
                      <a href="" class="btn fleet-btn btn-outline-success">View Fleet </a> 

                    </div>
                  </div>

                  <div class="card col-3 m-4 px-0" style="width: 18rem;">
                   
                    <img class="card-img-top" src="../images/fleet3.jpeg" alt="Card image cap" height="250px">
                    <div class="card-body">
                      <h4 class="text-center"><strong>BUSSES</strong> </h4>
                      <hr>
                      <a href="" class="btn fleet-btn btn-outline-success">View Fleet </a> 
                    </div>
                  </div>
                  

             </div>
 
          </section>

          <section class="service" id="services">

             <h1>SERVICES</h1>
             <p><i>Our services can be customized to fit your specific transportation needs.</i></p>

             <div class="offer-content row d-flex justify-content-center">
                  
                <div class="card col-md-2 m-3 pb-2 service-card" style="width: 18rem;">
                  <div class="card-body">
                    <div class="icon mx-auto mb-3 d-flex align-items-center justify-content-center">
                       <i class="fa fa-globe" aria-hidden="true"></i>
                    </div>
                    <h5 class="card-title mb-2 "><strong>World Wide</strong> </h5>
                    <p class="card-text">24 hrs world wide backup services with affiliated Garages and Mobile units.</p>
                    
                  </div>
                </div>

                <div class="card col-md-2 m-3 pb-2 service-card" style="width: 18rem;">
                  <div class="card-body">
                   
                    <div class="icon mx-auto mb-3 d-flex align-items-center justify-content-center">
                      <i class="fa fa-car" aria-hidden="true"></i>
                    </div>
                    <h5 class="card-title mb-2 "><strong> Over 1000 Vehicles </strong></h5>
                    <p class="card-text">Over 100 4WD Jeeps, 150 Vans, 500 Cars, Double Cabs, Luxury Coaches, Lorries etc.</p>
                    
                  </div>
                </div>

                <div class="card col-md-2 m-3 pb-2 service-card" style="width: 18rem;">
                  <div class="card-body">
                    <div class="icon mx-auto mb-3 d-flex align-items-center justify-content-center">
                      <i class="fa fa-flag" aria-hidden="true"></i>

                    </div>
                    <h5 class="card-title mb-2 "><strong>Insurance</strong></h5>
                    <p class="card-text">Comprehensive Insurance available for all our vehicles including Passengers</p>
                    
                  </div>
                </div>

                <div class="card col-md-2 m-3 pb-2 service-card" style="width: 18rem;">
                  <div class="card-body">
                    <div class="icon mx-auto mb-3 d-flex align-items-center justify-content-center">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <h5 class="card-title mb-2 "><strong>Our Strength</strong> </h5>
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
            <p><i>We would love to hear from you. Get in touch with us.</i></p>  

            <div class="row justify-content-center">
                <div class="col-md-5 mx-2  contact-social ">

                    <div class=" social-icon pt-4">
                        
                        <div class="share mx-auto d-flex justify-content-center align-items-center">
                          <i class="fa fa-share-alt" aria-hidden="true"></i>
                        </div>

                        <h4 class="my-3"><strong>Social Profiles</strong> </h4>

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

                        <h4 class="my-3"><strong>Email Us</strong> </h4>
                        <email>safeRunner@gmail.com</email>
  
                      </div>
                       <div class="col-md-5 mx-2 pt-4  call-box">
  
                        <div class="share mx-auto d-flex justify-content-center align-items-center">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>

                        <h4 class="my-3"><strong>Call Us</strong> </h4>
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

         include '../forms/reservation-welcome.php';
      
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
