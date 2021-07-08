<?php 

include_once "../helpers/db.php";

if (isset($_GET['v_id'])) {

    $vehicle_id = $_GET['v_id'];
    $sql = "SELECT * FROM vehicles WHERE id='$vehicle_id'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
?>

<div class="card  p-0 w-75" >
    <div class="card-header text-center pb-0">
        <h5 id="header-name" ><?php  echo $row['vehicle_title'] ?> </h5>
        <p class="text-white">(V/<?php echo $row['id'] ?>)</p>
    </div>
    <div class="card-body pb-5">
         
        <div class="row">
            <div class="col-sm-6 text-center py-2" style="border-right:2px solid #063d42;">
                 <img src="../images/vehicleimages/<?php echo $row['image_name'] ?>" width="350"  height="350" alt="product image" srcset="">
                 <br>
                 <div class="mt-4">
                    <p class="text-justify"><?php echo $row['description'] ?></p> 
                 </div>
            </div>
            <div class="col-sm-6  pl-3">
                 
                <div class="row ml-3 mb-3">
                    <div class="col-sm-3"> <strong>Price Per Day </strong> </div>
                    <div class="col-sm-3">:<?php echo $row['price_per_day'] ?></div>
                </div>

                <div class="row ml-3 mb-3">
                    <div class="col-sm-3"> <strong>Brand Name</strong> </div>
                    <div class="col-sm-3">:<?php echo $row['brand_name'] ?></div>
                </div>

                <div class="row ml-3 mb-3">
                    <div class="col-sm-3"> <strong>Modle Year</strong> </div>
                    <div class="col-sm-3">:<?php echo $row['model_year'] ?></div>
                </div>

                <div class="row ml-3 mb-3">
                    <div class="col-sm-3"> <strong>Fluel Type</strong> </div>
                    <div class="col-sm-3">:<?php echo $row['fluel_type'] ?></div>
                </div>

                <div class="row ml-3 mb-3">
                    <div class="col-sm-3"> <strong>Seat Capasity</strong> </div>
                    <div class="col-sm-3">:<?php echo $row['seat_capacity'] ?></div>
                </div>
                
                <div class=" ml-4 mt-4" >
                      <h5 class="text-center"><strong style="border-bottom:2px solid #063d42;">Features</strong></h5>
                   
                </div>
               
                <?php  if($row['airconditioner'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/air-conditioner.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Air Condotioner</strong></div>
                    </div>   
                
                <?php } ?> 

                <?php  if($row['powerdoorlocks'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/car-key.png" alt="" width="75" height="70" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Electric Door Lock</strong></div>
                    </div>   
                
                <?php } ?> 

                
                <?php  if($row['anti_lock_brake'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/disc-brake.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Anti Lock Brake</strong></div>
                    </div>   
                
                <?php } ?> 

                <?php  if($row['brakeassist'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/brake.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Brake Assist</strong></div>
                    </div>   
                
                <?php } ?>

                <?php  if($row['powersteering'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/steering.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Power Steering</strong></div>
                    </div>   
                
                <?php } ?>

                <?php  if($row['driverairbag'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/air.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Driver Airbag</strong></div>
                    </div>   
                
                <?php } ?>

                <?php  if($row['passenger_air_bag'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/airbag.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Passenger Airbag</strong></div>
                    </div>   
                
                <?php } ?>

                <?php  if($row['powerwindow'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/window.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Power Window</strong></div>
                    </div>   
                
                <?php } ?>

                <?php  if($row['cdplayer'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/car-radio.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Player</strong></div>
                    </div>   
                
                <?php } ?>

                <?php  if($row['crashcensor'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/3d-sensor.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Crash Sensor</strong></div>
                    </div>   
                
                <?php } ?>

                <?php  if($row['leather_seats'] == 1){ ?>
                    <div class="row ml-3 mb-4" >
                        <div class="col-sm-3">
                            <img src="../images/icons/car-seat.png" alt="" width="75" height="75" srcset="">;  
                        </div>
                        <div class="col-sm-4 mt-3" ><strong >Leather Seats</strong></div>
                    </div>   
                
                <?php } ?>

                

            </div>

            </div>
        </div>

       <div class="mx-auto mb-4">
            <a href="../vehicle/vehicle_list.php" class="btn btn-outline-warning submit-btn">SAVE DETAILS</a>
       </div>

    </div>
</div>    

<?php }else{ echo "Somthing Error!"; } ?>