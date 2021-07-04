<?php
session_start();

if (isset($_SESSION['user_name'])) {
    ?>

        <!-- Navbar -->
        <?php include '../layouts/header.php';?>

        <!-- Navbar -->
        <?php include '../layouts/sidebar.php';?>

        <!--Page Content-->
        <div class="main-content">
            <div class="card p-0 mx-auto">
                <div class="card-header">
                <h5 id="header-name">Vehicle Categories</h5>
                </div>
                <div class="card-body table-responsive text-center pb-5">

                <a href="./create_category.php" class="create-btn btn mb-4">
                                <i class="fa fa-plus"></i> Add New Category</a>

                    <!-- Update Alert -->
                    <?php if (isset($_GET['edit'])) {if ($_GET['edit'] == 'done') {?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Category Updated!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>

                <?php }}?>

                <!-- Delete alert -->
                <?php if (isset($_GET['delete'])) {if ($_GET['delete'] == 'success') {?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Category Deleted!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>

        <?php }}?>

                <!-- category table -->
                <?php include '../tables/category.php';?>

                </div>
            </div>
        </div>


        <!-----footer----->
        <?php include '../layouts/footer.php'?>



<?php } else {
    include_once "../Pages/unauthorized.php";
}

?>
