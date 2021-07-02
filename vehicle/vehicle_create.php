<?php
session_start();

if (isset($_SESSION['user_name'])) {
    ?>


        <!-- Navbar -->
        <?php include '../layouts/header.php'; ?>

        <!-- Navbar -->
        <?php include '../layouts/sidebar.php'; ?>

         <!-- Content -->
         <?php include '../forms/vehicle_create_form.php'; ?>


        <!-----footer----->
        <?php include '../layouts/footer.php'?>

       

<?php } else {
    include_once "../Pages/unauthorized.php";
}

?>
