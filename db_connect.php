<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "edge_cm_system";
//connect to db
$connection =mysqli_connect($host,$user,$pass,$db_name);
//check if the connection failed
if(!isset($connection)){
    die("Connection to db failed");
}
?>
