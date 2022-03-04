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
            background-origin: unset;
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
    <!-- User Account: style can be found in dropdown.less -->
    <a href="#"><img class="rounded" src="images/jeff.jpg" style="width: 100px"></a>
    <a href="index.php"><span class=" name-caret"></span></a>
    <a class="navbar-brand text-danger h1 text-center" href="index.php">STUDENT<br>COMPLAINT<br>MANAGEMENT<br>SYSTEM<br>
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav" style="margin-left:200px ">
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="dashboard.php" title="Dashboard" data-toggle="popover"
                   data-placement="left" data-content="Content">HOME</a>
            </li>
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="user_submit_complaint.php" title="View users" data-toggle="popover"
                   data-placement="right" data-content="Content">VIEW USERS</a>
            </li>
            <li class="nav-item" style="margin-left: 10px">
                <a  class="h6 text-warning" href="update.php" title="update" data-toggle="popover"
                    data-placement="bottom" data-content="Content">UPDATE</a>
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="delete.php" title="Delete" data-toggle="popover"
                   data-placement="left" data-content="Content">DELETE</a>
            </li>
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="complaints.php" title="Views complaints" data-toggle="popover"
                   data-placement="top" data-content="Content">VIEW COMPLAINTS</a>
            </li>
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="upload_images.php" title="uploads" data-toggle="popover"
                   data-placement="top" data-content="Content">UPLOAD IMAGES</a>
            </li>

    </div> <!-- end of templatemo_menu -->

    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs text-danger">LOGOUT</span>
        </a>
        <ul class="dropdown-menu" style="width: 60px; ">
            <!-- User image -->
            <li class="user-footer" style="background-color: #13eacd" >
                <div class="pull-left">
                    <a href="index.php" class="btn btn-danger btn-flat" style="width: 50%;
                                 margin-left: -30%;">LOGOUT</a>
                </div>
            </li>
        </ul>

</nav>
<!--End of Navbar-->
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="spinner-border text-muted"></div>
        <div class="spinner-border text-primary"></div>
        <div class="spinner-border text-success"></div>
        <div class="spinner-border text-info"></div>
        <div class="spinner-border text-warning"></div>
        <div class="spinner-border text-danger"></div>
        <div class="spinner-border text-secondary"></div>
        <div class="spinner-border text-dark"></div>
        <div class="spinner-border text-light"></div>
    </div>
    <div class="col-md-4"></div>
</div>
<hr>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
        <table>
            <tr>
            <input type="file">
            <th><input type="Upload"></th>
            </tr>
        </table>
</div>
<div class="col-md-4"></div>
    </div>
</body>
</html>
