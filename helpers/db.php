<?php


$conn =mysqli_connect('localhost', 'root', "", "vehicalrental");

if($conn->connect_error){
   echo "Sorry! Connection Error!".$conn->connect_error;
}

