<?php

//check if the button has clicked
if (isset($_POST["btn_Add"])){
    //start receiving the data from the user
    $userUsername=$_POST["username"];
    $userPassword=$_POST["password"];
//     $userId=$_POST["u_id"];
    //proceed to connect to the DB for you to save the data
    require_once "db_connect1.php";
    //prepare the insert query to save
    $insertQueary ="INSERT INTO `users`(`id`, `username`, `password`) VALUES (null,'$userUsername','$userPassword')";
    //Use mysqli_query()to save
    $save = mysqli_query($con,$insertQueary);
    //check if the saving was succesful
    if(isset($save)){
        echo"<script>alert('User login successful')</script>";
        header('location:dashboard.php');
    }else{
        echo"<script>alert('User failed failed')</script>";
    }

}
?>
