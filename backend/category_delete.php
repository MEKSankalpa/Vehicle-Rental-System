<?php

header("Content-type: application/json; charset=UTF-8");
include_once "../helpers/db.php";
if($_POST['delete']){

$category_id = intval($_POST['delete']);
$responce = '';

$sql = "DELETE FROM vehicle_category WHERE category_id='$category_id'";
if( mysqli_query($conn, $sql)){
   $responce = "success";
}else{
    $responce = "error";
}
echo json_encode($responce);

}


?>