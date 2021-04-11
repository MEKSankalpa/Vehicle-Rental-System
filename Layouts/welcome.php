<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <!--Stylesheet--> 
    <link rel="stylesheet" href="../css/welcome.css">

  </head>
  <body>
      <!--navigation start-->      
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="#" alt="logo" class="img-fluid rounded-circle"></a>
    <div class="collapse navbar-collapse" id="Navbar">
      <ul class="navbar-nav navilink ml-1">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-info-square-fill"></i> About us</a></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-cart-fill"></i> Fleet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-truck"></i> Offers</a>
        </li>
         <li class="nav-item">
             <a class="nav-link" href="#"><i class="bi bi-person-badge-fill"></i> Contact us</a>
        </li>

        <?php 


        if (isset($user_email) && is_null($user_email)==false) {
             echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./signup.php"><i class="fa fa-user-circle fa-lg"></i>Profile</a></li>';
             echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./login.php"><i class="fa fa-user-circle-o fa-lg"></i> Log Out</a></li>';
                      }
        else{
           echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./profile.php"><i class="bi bi-person-lines-fill"></i> Signup</a></li>';
           echo '<li class="nav-item"><a class="nav-link d-block d-sm-none" href="./logout.php"><i class="bi bi-person-circle"></i> Login</a></li>';
                    
                      }

        ?>        
      </ul>
       </div>
       <?php 
     
          #after login -user
        if (isset($user_email) && is_null($user_email)==false) {

          echo '<div class="dropdown d-none d-sm-block">
                  <button type="button" class="btn btn-rounded btn-outline-light dropdown-toggle" data-bs-toggle="dropdown"><b>'.$user_email.'</b></button>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="profile.php">Profile</a>
                      <a class="dropdown-item" href="logout.php">Logout</a>
                  </div>
            </div>';
        }
        else{

            #without login - guest user

           echo '<div class="btn-group d-none d-sm-block"><a href="signup.php" type="button" role="button" id="signup" class="btn btn-rounded btn-md  btn-outline-light"><b>Sign up</b></a><a href="login.php" type="button" role="button" id="login" class="btn btn-rounded btn-md btn-outline-light "><b>Login</b></a></div>';

          }

         ?>
         
    
  </div>
</nav>
<!--navigation end-->


      <!--header start-->
       <header class="jumbotron">
           <div class="container">
       	       <div class="row row-header">
       	            <div class="col-12 col-sm-12">
                        <h1 class="header">Vehical Rental System</h1>    
                    </div>
               </div>
               
           </div>
       </header>
       <!--header end-->


        <!--slide show start-->
        <section id="carouselExampleCaptions" class="carousel slide d-none d-sm-block" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                   <div class="carousel-item active">
                        <img src="../images/pexels-photo-1571783.jpeg" height="400px"  width="100%" alt="slide1">
                   <!--<div class="carousel-caption d-none d-md-block">
                       <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>-->
                 </div>
                  <div class="carousel-item">
                      <img src="../images/pexels-jae-park-3770875.jpg" height="400px"  width="100%"  alt="slide2">
                   <!--<div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                   </div>-->
                  </div>
                  <div class="carousel-item">
                   <img src="../images/cars-buildings-new-york-urban-trees-usa-street-wallpx.com.jpg" height="400px" width="100%" alt="slide3">
               <!--<div class="carousel-caption d-none d-md-block">
                   <h5>Third slide label</h5>
                   <p>Some representative placeholder content for the third slide.</p>
               </div>-->
                </div>
               </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
             </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
         </section>
        <!--slide show end-->

        <!--home page content start-->
       <div class="container">
           <div class="row row-content">
             <div class="col-sm-12 col-12 order-sm-first">
                 <h3 class="text-center">About us</h3>
                 <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, 
                    by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of
                    Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                    generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem
                    Ipsum which looks reasonable.The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
           </div>
           <!--other content rows-->
       </div>
       <!--home page content end-->

    <section class="testimonials">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 "> 

                  <div class="header text-center" >
                      <h2>Testimonials</h2>
                      <p id="subheading">Lorem ipsum dolor sit amet consect.</p>
                  </div>
              
                  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">

                      <ol class="carousel-indicators">
                          <li button data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselIndicators" data-slide-to="1"></li>
                          <!-- <li data-target="#carouselIndicators" data-slide-to="2"></li> -->
                      </ol>
          
                      <div class="carousel-inner">
                          
                          <div class="carousel-item active">
                              <div class="row">

                                  <div class="col-sm-4">
                                      <div class="card border-light">
                                          <div class="user">
                                              <div class="tst-image">
                                                  <img src="../images/keshan.jpeg" class="img-responsive" alt="">
                                              </div>
                                              <div class="tst-author">
                                                  <h5>Keshan</h5>
                                                  <span>Web Developer</span>
                                              </div>
                                          </div>
                                          <div class="review">
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, 
                                              iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta.</p>
                                              <div class="tst-rating">
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 

                                  <div class="col-sm-4">
                                      <div class="card border-light">
                                          <div class="user">
                                              <div class="tst-image">
                                                  <img src="../images/noImage.png" class="img-responsive" alt="">
                                              </div>
                                              <div class="tst-author">
                                                  <h5>Prabath</h5>
                                                  <span>Web Developer</span>
                                              </div>
                                          </div>
                                          <div class="review">
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, 
                                              iure atque laborum! Odit tempora.</p>
                                              <div class="tst-rating">
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 

                                  <div class="col-sm-4">
                                      <div class="card border-light">
                                          <div class="user">
                                              <div class="tst-image">
                                                  <img src="../images/noImage.png" class="img-responsive" alt="">
                                              </div>
                                              <div class="tst-author">
                                                  <h5>Pasindi</h5>
                                                  <span>Web Developer</span>
                                              </div>
                                          </div>
                                          <div class="review">
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, 
                                              iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta.enim aliquid at modi illum ducimus explicabo soluta.</p>
                                              <div class="tst-rating">
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 

                              </div>
                          </div>
                          
                          <div class="carousel-item ">
                              <div class="row">

                                  <div class="col-sm-4">
                                      <div class="card border-light">
                                          <div class="user">
                                              <div class="tst-image">
                                                  <img src="../images/thilini.jpeg" class="img-responsive" alt="">
                                              </div>
                                              <div class="tst-author">
                                                  <h5>Thilini</h5>
                                                  <span>Web Developer</span>
                                              </div>
                                          </div>
                                          <div class="review">
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla,
                                                  Dolore natus culpa laudantium sit dolores quidem at nulla, iure atque laborum!</p>
                                              <div class="tst-rating">
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 

                                  <div class="col-sm-4">
                                      <div class="card border-light">
                                          <div class="user">
                                              <div class="tst-image">
                                                  <img src="../images/noImage.png" class="img-responsive" alt="">
                                              </div>
                                              <div class="tst-author">
                                                  <h5>Janani</h5>
                                                  <span>Web Developer</span>
                                              </div>
                                          </div>
                                          <div class="review">
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, 
                                              iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                              <div class="tst-rating">
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 

                                  <div class="col-sm-4">
                                      <div class="card border-light">
                                          <div class="user">
                                              <div class="tst-image">
                                                  <img src="../images/noImage.png" class="img-responsive" alt="">
                                              </div>
                                              <div class="tst-author">
                                                  <h5>Nirodha</h5>
                                                  <span>Web Developer</span>
                                              </div>
                                          </div>
                                          <div class="review">
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, 
                                              iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta.</p> 
                                              <div class="tst-rating">
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                                  <i id="rating" class="fa fa-star"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div> 

                              </div>
                          </div>

                      </div>
                          
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>

                  </div>
              </div>
          </div>
      </div>
    </section>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>