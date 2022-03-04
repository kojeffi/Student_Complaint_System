<?php
//check if the delete link has been clicked
if(isset($_GET["u_id"])){
    $userId=$_GET["u_id"];
}
//connect to the database to delete
require_once "db_connect1.php";
//prepare to delete
$deleteQuery="DELETE FROM `users` WHERE id ='$userId'";
//use mysqli_query()to implement the deletion
$delete=mysqli_query($con,$deleteQuery);
//check if deletion was successful
if(isset($delete)){
    //Redirect back to users.php to confirm the deletion action
    header("location:login_users.php");
}else{
    echo "Deletion failed!!!";
}
?>

