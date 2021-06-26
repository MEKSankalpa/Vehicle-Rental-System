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
        $sql = "INSERT INTO vehicle_category(category_name) VALUES(?)";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "s", $category_name);
        mysqli_stmt_execute($stmt);
        
        header("Location: ../Category/create_category.php?create=done");
        exit();
    }
}
