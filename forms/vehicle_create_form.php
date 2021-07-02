<div class="card  p-0" >
  <div class="card-header ">
   <h5 id="header-name">Vehicle Create Form</h5>
  </div>
  <div class="card-body pb-5">
    
        <form id="vehicle_create_form" action="../backend/vehicle_create.php" novalidate method="POST" enctype="multipart/form-data" >
                <h4 class="mb-4 " style="border-bottom:2px solid #6c757d">Basic Info</h4>  

                <div class="form-group">
                    <label for="vehicletitle">Vehicle Title<span style="color:red">*</span></label>
                    <input type="text" class="form-control" name="vehicletitle" id="vehicletitle" placeholder="Enter Vehicle Title" required data-pristine-required-message="This field is required">
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="category">Select Category<span style="color:red">*</span></label>
                        <select class="form-control" name="category" id="category">
                          

                        
                        <?php
                              
                              include_once "../helpers/db.php";
                              $sql = "SELECT * FROM vehicle_category";
                              $result = mysqli_query($conn,$sql);
                              
                              $count = mysqli_num_rows($result);

                              if($count > 0){
                                echo "<option value=''>Select Category</option>";  
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='".$row['category_id']."'>" . $row['category_name'] . "</option>";
                                } 
                              
                              } else{
                                    echo "<option value=''>No Categories</option>";
                              }
                              
                           
                           ?>


                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="priceperday">Price Per Day<span style="color:red">*</span></label>
                        <input tsype="text" class="form-control" name="priceperday" id="priceperday" placeholder="Enter Price(Per Day)" required data-pristine-required-message="This field is required" data-pristine-type="number">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="brandname">Brand Name<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="brandname" id="brandname" placeholder="Enter Brand Name" required data-pristine-required-message="This field is required">
                    
                    </div>

                    <div class="form-group col-md-6">
                        <label for="modelyear">Model Year<span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="modelyear" id="modelyear" placeholder="Enter Model Year" required data-pristine-required-message="This field is required" data-pristine-type="number">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="Password">Fuel Type<span style="color:red">*</span></label>
                        <select class="form-control" name="fueltype" required data-pristine-required-message="This field is required">
                            <option class="selectpicker-list" value=""> Select </option>
                            <option class="selectpicker-list" value="Petrol">Petrol</option>
                            <option class="selectpicker-list" value="Diesel">Diesel</option>
                            <option class="selectpicker-list" value="CNG">CNG</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="seatingcapacity">Seating Capacity<span style="color:red">*</span></label>
                        <input type="number"  name="seatingcapacity" class="form-control" id="seatingcapacity" placeholder="Enter Seating Capacity" required data-pristine-required-message="This field is required" data-pristine-type="number">
                    </div>

                </div>


                <div class="form-group">
                    <label for="vehicalorcview">Discription<span style="color:red">*</span></label>
                    <textarea class="form-control" name="vehicalorcview" id="vehicalorcview" rows="3" placeholder="Enter The Discription" required data-pristine-required-message="This field is required"></textarea>
                </div>

                <div class="form-group app">
                    <label for="" class="mr-3" >Upload Image<span style="color:red">*</span></label>
                    <input type="file" @change ="fileChange" name="img1" class="mb-4"  required>
         
                    <div class="" id="image-picker" class="" >
                        <img :src="image" style="margin-bottom: 20px;  object-fit: cover; " height="350" width="350" alt="">
                        
                    </div>
                   
                </div>


               <h4 class="mt-4 " style="border-bottom:2px solid #6c757d">Features</h4>      
                
                <h6 class="mb-3">Select The Features</h6> 
                <div class="form-group ">
                    <div class="form-check form-check-inline " >
                        <input class="form-check-input" type="checkbox" id="airconditioner" name="airconditioner" value="1">
                        <label class="form-check-label" for="airconditioner">Air Conditioner</label>
                    </div>

                    <div class="form-check form-check-inline  ">
                        <input class="form-check-input" type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
                        <label class="form-check-label" for="powerdoorlocks"> Power Door Locks</label>
                    </div>

                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
                        <label class="form-check-label" for="antilockbrakingsys">AntiLock Braking System</label>
                    </div>
                    
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="checkbox" id="brakeassist" name="brakeassist" value="1">
                        <label class="form-check-label" for="brakeassist"> Brake Assist</label>
                    </div>
                   
                </div> 
               
               
        
                <div class="form-group">
                    <div class="form-check form-check-inline" >
                        <input class="form-check-input" type="checkbox" id="powersteering" name="powersteering" value="1">
                        <label class="form-check-label" for="powersteering">Power Steering</label>
                    </div>

                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="driverairbag" name="driverairbag" value="1">
                        <label class="form-check-label" for="driverairbag"> Driver Airbag</label>
                    </div>

                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
                        <label class="form-check-label" for="passengerairbag">Passenger Airbag</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="powerwindow" name="powerwindow" value="1">
                        <label class="form-check-label" for="powerwindow">Power Windows</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="cdplayer" name="cdplayer" value="1">
                        <label class="form-check-label" for="cdplayer">CD Player</label>
                    </div>

                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="centrallocking" name="centrallocking" value="1">
                        <label class="form-check-label" for="centrallocking"> Central Locking</label>
                    </div>

                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="checkbox" id="crashcensor" name="crashcensor" value="1">
                        <label class="form-check-label" for="crashcensor"> Crash Sensor</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="leatherseats" name="leatherseats" value="1">
                        <label class="form-check-label" for="leatherseats">Leather Seats</label>
                    </div>
                </div>
                <button id="vehicle_submit" class="btn btn-primary vehicle-create-button">CREAT PRODUCCT</button>
                <div class="text-center mt-4">
                   
                   
               </div> 
               
        </form>
   
       
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>


var app = new Vue({
            el: '.app',
            data: {
            image: "https://www.gorilla-cannabis-seeds.co.uk/images/product_image_not_found.gif"
                },

            methods: {
                        fileChange(e){
                        const file = e.target.files[0]
                        this.image = URL.createObjectURL(file)
                        }
                    },
                })



                
    </script>   