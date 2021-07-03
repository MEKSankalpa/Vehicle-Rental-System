<?php
session_start();

if (isset($_SESSION['user_name'])) {
    ?>


        <!-- Navbar -->
        <?php include '../layouts/header.php'; ?>

        <!-- Navbar -->
        <?php include '../layouts/sidebar.php'; ?>

         <!-- Content -->
         <div class="main-content">
         <?php include '../forms/vehicle_edit_form.php'; ?>
         </div>

        <!-----footer----->
        <?php include '../layouts/footer.php'?>

       

<?php } else {
    include_once "./Pages/unauthorized.php";
}

?>