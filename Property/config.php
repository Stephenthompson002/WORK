<?php

//Your Mysql Config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pms";

//Create New Database Connection
$con =             ;

//Check Connection
if($con->connect_error) {
	die("Connection Failed: ". $con->connect_error);
}