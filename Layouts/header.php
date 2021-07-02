<!-- <?php
session_start();

?> -->

<!doctype html>
<html lang="en">
    <head>
        <title>SafeRunneR</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- styles -->
        <link rel="stylesheet" href="../css/custom.css">
        <link rel="stylesheet" href="../css/category.css">

        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       

        <!-- custom JS -->
      
        <script src="../js/category.js"></script>

        <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg w-100 mb-0">
    <div class="container-fluid">

        <div class="top-left text-align-left">
            <img src="../images/logo1.png" alt="logo" id="logo">
            <a class="menu-icon" id="sidebarCollapse" href="">
                <i id="toggle-btn" class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </div>

        <div class="top-right ml-auto" id="navbarNavDropdown">

            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../layouts/welcome.php">Home</a>
                </li>

                <li class="nav-item ">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php
                    if (isset($_SESSION['user_name'])) {
                        echo  $_SESSION['user_name'];
                    }

                    ?>
                    
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../backend/signout.php">Logout</a>
                        <a class="dropdown-item" href="#">Profile</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>