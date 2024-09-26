<?php

//Your Mysql Config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

//Create New Database Connection
$conn = mysqli_connect("localhost","root", "","database");

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}