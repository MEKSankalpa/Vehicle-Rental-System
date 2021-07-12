<?php
session_start();


if(isset($_SESSION['user_name'])){

    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_role']);
    header('Location: ../layouts/welcome.php?signout=done');
    exit();
    
}





?>