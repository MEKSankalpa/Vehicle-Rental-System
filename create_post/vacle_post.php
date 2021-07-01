<?php 
error_reporting(0);

// DB connect

            $host="localhost";
            $username="root";
            $password="";

            try
            {
            $conn= new PDO("mysql:host=$host;dbname=vehiclerental##", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            }
            catch (PDOException $e)
            {
            echo "Error: " . $e->getMessage();
            }

//Data insert
if(isset($_POST['submit']))
{
    $img1=$_FILES['img1']['name'];
    move_uploaded_file($_FILES["img1"]["tmp_name"],"../images/vehicleimages/".$_FILES["img1"]["name"]);

    $sql="INSERT INTO tblvehicles(VehiclesTitle,Category,VehiclesBrand,VehiclesOverview,PricePerDay,FuelType,ModelYear,SeatingCapacity, Vimage1,
                AirConditioner,PowerDoorLocks,AntiLockBrakingSystem,BrakeAssist,PowerSteering,DriverAirbag,PassengerAirbag,PowerWindows,CDPlayer,
                CentralLocking,CrashSensor,LeatherSeats) 
                VALUES('".addslashes($_POST['vehicletitle'])."',
                        '".addslashes($_POST['Category'])."',
                        '".addslashes($_POST['brandname'])."',
                        '".addslashes($_POST['vehicalorcview'])."',
                        '".addslashes($_POST['priceperday'])."',
                        '".addslashes($_POST['fueltype'])."',
                        '".addslashes($_POST['modelyear'])."',
                        '".addslashes($_POST['seatingcapacity'])."', '$img1',
                        '".addslashes($_POST['airconditioner'])."',
                        '".addslashes($_POST['powerdoorlocks'])."',
                        '".addslashes($_POST['antilockbrakingsys'])."',
                        '".addslashes($_POST['brakeassist'])."',
                        '".addslashes($_POST['powersteering'])."',
                        '".addslashes($_POST['driverairbag'])."',
                        '".addslashes($_POST['passengerairbag'])."',
                        '".addslashes($_POST['powerwindow'])."',
                        '".addslashes($_POST['cdplayer'])."',
                        '".addslashes($_POST['centrallocking'])."',
                        '".addslashes($_POST['crashcensor'])."',
                        '".addslashes($_POST['leatherseats'])."')";
    $conn->query($sql);

}

?>
<!--------------create post html---------------->

<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    
    <title>Vacles Rental Portal | Admin Post Vehicle</title>
<!-------------------boostrap--------------------------->
<link rel="stylesheet" href="../css/style.css">


<!----------------------css----------------------------->


</head>

<body>

    <div class="ts-main-content">

        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                                    
                        <h2 class="page-title">Create Posts</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">Basic Info</div>
                                                                

                                    <div class="panel-body">
                                        <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                    <input type="text" name="vehicletitle" class="form-control" required>
                                                   </div>

                                                <label class="col-sm-2 control-label">Select Category<span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                        <select class="selectpicker" name="Category" required>
                                                        <option class="selectpicker-list" value=""> Select </option>
                                                        <option class="selectpicker-list" value="A">A</option>
                                                        <option class="selectpicker-list" value="B">B</option>     
                                                        </select>
                                                    </div>
                                            </div><br>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Brand<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                <input type="text" name="brandname" class="form-control" required>
                                                </div>
                                            </div><br>
                                                                                        
                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Body<span style="color:red">*</span></label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" name="vehicalorcview" rows="10" required></textarea>
                                                </div>
                                            </div><br>


                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Price Per Day<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                <input type="text" name="priceperday" class="form-control" required>
                                                </div>
                                                <label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
                                                <div class="col-sm-4">
                                                    <select class="selectpicker" name="fueltype" required>
                                                        <option class="selectpicker-list" value=""> Select </option>
                                                        <option class="selectpicker-list" value="Petrol">Petrol</option>
                                                        <option class="selectpicker-list" value="Diesel">Diesel</option>
                                                        <option class="selectpicker-list" value="CNG">CNG</option>
                                                    </select>
                                                </div>
                                            </div><br>


                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                    <input type="text" name="modelyear" class="form-control" required>
                                                    </div>
                                                <label class="col-sm-2 control-label">Seating Capacity<span style="color:red">*</span></label>
                                                    <div class="col-sm-4">
                                                    <input type="text" name="seatingcapacity" class="form-control" required>
                                                    </div>
                                            </div><br>

                                            <div class="hr-dashed"></div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                <h4><b>Upload Images</b></h4>
                                                </div>
                                            </div>

                                            <main class="app">
                                                <div class="container-flex">
                                                <img :src="image"  alt="">
                                                <input type="file" @change ="fileChange" name="img1" required>
                                                </div>

                                            </main>



<br><br>
                                        </div>
                                        
                                            <div class="hr-dashed"></div>                                   
                                            </div>
                                            </div>
                                            </div>
                                            </div>
<br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">Accessories</div>
                                                                    <div class="panel-body">


                                                                                <div class="form-group">
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="airconditioner" name="airconditioner" value="1">
                                                                                        <label for="airconditioner"> Air Conditioner </label>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
                                                                                        <label for="powerdoorlocks"> Power Door Locks </label>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
                                                                                        <label for="antilockbrakingsys"> AntiLock Braking System </label>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="brakeassist" name="brakeassist" value="1">
                                                                                        <label for="brakeassist"> Brake Assist </label>
                                                                                    </div>
                                                                                </div><br><br>



                                                                                <div class="form-group">
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="powersteering" name="powersteering" value="1">
                                                                                        <label for="inlineCheckbox5"> Power Steering </label>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="driverairbag" name="driverairbag" value="1">
                                                                                        <label for="driverairbag">Driver Airbag</label>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
                                                                                        <label for="passengerairbag"> Passenger Airbag </label>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="powerwindow" name="powerwindow" value="1">
                                                                                        <label for="powerwindow"> Power Windows </label>
                                                                                    </div>
                                                                                </div><br><br>


                                                                                <div class="form-group">
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="cdplayer" name="cdplayer" value="1">
                                                                                        <label for="cdplayer"> Player </label>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="centrallocking" name="centrallocking" value="1">
                                                                                        <label for="centrallocking">Central Locking</label>
                                                                                    </div></div>
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="crashcensor" name="crashcensor" value="1">
                                                                                        <label for="crashcensor"> Crash Sensor </label>
                                                                                    </div></div>
                                                                                    <div class="col-sm-3">
                                                                                    <div class="checkbox checkbox-inline">
                                                                                        <input type="checkbox" id="leatherseats" name="leatherseats" value="1">
                                                                                        <label for="leatherseats"> Leather Seats </label>
                                                                                    </div>
                                                                                    </div>
                                                                                </div><br><br>


                                                                                <div class="form-group">
                                                                                    <div class="col-sm-8 col-sm-offset-2">
                                                                                        <button class="btn btn-default" type="reset">Cancel</button>
                                                                                        <button class="btn btn-primary" name="submit" type="submit">  Submit   </button>
                                                                                    </div>
                                                                                </div><br><br><br>

                                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------Loading Scripts------------------------- -->
    
    <script src="../js/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('vehicalorcview');
    </script>
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

</body>
</html>
