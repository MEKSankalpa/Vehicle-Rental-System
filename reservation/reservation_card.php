<?php

include_once "../helpers/db.php";

$id = $_GET['reservation_id'];
$sql = "SELECT * FROM reservations WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if($count > 0){
  $row=mysqli_fetch_assoc($result);

?>

<div class="card  p-0" >
  <div class="card-header">
   <h5 id="header-name">Reservation Details</h5>
  </div>
  <div class="card-body pb-5">
    
       <div class="text-center">
        
          
       </div>

  </div>
</div>
 

<?php } ?>