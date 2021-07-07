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
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#about"  data-scroll>About</a></li>
                <li><a href="#offers" data-scroll>Offers</a></li>
                <li><a href="#services" data-scroll>Services</a></li>
                <li><a href="#portfolio" data-scroll>Testimonials</a></li>
                <li><a href="#contact" data-scroll>Contact</a></li>
        
              </ul>

             
            </nav>
            
            <nav class="nav-menu ml-auto d-none d-lg-block">
              
              <?php   if(isset($_SESSION['user_name'])){  ?>
                    
                <ul>
                    <li><a href="../Pages/dashboard.php">Dashboard</a></li>
               </ul>  
              
              <?php }else{  ?>
               
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
               <h2>Rent a car with SafeRunner and enjoy your destination </h2>
                
           </div>
       </section>

<!-- Resevation Forms -->

<div class="container p-3">
          <div class="row">
            <div class="col-sm-6 mx-auto p-3">

                <form action="#" class="needs-validation" method="post" novalidates>
                  <div class="form-row">

                      <div class="col-md-2 mb-3">
                        <label for="validationDefaultUsername">Title</label>
                        <div class="input-group">
                          <select class="form-control" id="sel1" aria-describedby="inputGroupPrepend" required>
                            <option>Mr.</option>
                            <option>Mrs.</option>
                            <option>Ms.</option>
                            <option>Dr.</option>
                            <option>Prof.</option>
                            <option>Rev.</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md mb-3">
                        <label for="validationDefault01">First name</label>
                        <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                      </div>
                      <div class="col-md mb-3">
                        <label for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                      </div>
                  </div>
                  <div class="form-row">

                    <div class="col-md-6 mb-3">
                      <label for="validationDefault04">Phone number</label>
                      <input type="tel" class="form-control" id="validationDefault04" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="country">Country</label>      
                        <select id="country" name="country" class="form-control">
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>                    
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md mb-3">
                      <label for="validationDefault03">Email</label>
                      <input type="email" class="form-control" id="validationDefault03" required>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md mb-3">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Comments</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                      <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                      </label>
                    </div>
                  </div>
                  <button class="btn btn-success" type="submit">Submit form</button>
                </form>

              </div>

            <div class="col-sm-6 mx-auto p-3">
                
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>SELECTED VEHICLE</td>
                      <td>Otto</td>
                    </tr>
                    <tr>
                      <td>RESERVE FROM</td>
                      <td>Thornton</td>
                    </tr>
                    <tr>
                      <td>RESERVE TO</td>
                      <td>Otto</td>
                    </tr>
                    <tr>
                      <td>RESERVED FOR</td>
                      <td>Thornton</td>
                    </tr>
                    <tr>
                      <td>RESERVED ON</td>
                      <td>Otto</td>
                    </tr>
                    <tr>
                      <td>NO OF PASSENGERS</td>
                      <td>Thornton</td>
                    </tr>
                    <tr>
                      <td>VEHICLE RENTAL</td>
                      <td>Otto</td>
                    </tr>
                    <tr>
                      <td>DRIVER COST</td>
                      <td>Thornton</td>
                    </tr>
                    <tr>
                      <td>AIRPORT DROPOFF COST</td>
                      <td>Otto</td>
                    </tr>
                    <tr>
                      <td>TOTAL COST</td>
                      <td>Thornton</td>
                    </tr>
                    <tr>
                      <td>PICK UP LOCATION</td>
                      <td>Thornton</td>
                    </tr>
                    <tr>
                      <td>DROP OFF LOCATION</td>
                      <td>Thornton</td>
                    </tr>
                    
                    
                  </tbody>
              </table>

            </div>
          </div>
        </div>
   
 

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
      
      ?>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/pristine.js"></script>
<script src="../js/welcome.js"></script>
<script src="../js/validation.js"></script>
<script src="../js/modal.js"></script>
<script src="../js/scroll.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
