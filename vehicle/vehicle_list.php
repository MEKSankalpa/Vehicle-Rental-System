
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
	     <div class="card card-container vehicle-list pt-0">
  <div class="card-header row"><h5 class="text-white col-sm-9 col-sm-offset">Vehicles List</h5>
   <a href="../vehicle/vehicle_create.php" class="btn btn-outline-light btn-md b-5 col-sm-2" id="add-btn"><i class="fa fa-plus"></i> Add Vehicle</a>
  </div>
 <div class="card-body p-0">
		    
			<table class="table vehicle-list-table table-light table-hover table-responsive-sm table-bordered table-sm">
			  <thead>
				<tr>
				  <th>ID</th>
				  <th>Vehicle Title</th>
				  <th>Description</th>
				  <th>Vehicle Category</th>
				  <th>Vehicle Brand</th>
                  <th>Model Year</th>
				  <th>Seat Capacity</th>
				  <th>Price Per Day</th>
				  <th>Fluel Type</th>
				  <th>Actions</th>
				</tr>
			  </thead>
			  <tbody>
				<?php include'../backend/vehicle_list_view.php';?>
			 </tbody>

			</table>  
	 </div>
         </div> 

        <!-----footer----->
        <?php include '../layouts/footer.php'?>

       

<?php } else {
    include_once "../Pages/unauthorized.php";
}

?>
