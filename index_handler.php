<?php
//check if the button has been clicked
if (isset($_POST["btn_Add"])){
    //start receiving the data from the user
    $studentFullname=$_POST["st_fullname"];
    $studentDOB=$_POST["st_dob"];
    $studentAddress=$_POST["st_address"];
    $studentDistrict=$_POST["st_district"];
    $studentGender=$_POST["st_gender"];
    $studentFather=$_POST["st_father"];
    $studentState=$_POST["st_state"];
    require_once "connectdb.php";
    //prepare the insert query to save
    $insertQuery="INSERT INTO `st_info`(`st_id`, `st_fullname`, 
                      `st_dob`, `st_address`, `st_district`, `st_gender`, `st_father`, `st_state`) VALUES 
                    (null,'$studentFullname','$studentDOB','$studentAddress','$studentDistrict','$studentGender',
                     '$studentFather','$studentState')   ";
    //Use mysqli_query()to save
    $save = mysqli_query($con,$insertQuery);
    //check if the saving was successful
    if(isset($save)){
        echo"<script>alert('successfully Registered')</script>";
        header('location:index[1].php');
    }else{
        echo"<script>alert('submission failed')</script>";
    }
}
?>

