<?php
//check if the button has clicked
if (isset($_POST["btn_Add"])){
    //start receiving the data from the user
    $userFullname=$_POST["fullname"];
    $userEmail=$_POST["email"];
    $userPassword=$_POST["password"];
    $userContact=$_POST["contactno"];
//    $userId=$_POST["id"];
    //proceed to connect to the DB for you to save the data
    require_once "db_connection.php";
    //prepare the insert query to save
    $insertQuery ="INSERT INTO `users`(`id`, `fullname`, `email`, `password`, `contactno`)
 VALUES (null,'$userFullname','$userEmail','$userPassword',$userContact'') ";
    //Use mysqli_query()to save
    $save = mysqli_query($con,$insertQuery);
    //check if the saving was successful
    if(isset($save)){
        echo"<script>alert('User registration successful your being Directed To sign- in page')</script>";
        header("location:index[1].php");
    }else{
        echo"<script>alert('User registered failed')</script>";
    }

}
?>