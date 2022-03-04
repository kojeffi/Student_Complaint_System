<?php
if($_POST){
    $host="localhost";
    $user="root";
    $pass="";
    $db='edge_lm_system';

    $username=$_POST['username'];
    $password=$_POST['password'];
    $con=mysqli_connect($host,$user,$pass,$db);
    $query="SELECT `id`, `username`, `password` FROM `users` WHERE username=$username and password=$password";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['edge_lm_system']='true';
        header('location:dashboard.php');
    }
    echo 'wrong username or password';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS | Admin login</title>
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
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<hr>
<div class="row" style="background-color: #ffe1e4;margin-left: 10px ;margin-right: 10px">
    <div class="col-md-4">
        <div class="row navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>

                    <a class="brand h1 text-info text-center" href="index.php">
                        CMS | Users
                    </a>

                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <ul class="nav pull-right">

                            <li><a href="index.php">
                                    Back to Portal

                                </a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->

    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-4"></div>
</div>
<br>
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form class="form-vertical" method="post" action="login_handler.php" style="background-color: #ebd5ff">
                <div class="module-head">
                    <h1 class="text-warning">Sign In</h1>
                </div>
                <div class="module-body">
                    <div class="control-group">
                        <div class="controls row-fluid">
                            <input class="span12 form-control" type="text" id="inputEmail"
                                   name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <div class="controls row-fluid">
                            <input class="span12 form-control" type="password" id="inputPassword"
                                   name="password" placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="module-foot">
                    <div class="control-group">
                        <div class="controls clearfix">
                            <button type="submit" class="btn btn-primary pull-right" name="btn_Add">Login</button>
                               <p>Not registered?<a href="registration.php"> Sign- Up</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<div class="footer text-center" style="margin-top: 200px">
    <div class="container">
        <b class="copyright">&copy; 2022 CMS </b> All rights reserved.
    </div>
</div>
<!--    Start of connection to bootstrap js-->
<script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
<!--    End of connection bootstrap js-->
</body>
</html>
