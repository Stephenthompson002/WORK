<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "ecommerece";

// Create connection
$con = mysqli_connect("localhost","root", "","onlineshop");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
