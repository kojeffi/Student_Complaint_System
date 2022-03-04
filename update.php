<?php
//check if the update link has been clicked
if(isset($_GET["u_id"])){
    //start receiving the data from the link
    $receiveFullname = $_GET["fullname"];
    $receiveEmail = $_GET["email"];
    $receivePassword= $_GET["password"];
    $receiveContact = $_GET["contactno"];

}else{
    //redirect the user back to user.php for them to click on the update link
    header("location:registration_users.php");
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
        <h1>Welcome to This Update Page</h1>
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
<div id="login-page">
    <div class="container">
        <form class="form-login" method="post" action="update_handler.php">
            <h2 class="form-login-heading h1 text-center">User Registration</h2>
            <div class="login-wrap">
                <input value="<?php echo $receiveFullname;?>"
                       type="text" class="form-control" placeholder="Full Name"
                       name="fullname" required="required" autofocus>
                <br>
                <input value="<?php echo $receiveEmail;?>"  type="email"
                       class="form-control" placeholder="User ID" id="email"
                       onBlur="userAvailability()" name="email" required="required">
                <span id="user-availability-status1" style="font-size:12px;"></span>
                <br>
                <input value="<?php echo $receivePassword;?>"  type="password"
                       class="form-control" placeholder="Password"
                       required="required" name="password"><br >
                <input value="<?php echo $receiveContact;?>"   type="text"
                       class="form-control" maxlength="10" name="contactno" placeholder="Contact no" required="required" autofocus>
                <br>

                <button class="btn btn-theme btn-block form-control btn-danger"  type="submit"
                        name="btn_Add" id="submit"><i class="fa fa-user"></i>Update</button>
                <hr>
            </div>
        </form>
    </div>
</div>
</body>
</html>