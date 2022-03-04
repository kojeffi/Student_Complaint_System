<?php
//check if the update link has been clicked
if(isset($_POST["btn_Update"])){
    //start receiving the data from the link
    $updatestudentFullname=$_POST["st_fullname"];
    $updatestudentDOB=$_POST["st_dob"];
    $updatestudentAddress=$_POST["st_address"];
    $updatestudentDistrict=$_POST["st_district"];
    $updatestudentGender=$_POST["st_gender"];
    $updatestudentMobile=$_POST["st_mobile"];
    $updatestudentFather=$_POST["st_father"];
    $updatestudentState=$_POST["st_state"];
//    $updatedId=$_POST["id"];
    //connect to the database to update
    require_once "connectdb.php";
    //prepare the update query
    $updateQuery="UPDATE `st_info` SET `st_id`=null,`st_fullname`='$updatestudentFullname',
                     `st_dob`='$updatestudentDOB',`st_address`='$updatestudentAddress',`st_district`='$updatestudentDistrict',`st_gender`='$updatestudentGender',
                     `st_mobile`='$updatestudentMobile',`st_father`='$updatestudentFather',`st_state`='$updatestudentState' WHERE 1  ";
    //use mysqli_query() to execute the update query
    $update = mysqli_query($con,$updateQuery);
    //check if the update was successful
    if(isset($update)){
        //Redirect the user back to users.php to see changes
        echo "updating Successful";
        header('location:index_users.php');
    }else{
        die("Updating failed");
    }
}
?>
