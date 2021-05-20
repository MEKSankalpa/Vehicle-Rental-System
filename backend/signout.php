<?php
session_start();


if(isset($_SESSION['user_name'])){

    unset($_SESSION['user_name']);
    header('Location: ../layouts/welcome.php?signout=done');
    exit();
    
}





?>