<?php

header("Content-type: application/json; charset=UTF-8");
include_once "../helpers/db.php";
if($_POST['delete']){

$vehicle_id = intval($_POST['delete']);
$responce = '';

$sql = "DELETE FROM vehicles WHERE id='$vehicle_id'";
if( mysqli_query($conn, $sql)){
   $responce = "success";
}else{
    $responce = "error";
}
echo json_encode($responce);

}


?>