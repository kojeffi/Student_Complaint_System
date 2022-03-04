<?php
//check if the update link has been clicked
if(isset($_GET["st_id"])){
    //start receiving the data from the link
    $receivestudentFullname=$_GET["st_fullname"];
    $receivestudentDOB=$_GET["st_dob"];
    $receivestudentAddress=$_GET["st_address"];
    $receivestudentDistrict=$_GET["st_district"];
    $receivestudentGender=$_GET["st_gender"];
    $receivestudentMobile=$_GET["st_mobile"];
    $receivestudentFather=$_GET["st_father"];
    $receivestudentState=$_GET["st_state"];

}else{
    //redirect the user back to user.php for them to click on the update link
    header("location:index_users.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!--    Start of connection to bootstrap js-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <!--    End of connection bootstrap js-->

    <!--    start of connection to bootstrap css-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
    <!--    End of connection to bootstrap css-->

    <style>
        body{
            background-image: url("assets/images/bg2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<!--start of Navbar-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <img class="rounded-circle" src="dist/img/avatar3.png" alt="logo" style="width: 60px">
    <a class="navbar-brand text-danger h1 text-center" href="index.php">COMPLAINT<br>MANAGEMENT<br>SYSTEM<br>
    </a>
    <h1>Welcome to Student Update Page</h1>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="registration.php"></a>
            </li>
        </ul>
    </div>
</nav>
<!--End of Navbar-->
<br>
<div class="col-md-6 w3l_about_bottom_right one">
    <div class="abt-w3l">
        <div class="header-w3l">
            <h2 class="text-danger"> Student Admission Form</h2>
            <h4>Enter the Following Details</h4>
            <form action="index_handler.php" method="post" class="mod2">
                <div class="col-md-6 col-xs-6 w3l-left-mk">
                    <ul>
                        <li class="text">Name of Applicant :  </li>
                        <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                            <input value="<?php echo $receivestudentFullname;?>" name="st_fullname" type="text" required=""></li>
                        <li class="text">Date of Birth :  </li>
                        <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true">

                            </i><input value="<?php echo $receivestudentDOB;?>"  class="date" id="datepicker" name="st_dob" type="text" value=""
                                       onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" /></li>
                        <li class="text">Father Name  :  </li>
                        <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true">

                            </i><input value="<?php echo $receivestudentFather;?> "name="st_father" type="text" required=""></li>
                        <li class="text">Gender  :  </li>
                        <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                            <input value="<?php echo $receivestudentGender;?> "name="st_gender" type="text" required=""></li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-6 w3l-right-mk">
                    <ul>
                        <li class="text">mobile no  :  </li>
                        <li class="agileits-main"><i class="fa fa-phone" aria-hidden="true">

                            </i><input value="<?php echo $receivestudentMobile;?>"name="st_mobile" type="text" required=""></li>
                        <li class="text">Address  :  </li>
                        <li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i>
                            <input value="<?php echo $receivestudentAddress;?>"name="st_address" type="text" required=""></li>
                        <li class="text">District  :  </li>
                        <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            <input value="<?php echo $receivestudentDistrict;?>" name="st_district" type="text" required=""></li>
                        <li class="text">State  :  </li>
                        <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true">

                            </i><input value="<?php echo $receivestudentState;?>"name="st_state" type="text" required=""></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="agile-submit">
                    <input name="btn_Update" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Modal2 -->

</body>
</html>