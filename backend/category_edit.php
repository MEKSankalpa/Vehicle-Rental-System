<?php

session_start();

$category_name = $_POST['category_name'];
$category_id = $_POST['category_id'];

$split = explode("/",$category_id);
$id = $split[1];

include_once "../helpers/db.php";

if (empty($category_name)) {
    echo "System Error!";
   
} else {

        $sql = "SELECT * FROM vehicle_category WHERE category_name='$category_name'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        $row   =   mysqli_fetch_assoc($result);

        if($count == 0 ){

            $query = "UPDATE vehicle_category SET category_name='$category_name' WHERE category_id='$id' ";
            if(mysqli_query($conn,$query)){
                header("Location: ../Category/index.php?edit=done");
                exit();
            }

        }else {
         
            if($row['category_id'] == $id){
                $query = "UPDATE vehicle_category SET category_name='$category_name' WHERE category_id='$id' ";
                if(mysqli_query($conn,$query)){
                    header("Location: ../Category/index.php?edit=done");
                    exit();
                } 
            }else{
                header("Location: ../Category/edit_category.php?edit=unique&id=$id");
                exit();
            }
        }

        
       }
        
      

    
