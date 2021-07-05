<?php

// include_once "../helpers/db.php";

// vehicle_categry("db", $con);

// $result = $sql("select count(1) FROM table");
// $row = mysql_fetch_array($result);

// $total = $row[0];
// echo "Total rows: " . $total;

// mysql_close($con);

session_start();

if (isset($_SESSION['user_name'])) {
?>

    <!-- Navbar -->
        <?php include '../layouts/header.php';?>

        <!----- Dashboard Sidebar ----->

        <!----- Navbar ---------------->
        <?php include '../layouts/sidebar.php'; ?>

        <!---------- Page Contents ---->
        <div class="main-content">
            <div class="row w-75 mx-auto" id="dashboard-stats">
                <div class="col-lg-3 col-sm-6 col-xs-12" >
                    <a class="card bg-primary w-100" id="stat">
                        <div class="row">
                            <div class="col-6 stat-value text-left">
                                <div class="col-12 stat-count">100</div>
                                <div class="col-12 stat-name">Total</div>
                            </div>
                            <div class="col-6 stat-icon text-right">
                                <i class="fa fa-cab fa-3x "></i>   
                            </div>
                       </div>
                    </a>    
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12" >
                    <a class="card bg-danger w-100" id="stat">
                    <div class="row">
                            <div class="col-6 stat-value text-left">
                                <div class="col-12 stat-count">100</div>
                                <div class="col-12 stat-name">Reserved</div>
                            </div>
                            <div class="col-6 stat-icon text-right">
                                <i class="fa fa-check-square-o fa-3x"></i>   
                            </div>
                       </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12" >
                    <a class="card bg-warning w-100" id="stat">
                    <div class="row pl-0">
                            <div class="col-6 stat-value text-left">
                                <div class="col-12 stat-count">100</div>
                                <div class="col-12 stat-name">Available</div>
                            </div>
                            <div class="col-6 stat-icon text-right">
                                <i class="fa fa-flag fa-3x"></i>   
                            </div>
                       </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12" >
                    <a class="card bg-success w-100" id="stat">
                    <div class="row">
                            <div class="col-6 stat-value text-left">
                                <div class="col-12 stat-count">100</div>
                                <div class="col-12 stat-name">Drivers</div>
                            </div>
                            <div class="col-6 stat-icon text-right">
                                <i class="fa fa-user fa-3x"></i>   
                            </div>
                       </div>
                    </a>
                </div>
            </div>

<!---------------------- Fleet Container ------------------------>
          <table>
          </table>

        </div>    
        
        <!------footer----------------->
        <?php include '../layouts/footer.php'?>

    

<?php } else {

    include_once "./unauthorized.php";

}

?>