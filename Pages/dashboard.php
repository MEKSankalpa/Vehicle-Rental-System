<?php
session_start();

if (isset($_SESSION['user_name'])) {
    ?>



    <!-- Navbar -->
        <?php include '../layouts/header.php';?>

        <!----- Dashboard Sidebar ----->

        <!-- Navbar -->
        <?php include '../layouts/sidebar.php'; ?>

        <!---------- Page Contents ---------->
        <div class="main-content">

        </div> 
        
        

        <!-----footer----->
        <?php include '../layouts/footer.php'?>

    

<?php } else {

    include_once "./unauthorized.php";

}

?>