
<?php
session_start();

include_once '../helpers/db.php';

if (isset($_SESSION['user_name'])) {
    ?>


        <!-- Navbar -->
        <?php include '../layouts/header.php'; ?>

        <!-- Navbar -->
        <?php include '../layouts/sidebar.php'; ?>

        <!-- Content -->
        <div class="main-content">
         <?php  include '../forms/vehicle_view_card.php' ?>      
        </div>
        <!-----footer----->
        <?php include '../layouts/footer.php'?>

       

<?php } else {
    include_once "../Pages/unauthorized.php";
}

?>
