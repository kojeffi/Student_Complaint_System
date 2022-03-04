<?php
//check if the delete link has been clicked
if(isset($_GET["st_id"])){
    $studentId=$_GET["st_id"];
}
//connect to the database to delete
require_once "connectdb.php";
//prepare to delete
$deleteQuery="DELETE FROM `st_info` WHERE id='$studentId'";
//use mysqli_query()to implement the deletion
$delete=mysqli_query($con,$deleteQuery);
//check if deletion was successful
if(isset($delete)){
    //Redirect back to users.php to confirm the deletion action
    header("location:index_users.php");
}else{
    echo "Deletion failed!!!";
}
?>

