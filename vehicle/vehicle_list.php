
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
			<div class="card p-0 vehicle-list w-75">
				<div class="card-header ">
					<h5 class="text-white ">Vehicles List</h5>
				
				</div>
				<div class="card-body text-center pb-5">

					<a href="./vehicle_create.php" class="create-btn btn mb-4">
								<i class="fa fa-plus"></i> Add New Category</a>

				<!-- Create Alert -->
				<?php  if(isset($_GET['vehicle'])) { if($_GET['vehicle'] == 'done'){ ?>  
				
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					New Product Created!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>

				<?php } } ?>


				<!-- Update Alert -->
				<?php  if(isset($_GET['update'])) { if($_GET['update'] == 'done'){ ?>  
				
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					Vehicle Updated!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>

		    	<?php } } ?>


			 <!-- Delete alert -->
			 <?php  if(isset($_GET['delete_vehicle'])) { if($_GET['delete_vehicle'] == 'success'){ ?>  
            
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					Product Deleted!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>

            <?php } } ?>
							
							<table class="table w-100 table-bordered table-striped">
							<thead>
								<tr>
								<th>ID</th>
								<th>Vehicle Title</th>
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
								<?php include'../tables/vehicle.php';?>
							</tbody>

							</table>  
					</div>
         </div> 
				</div>
        <!-----footer----->
        <?php include '../layouts/footer.php'?>

       

<?php } else {
    include_once "../Pages/unauthorized.php";
}

?>
