<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

include_once "../helpers/db.php";

if (empty($email) || empty($password)) {
    echo "System Error!";
} else {
    $query = "SELECT * FROM users WHERE email='$email' ";
    $results = mysqli_query($conn, $query);
    $count = mysqli_num_rows($results);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($results);
        $saved_pass = $row['password'];
        if (password_verify($password, $saved_pass)) {

            $user = $row['user_name'];
            $_SESSION["user_name"] = $user;
            $_SESSION["user_id"] =  $row['id'];
            $_SESSION["user_role"] =  $row['role'];

            if($row['role'] == "admin"){
                header("Location: ../Pages/dashboard.php?login=success");
                exit();
            }else{
                header("Location: ../layouts/welcome.php?login=success");
                exit();
            }

            

        } else {

            header("Location: ../layouts/welcome.php?login=failed");
            exit();
        }

    } else {

        header("Location: ../layouts/welcome.php?login=failed");
        exit();
    }
}
