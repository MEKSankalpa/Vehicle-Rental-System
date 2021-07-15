<?php

session_start();

$category_name = $_POST['category_name'];

include_once "../helpers/db.php";

if (empty($category_name)) {
    echo "System Error!";
} else {

    $query = "SELECT * FROM vehicle_category WHERE category_name='$category_name' ";
    $results = mysqli_query($conn, $query);
    $count = mysqli_num_rows($results);

    if ($count > 0) {
        header("Location: ../Category/create_category.php?cname=unique");
        exit();
    } else {

        $filename   = uniqid() . "-" . time(); 
        $extension  = pathinfo( $_FILES["category_img"]["name"], PATHINFO_EXTENSION ); 
        $basename   = $filename . "." . $extension; 
    
        $source       = $_FILES["category_img"]["tmp_name"];
        $destination  = "../images/category_images/{$basename}";
    
        $image_name = $basename;
        /* move the file */
        move_uploaded_file( $source, $destination );
    
    
        move_uploaded_file($_FILES["category_img"]["tmp_name"],"../images/vehicleimages/".$_FILES["category_img"]["name"]); 

        $sql = "INSERT INTO vehicle_category(category_name,category_image) VALUES(?,?)";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $category_name, $image_name);
        mysqli_stmt_execute($stmt);
        
        header("Location: ../Category/index.php?create=done");
        exit();
    }
}
