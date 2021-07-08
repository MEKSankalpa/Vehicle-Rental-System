<?php 
			  
$sql = "SELECT * FROM vehicles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // output data of each row
	while($row = $result->fetch_assoc()) {?>
		<tr>

			<td>V/<?php echo $row["id"]?></td>
            <td><?php echo $row["vehicle_title"]?></td>
			<td><?php echo $row["vehicle_category"]?></td>
			<td><?php echo $row["brand_name"]?></td>
			<td><?php echo $row["model_year"]?></td>
			<td><?php echo $row["seat_capacity"]?></td>
			<td><?php echo $row["price_per_day"]?></td>	  
			<td><?php echo $row["fluel_type"]?></td>
			<td>
				<div class="btn-group btn-group-sm">
					<a href="../vehicle/vehicle_view.php?v_id=<?php echo $row['id'] ?>" class="btn btn-outline-primary mr-2 action-icon" id="view-btn"><i class="bi bi-eye-fill"></i><br/></a>
					<a href="../vehicle/edit_vehicle.php?vehicle_id=<?php echo $row['id'] ?>" class="btn btn-outline-success mr-2 action-icon" id="edit-btn"><i class="bi bi-pencil-square"></i><br/></a>
					<a href="#" class="btn btn-outline-danger action-icon" id="delete_vehicle" data-id="<?php echo $row['id'] ?>"><i class="bi bi-trash"></i><br/></a>
				</div>
			</td>
		</tr> 
<?php 


	  }
} else {
	  echo '<div class="alert alert-danger" role="alert">
                        Vehicle Data not found!
            </div>';
	}

?>