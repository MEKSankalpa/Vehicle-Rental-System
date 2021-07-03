<?php

session_start();

$vehicle_title = $_POST['vehicletitle'];
$vehicle_category = $_POST['category'];
$price_per_day = $_POST['priceperday'];
$brand_name = $_POST['brandname'];
$model_year = $_POST['modelyear'];
$fluel_type = $_POST['fueltype'];
$seat_capacity = $_POST['seatingcapacity'];
$description = $_POST['vehicalorcview'];
$airconditioner =isset($_POST['airconditioner']) ? 1 : 0;
$powerdoorlocks =isset($_POST['powerdoorlocks']) ? 1 : 0 ;
$anti_lock_brake =isset($_POST['antilockbrakingsys']) ? 1 : 0 ;
$brakeassist =isset($_POST['brakeassist']) ? 1 : 0 ; ;
$powersteering =isset($_POST['powersteering']) ? 1 : 0 ; 
$driverairbag =isset($_POST['driverairbag']) ? 1 : 0 ; 
$passenger_air_bag =isset($_POST['passengerairbag']) ? 1 : 0 ; 
$powerwindow =isset($_POST['powerwindow']) ? 1 : 0 ;
$cdplayer =isset($_POST['cdplayer']) ? 1 : 0 ; 
$central_locking =isset($_POST['centrallocking']) ? 1 : 0 ; 
$crashcensor =isset($_POST['crashcensor']) ? 1 : 0 ; 
$leather_seats =isset($_POST['leatherseats']) ? 1 : 0 ; 



//including database connection
include_once "../helpers/db.php";

if(empty($vehicle_title) || empty($vehicle_category) || empty($price_per_day) ||empty($brand_name) ||empty($model_year) || empty($fluel_type) || empty($seat_capacity) ||empty($description) || empty($_FILES["img1"]["name"]) ){
    echo "System Error!"; 
    exit();
}else{


    $filename   = uniqid() . "-" . time(); 
    $extension  = pathinfo( $_FILES["img1"]["name"], PATHINFO_EXTENSION ); 
    $basename   = $filename . "." . $extension; 

    $source       = $_FILES["img1"]["tmp_name"];
    $destination  = "../images/vehicleimages/{$basename}";

    $image_name = $basename;
    /* move the file */
    move_uploaded_file( $source, $destination );


    move_uploaded_file($_FILES["img1"]["tmp_name"],"../images/vehicleimages/".$_FILES["img1"]["name"]); 

   $sql = "INSERT INTO vehicles(vehicle_title,vehicle_category,price_per_day,brand_name,model_year,fluel_type,seat_capacity,description,image_name,airconditioner,powerdoorlocks,anti_lock_brake,brakeassist,powersteering,driverairbag,passenger_air_bag,powerwindow,cdplayer,central_locking,crashcensor,leather_seats) VALUES ('$vehicle_title', '$vehicle_category', '$price_per_day','$brand_name','$model_year','$fluel_type','$seat_capacity','$description','$image_name','$airconditioner','$powerdoorlocks','$anti_lock_brake','$brakeassist','$powersteering','$driverairbag','$passenger_air_bag','$powerwindow','$cdplayer','$central_locking','$crashcensor','$leather_seats') ";
  
   mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    
   header("Location: ../vehicle/vehicle_list.php?vehicle=done");
   exit();
   

}




?>