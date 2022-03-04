<?php
//check if the button update has been clicked
if(isset($_POST["btn_reg"])){
    //start receiving the updated data
    $updatedName = $_POST["u_name"];
    $updatedRegistrationNumber=$_POST["u_reg"];
    $updatedPhoneNumber=$_POST["u_phone_number"];
    $updatedEmail=$_POST["u_email"];
    $updatedGender=$_POST["u_gender"];
    $updatedCategory=$_POST["u_category"];
    $updatedDescription=$_POST["u_description"];
    $updatedDate=$_POST["u_date"];
    $updatedYearOfStudy=$_POST["u_year"];
    $updatedFile=$_POST["u_file"];
    $updatedId=$_POST["u_id"];
    //connect to the database to update
    require_once "db_connection.php";
    //prepare the update query
    $updateQuery="UPDATE `complaints` SET `id`=null,`u_name`='$updatedName',`u_reg`='$updatedRegistrationNumber',
                        `u_phone_number`='$updatedPhoneNumber',
                        `u_email`='$updatedEmail',`u_gender`='$updatedGender',`u_category`='$updatedCategory',
                        `u_description`='$updatedDescription',
                        `u_date`='$updatedDate',`u_year`='$updatedYearOfStudy',
                        `u_file`='$updatedFile' WHERE  id='$updatedId'";
    //use mysqli_query() to execute the update query
    $update = mysqli_query($con,$updateQuery);
    //check if the update was successful
    if(isset($update)){
        //Redirect the user back to users.php to see changes
        header("location:complaints.php");
    }else{
        die("Updating failed");
    }
}






