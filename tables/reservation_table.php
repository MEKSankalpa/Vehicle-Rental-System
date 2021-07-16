<?php 

include_once "../helpers/db.php";
		   
$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // output data of each row
	while($row = $result->fetch_assoc()) {?>
		<tr>

			<td>R/<?php echo str_pad($row["id"],'3',0, STR_PAD_LEFT ) ?></td>
            <td><?php echo $row["reserve_date"]?></td>
            <td><?php echo ($row['reserver_title'].". ".$row["reserver_name"]) ?></td>
			<td><?php echo $row["reserver_mobile"]?></td>
			<td>V/<?php echo str_pad($row["selected_vehicle"],'3',0, STR_PAD_LEFT )?></td>
			<td><?php echo $row["reserve_from"]?></td>	  
			<td><?php echo $row["reserve_to"]?></td>
			<td>
               <?php 
               
                    if(!isset($row["status"])){

                        echo   '<a href="" class="btn btn-outline-primary">Approve</a>'; 
                    
                        
                    }else{
                       
                        echo '<a href="#" disabled class="btn btn-outline-success"><i class="fa fa-check-square-o mr-2" aria-hidden="true"></i>Approved</a>';
                    }
               
               ?>
              
            
		   </td>
		</tr> 
<?php 


	  }
} else {
	  echo '<div class="alert alert-danger" role="alert">
                        No Reservations!
            </div>';
	}

?>