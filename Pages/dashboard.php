<?php
session_start();

if (isset($_SESSION['user_name'])) {
    ?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/custom.css">
        <link rel="stylesheet" href="../css/category.css">

        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Our Custom JS -->
        <script src="../js/custom.js"></script>
        <script src="../js/category.js"></script>
        
        <!-- font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

    <!-- Navbar -->
        <?php include '../layouts/header.php';?>

        <!----- Dashboard Sidebar ----->

        <div class="wrapper">

        <nav id="sidebar">

            <ul class="list-unstyled components">
                <li>
                    <a class="sidebar-a" href="dashboard.php">
                        <i class="fa fa-tv fa-fw px-4 nav-icon" aria-hidden="true"></i><span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="sidebar-a" href="../Category/index.php">
                        <i class="fa fa-taxi fa-fw px-4 nav-icon" aria-hidden="true"></i><span>Categories</span>
                    </a>
                </li>
                <li>
                    <a class="sidebar-a" href="#"><i class="fa fa-user fa-fw px-4 nav-icon" aria-hidden="true">
                        </i><span>Clients</span>
                    </a>
                </li>
                <li>
                    <a class="sidebar-a" href="#reportSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-file fa-fw px-4 nav-icon" aria-hidden="true"></i><span>Reports</span>
                    </a>
                    <ul class="collapse list-unstyled" id="reportSubmenu">
                        <li>
                            <a class="sidebar-a" href="#"><span>Report 1</span></a>
                        </li>
                        <li>
                            <a class="sidebar-a" href="#"><span>Report 2</span></a>
                        </li>
                        <li>
                            <a class="sidebar-a" href="#"><span>Report 3</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-a" href="#"><i class="fa fa-list fa-fw px-4 nav-icon" aria-hidden="true">
                        </i><span>Reservations</span>
                    </a>
                </li>
                <li>
                    <a class="sidebar-a" href="#"><i class="fa fa-trophy fa-fw px-4 nav-icon" aria-hidden="true">
                        </i><span>Achievements</span>
                    </a>
                </li>
                <li>
                    <a class="sidebar-a" href="#"><i class="fa fa-cogs fa-fw px-4 nav-icon" aria-hidden="true">
                        </i><span>Settings</span>
                    </a>
                </li>
            </ul>
        </nav>

        </div>

        <!---------- Page Contents ---------->
        

        <!-----footer----->
        <?php @include '../layouts/footer.php'?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>

<?php } else {

    include_once "./unauthorized.php";

}

?>