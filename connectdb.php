<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "edge_jo_system";
//connect to db
$con =mysqli_connect($host,$username,$password,$db_name);
//check if the connection failed
if(!isset($con)){
    die("Connection to db failed");
}
?>
