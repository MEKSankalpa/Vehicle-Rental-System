<?php
session_start();

if (isset($_SESSION['user_name']) && $_SESSION['user_role'] == "admin" ) {
    ?>


        <!-- Navbar -->
        <?php include '../layouts/header.php'; ?>

        <!-- Navbar -->
        <?php include '../layouts/sidebar.php'; ?>

         <!-- Content -->
         <div class="main-content">
            <a href="./dashboard.php" class="back-btn btn btn-success" id="c-back"><i class="fa fa-backward"></i>Back</a> 
             

         </div>

        <!-----footer----->
        <?php include '../layouts/footer.php'?>

       

<?php } else {
    include_once "../Pages/unauthorized.php";
}

?>