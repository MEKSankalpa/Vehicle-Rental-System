<!-- <?php
session_start();

?> -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg w-100">
    <div class="container-fluid">

        <div class="top-left text-align-left">
            <img src="../images/logo.png" alt="logo" id="logo">
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