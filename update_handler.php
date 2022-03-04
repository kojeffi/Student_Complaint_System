<?php
//check if the update link has been clicked
if(isset($_POST["btn_Add"])){
    //start receiving the data from the link
    $UpdateFullname = $_POST["fullname"];
    $updateEmail = $_POST["email"];
    $updatePassword= $_POST["password"];
    $updateContact = $_POST["contactno"];
//    $updatedId=$_POST["id"];
    //connect to the database to update
    require_once "db_connect.php";
    //prepare the update query
    $updateQuery="UPDATE `users` SET `id`=null,`fullname`='$UpdateFullname',`email`='$updateEmail',
                   `password`='$updatePassword',`contactno`='$updateContact' WHERE 1";
    //use mysqli_query() to execute the update query
    $update = mysqli_query($connection,$updateQuery);
    //check if the update was successful
    if(isset($update)){
        //Redirect the user back to users.php to see changes
        echo "updating Successful";
        header('location:admin.php');
    }else{
        die("Updating failed");
    }
}
?>