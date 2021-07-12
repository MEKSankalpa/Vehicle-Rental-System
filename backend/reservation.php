<?php

session_start();

$reserver_title = $_POST['reserver_title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$tele = $_POST['tele'];
$contact_me = $_POST['contact_me'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$vehicle_name = $_POST['vehicle_name'];
$pick_up_date = $_POST['pick_up_date'];
$pick_up_time = $_POST['pick_up_time'];
$drop_off_date = $_POST['drop_off_date']; 
$drop_off_time = $_POST['drop_off_time']; 
$passangers = $_POST['passangers']; 
$driver = $_POST['driver']; 
$pick_up_location = $_POST['pick_up_location']; 
$reserve_date = $_POST['reserve_date'];
$rental_cost = $_POST['rental_cost']; 


//including database connection
include_once "../helpers/db.php";

require('../payment/config.php');

if(empty($reserver_title) || empty($first_name) || empty($last_name) ||empty($tele) ||empty($contact_me) || empty($email) ||empty($vehicle_name) ||empty($pick_up_date) ||empty($pick_up_time) ||empty($drop_off_date) ||empty($drop_off_time) ||empty($passangers) ||empty($driver) ||empty($pick_up_location) ||empty($reserve_date) ||empty($rental_cost)  ){
    echo "System Error!"; 
    exit();
}else{

   $reserver_name = $first_name." ".$last_name;

    if(isset($_POST['stripeToken'])){
        \Stripe\Stripe::setVerifySslCerts(false);

        $token=$_POST['stripeToken'];

        $data=\Stripe\Charge::create(array(
            "amount"=>$rental_cost,
            "currency"=>"inr",
            "description"=>"".$reserver_name." has completed his payment!",
            "source"=>$token,
        ));

        if($data){

            $sql = "INSERT INTO reservations(reserver_title,reserver_name,reserver_mobile,reserver_email,contact_type,comment,selected_vehicle,reserve_from,reserve_to,pick_up_time,drop_off_time,passangers,driver,pick_up_location,reserve_date,rental_cost) VALUES ('$reserver_title', '$reserver_name', '$tele','$email','$contact_me','$comment','$vehicle_name','$pick_up_date','$drop_off_date','$pick_up_time','$drop_off_time','$passangers','$driver','$pick_up_location','$reserve_date','$rental_cost') ";
            mysqli_query($conn, $sql) or die(mysqli_error($conn));                 
            header("Location: ../layouts/welcome.php?reservation=done");
            exit();
            
        }
    }


}




?>