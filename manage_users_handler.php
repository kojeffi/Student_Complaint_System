<?php
//check if the button has clicked
if (isset($_POST["btn_Add"])) {
    //start receiving the data from the user
    $userFullname = $_POST["name"];
    $userEmail = $_POST["email"];
    $userContact = $_POST["contact"];
    $userUsername = $_POST["username"];
    $userPassword = $_POST["password"];
    $userStatus = $_POST["status"];
    $userFile = $_POST["file"];
    $userId = $_POST["id"];
    //proceed to connect to the DB for you to save the data
    require_once "db_connect4.php";
    //prepare the insert query to save
    $insertQuery = "INSERT INTO `users`(`id`, `name`, `email`, `contact`,
                    `username`, `password`, `status`, `file`)
                     VALUES (null,'$userFullname','$userEmail','$userContact','$userUsername',
                             '$userPassword','$userStatus','$userFile') ";
    //Use mysqli_query()to save
    $save = mysqli_query($connection, $insertQuery);
    //check if the saving was successful
    if (isset($save)) {
        echo "<script>alert('User registration successful your being Directed To sign- in page')</script>";
        header("location:manage_users.php");
    } else {
        echo "<script>alert('User registered failed')</script>";
    }
}
?>
