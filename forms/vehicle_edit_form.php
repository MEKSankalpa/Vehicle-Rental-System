<?php


include_once "../helpers/db.php";


$vehicle_id = $_GET['vehicle_id'];
$query = "SELECT * FROM vehicles WHERE id='$vehicle_id'";
$values = mysqli_query($conn,$query);
$count1 = mysqli_num_rows($values);

if($count1 > 0){
  $vehicles=mysqli_fetch_assoc($values);

?>



<div class="card  p-0" >
  <div class="card-header ">
   <h5 id="header-name">Vehicle Edit Form</h5>
  </div>
  <div class="card-body pb-5">
    
        <form id="vehicle_create_form" action="../backend/vehicle_edit.php" novalidate method="POST" enctype="multipart/form-data" >
                <h4 class="mb-4 " style="border-bottom:2px solid #6c757d">Basic Info</h4>  
                  <input type="hidden" name="vehicle_id" value="<?php echo  $vehicles['id'] ?>">
                <div class="form-group">
                    <label for="vehicletitle">Vehicle Title<span style="color:red">*</span></label>
                    <input type="text" class="form-control" name="vehicletitle" id="vehicletitle" placeholder="Enter Vehicle Title" required data-pristine-required-message="This field is required"
                    value="<?php echo $vehicles['vehicle_title'] ?>"
                    
                    >
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="category">Select Category<span style="color:red">*</span></label>
                        <select class="form-control" name="category" id="category">
                          

                        
                        <?php
                              
                             
                              $sql = "SELECT * FROM vehicle_category";
                              $result = mysqli_query($conn,$sql);
                              $count = mysqli_num_rows($result);

                              if($count > 0){
                                
                                while($row = mysqli_fetch_assoc($result)){  ?>
                                    <option value='<?php echo $row['category_id'] ?>'  <?php  if($row['category_id'] === $vehicles['vehicle_category']){ echo  'selected="selected"'; } ?>  ><?php echo $row['category_name'] ?></option>
                                    
                              <?php } 
                              
                              } else{
                                    echo "<option value=''>No Categories</option>";
                              }
                              
                           
                           ?>


                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="priceperday">Price Per Day<span style="color:red">*</span></label>
                        <input tsype="text" class="form-control" name="priceperday" id="priceperday" placeholder="Enter Price(Per Day)" required data-pristine-required-message="This field is required" data-pristine-type="number"
                        value="<?php echo $vehicles['price_per_day'] ?>"
                        >
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="brandname">Brand Name<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="brandname" id="brandname" placeholder="Enter Brand Name" required data-pristine-required-message="This field is required"
                        value="<?php echo $vehicles['brand_name'] ?>"
                        >
                    
                    </div>

                    <div class="form-group col-md-6">
                        <label for="modelyear">Model Year<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="modelyear" id="modelyear" placeholder="Enter Model Year" required data-pristine-required-message="This field is required" data-pristine-type="number"
                        value="<?php echo $vehicles['model_year'] ?>"
                        >
                    </div>

                </div>

                <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="engine_capacity">Engine Capacity<span style="color:red">*</span></label>
                    <input type="text" class="form-control" name="engine_capacity" id="engine_capacity" placeholder="Enter Engine Capacity" required data-pristine-required-message="This field is required"   
                      value="<?php echo $vehicles['engine_capacity'] ?>"

                    >

                </div>

                <div class="form-group col-md-6">
                    <label for="transmission">Transmission <span style="color:red">*</span></label>
                    <select class="form-control" name="transmission" required data-pristine-required-message="This field is required">
                        <option class="selectpicker-list" value="<?php echo $vehicles['transmission'] ?>"> <?php echo $vehicles['transmission']  ?></option>    
                        <option class="selectpicker-list" value="Manual"> Manual </option>
                        <option class="selectpicker-list" value="Auto">Auto</option>
                    </select>
                </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="Password">Fuel Type<span style="color:red">*</span></label>
                        <select class="form-control" name="fueltype" required data-pristine-required-message="This field is required">
                            <option class="selectpicker-list" value="<?php echo $vehicles['fluel_type'] ?>"> <?php echo $vehicles['fluel_type']  ?> </option>
                            <option class="selectpicker-list" value="Petrol">Petrol</option>
                            <option class="selectpicker-list" value="Diesel">Diesel</option>
                            <option class="selectpicker-list" value="CNG">CNG</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="seatingcapacity">Seating Capacity<span style="color:red">*</span></label>
                        <input type="text"  name="seatingcapacity" class="form-control" id="seatingcapacity" placeholder="Enter Seating Capacity" required data-pristine-required-message="This field is required" data-pristine-type="number"
                        value="<?php echo $vehicles['seat_capacity'] ?>"
                        >
                    </div>

                </div>


                <div class="form-group">
                    <label for="vehicalorcview">Discription<span style="color:red">*</span></label>
                    <textarea class="form-control" name="vehicalorcview" id="vehicalorcview" rows="3" placeholder="Enter The Discription" required data-pristine-required-message="This field is required"><?php echo $vehicles['description'] ?></textarea>
                </div>

                <div class="form-group app">
                    <label for="" class="mr-3" >Upload Image<span style="color:red">*</span></label>
                    <input type="file" @change ="fileChange" name="img1" class="mb-4"  >
         
                    <div class="" id="image-picker" class="" >
                        <img :src="image" style="margin-bottom: 20px;  object-fit: cover; " height="350" width="" alt="">
                        
                    </div>
                   
                </div>


               <h4 class="mt-4 " style="border-bottom:2px solid #6c757d">Features</h4>      
                
                <h6 class="mb-3">Select The Features</h6> 
                <div class="form-group ">
                    <div class="form-check form-check-inline " >
                        <input class="form-check-input" type="checkbox" id="airconditioner" name="airconditioner" value="1"  <?php if($vehicles['airconditioner'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="airconditioner">Air Conditioner</label>
                    </div>

                    <div class="form-check form-check-inline  ">
                        <input class="form-check-input" type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1" <?php if($vehicles['powerdoorlocks'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="powerdoorlocks"> Power Door Locks</label>
                    </div>

                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1" <?php if($vehicles['anti_lock_brake'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="antilockbrakingsys">AntiLock Braking System</label>
                    </div>
                    
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="checkbox" id="brakeassist" name="brakeassist" value="1" <?php if($vehicles['brakeassist'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="brakeassist"> Brake Assist</label>
                    </div>
                   
                </div> 
               
               
        
                <div class="form-group">
                    <div class="form-check form-check-inline" >
                        <input class="form-check-input" type="checkbox" id="powersteering" name="powersteering" value="1" <?php if($vehicles['powersteering'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="powersteering">Power Steering</label>
                    </div>

                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="driverairbag" name="driverairbag" value="1" <?php if($vehicles['driverairbag'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="driverairbag"> Driver Airbag</label>
                    </div>

                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="passengerairbag" name="passengerairbag" value="1" <?php if($vehicles['passenger_air_bag'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="passengerairbag">Passenger Airbag</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="powerwindow" name="powerwindow" value="1" <?php if($vehicles['powerwindow'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="powerwindow">Power Windows</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="cdplayer" name="cdplayer" value="1" <?php if($vehicles['cdplayer'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="cdplayer">CD Player</label>
                    </div>

                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="centrallocking" name="centrallocking" value="1" <?php if($vehicles['central_locking'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="centrallocking"> Central Locking</label>
                    </div>

                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="crashcensor" name="crashcensor" value="1" <?php if($vehicles['crashcensor'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="crashcensor"> Crash Sensor</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="leatherseats" name="leatherseats" value="1" <?php if($vehicles['leather_seats'] == 1)  echo 'checked="checked"'; ?>>
                        <label class="form-check-label" for="leatherseats">Leather Seats</label>
                    </div>
                </div>

                
                <div class="text-center mt-4">
                <button id="vehicle_submit" class="btn btn-outline-warning submit-btn">UPDATE VEHICLE DETAILS</button>
                   
               </div> 
                <!-- Update Alert -->
                <?php  if(isset($_GET['update'])) { if($_GET['update'] == 'done'){ ?>  
                            
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Product Updated!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>

                    <?php } } ?>
               
               
        </form>
   
       
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>


var app = new Vue({
            el: '.app',
            data: {
            image: "../images/vehicleimages/<?php echo $vehicles['image_name'] ?>"
                },

            methods: {
                        fileChange(e){
                        const file = e.target.files[0]
                        this.image = URL.createObjectURL(file)
                        }
                    },
                })

                
</script>   

<?php
    }

    ?>