<?php

global $conn;
$conn =mysqli_connect('localhost', 'root', '', 'vehiclerental');

if ($conn->connect_error) {
    echo "Sorry! Connection Error!".$conn->connect_error;
}
