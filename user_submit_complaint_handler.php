<?php
  //check if the button has been clicked
  if (isset($_POST["btn_Add"])){
      //start receiving the data from the user
      $complaintName=$_POST["u_name"];
      $complaintRegistrationNumber=$_POST["u_reg"];
      $complaintPhoneNumber=$_POST["u_phone_number"];
      $complaintEmail=$_POST["u_email"];
      $complaintGender=$_POST["u_gender"];
      $complaintCategory=$_POST["u_category"];
      $complaintDescription=$_POST["u_description"];
      $complaintDate=$_POST["u_date"];
      $complaintYearOfStudy=$_POST["u_year"];
      $complaintFile=$_POST["u_file"];
      //proceed to connect to the DB for you to save the data
      require_once "db_connection.php";
      //prepare the insert query to save
      $insertQuery="INSERT INTO `complaints`(`id`, `u_name`, `u_reg`, `u_phone_number`, `u_email`, `u_gender`, 
                         `u_category`, `u_description`, `u_date`, `u_year`,`u_file`) VALUES
                     (null,'$complaintName','$complaintRegistrationNumber','$complaintPhoneNumber',
                      '$complaintEmail','$complaintGender','$complaintCategory',
                      '$complaintDescription','$complaintDate','$complaintYearOfStudy','$complaintFile') ";
      //Use mysqli_query()to save
      $save = mysqli_query($con,$insertQuery);
      //check if the saving was successful
      if(isset($save)){
          echo"<script>alert('successfully submitted the complaint,Wait for Your Feedback')</script>";
          header('location:dashboard.php');
      }else{
          echo"<script>alert('submission failed')</script>";
      }
  }
?>
