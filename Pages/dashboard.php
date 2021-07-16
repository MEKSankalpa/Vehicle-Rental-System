<?php

session_start();

include '../helpers/db.php';

if (isset($_SESSION['user_name']) && $_SESSION['user_role'] == "admin") {
    $sql1 = "SELECT id FROM vehicles";
    if ($result1 = $conn->query($sql1)) {
        if (mysqli_num_rows($result1) > 0) {
            $row1 = mysqli_num_rows($result1);

    $sql2 = "SELECT id FROM reservations";
    if ($result2 = $conn->query($sql2)) {
        if (mysqli_num_rows($result2) > 0) {
            $row2 = mysqli_num_rows($result2);
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
                                <div class="col-12 stat-count"><?php echo $row1?></div>
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
                                <div class="col-12 stat-count"><?php echo $row2?></div>
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
                                <div class="col-12 stat-count"><?php echo $row1-$row2?></div>
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

<!---------------------- Reservation Details ------------------------>
            <div class="card p-0 reservation-list w-75">
				<div class="card-header ">
					<h5 class="text-white ">Reservations</h5>
				
				</div>
				<div class="card-body text-center pb-5">

							<table class="table w-100 table-bordered table-striped">
							<thead>
								<tr>
								<th>Reservation Id</th>
                                <th>Reserve Date</th>
								<th>Customer Name</th>
								<th>Customer Mobile</th>
								<th>Vehicle Id</th>
								<th>Reserve From</th>
								<th>Reserve To</th>
								<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php include '../tables/reservation_table.php'; ?>
							</tbody>

							</table>  
				</div>
            </div> 

        </div>    
        
        <!------footer----------------->
        <?php include '../layouts/footer.php'?>

    

<?php }}}}} else {

    include_once "./unauthorized.php";
}

?>