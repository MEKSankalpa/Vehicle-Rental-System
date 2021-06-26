<?php
session_start();

if (isset($_SESSION['user_name'])) {
    ?>

        <!-- Navbar -->
        <?php include '../layouts/header.php'; ?>

        <!-- Navbar -->
        <?php include '../layouts/sidebar.php'; ?>

        <!--Page Content-->
        <div class="card w-70 mx-auto"> 
            <div class="card-body table-responsive text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">Categories</h2>
                        <a href="./create_category.php" class="create-btn btn pull-right">
                            <i class="fa fa-plus"></i> Add New Category</a>
                        </div>

                        <!-- category table -->
                        <?php include '../tables/category.php'; ?>

                    </div>
                </div>        
            </div>
        </div>


        <!-----footer----->
        <?php include '../layouts/footer.php'?>

       

<?php } else {
    include_once "./Pages/unauthorized.php";
}

?>
