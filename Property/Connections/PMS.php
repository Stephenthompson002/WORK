<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_PMS = "localhost";
$database_PMS = "pms";
$username_PMS = "root";
$password_PMS = "";
$PMS = mysqli_connect("localhost","root", "","pms") or trigger_error(mysql_error(),E_USER_ERROR); 
?>