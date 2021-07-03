<?php 
			  
$sql = "SELECT * FROM vehicles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // output data of each row
	while($row = $result->fetch_assoc()) {?>
		<tr>

			<td><?php echo $row["id"]?></td>
            <td><?php echo $row["vehicle_title"]?></td>
			<td><?php echo $row["description"]?></td>
			<td><?php echo $row["vehicle_category"]?></td>
			<td><?php echo $row["brand_name"]?></td>
			<td><?php echo $row["model_year"]?></td>
			<td><?php echo $row["seat_capacity"]?></td>
			<td><?php echo $row["price_per_day"]?></td>	  
			<td><?php echo $row["fluel_type"]?></td>
			<td>
				<div class="btn-group btn-group-sm">
					<a href="#" class="btn btn-outline-primary" id="view-btn"><i class="bi bi-eye-fill"></i><br/>View</a>
					<a href="#" class="btn btn-outline-success " id="edit-btn"><i class="bi bi-pencil-square"></i><br/>Edit</a>
					<a href="#" class="btn btn-outline-danger" id="delete-btn"><i class="bi bi-trash"></i><br/>Delete</a>
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