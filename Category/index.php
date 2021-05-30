<?php
session_start();

if (isset($_SESSION['user_name'])) {
    ?>

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
        <script src="../js/custom.js"></script>
        <script src="../js/category.js"></script>

        <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
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
                        <a href="#" class="create-btn btn pull-right">
                            <i class="fa fa-plus"></i> Add New Category</a>
                        </div>

                        <?php
                        // Include connection file
                        include_once "../helpers/db.php";
                        
                        //Include category table
                        include_once "../tables/category/category.php";
                    
                        ?>
                    </div>
                </div>        
            </div>
        </div>


        <!-----footer----->
        <?php @include '../layouts/footer.php'?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>

<?php } else {
    include_once "./Pages/unauthorized.php";
}

?>
