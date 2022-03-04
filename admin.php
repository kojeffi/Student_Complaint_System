<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
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
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <!-- Brand -->
    <!-- User Account: style can be found in dropdown.less -->
        <a href="#"><img class="rounded" src="images/jeff.jpg" style="width: 100px"></a>
        <a href="index.php"><span class=" name-caret"></span></a>
    <a class="navbar-brand text-danger h1 text-center" href="index.php"><b class="text-warning">STUDENT</b><br>COMPLAINT<br>MANAGEMENT<br>SYSTEM<br>
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
                <a class="h6 text-warning" href="registration_users.php" title="View users" data-toggle="popover"
                   data-placement="right" data-content="Content">VIEW USERS</a>
            </li>
            <li class="nav-item" style="margin-left: 10px">
                <a  class="h6 text-warning" href="update.php" title="update" data-toggle="popover"
                    data-placement="bottom" data-content="Content">UPDATE</a>
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="login_users.php" title="Delete" data-toggle="popover"
                   data-placement="left" data-content="Content">LOGIN USERS</a>
            </li>
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="complaints.php" title="Views complaints" data-toggle="popover"
                   data-placement="top" data-content="Content">VIEW COMPLAINTS</a>
            </li>
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="complaint_feedback.php" title="uploads" data-toggle="popover"
                   data-placement="top" data-content="Content">FEEDBACK</a>
            </li>
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="manage_users.php" title="uploads" data-toggle="popover"
                   data-placement="top" data-content="Content">MANAGE USERS</a>
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
<br>
<br>
<br>
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
<br>
<br>
<br>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header h2 text-center text-warning">
        <h1>
            Admin Dashboard
        </h1>
        <ol class="breadcrumb">
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row hover">
            <div class="col-md-4">
                <!-- small box -->
                <div class="small-box bg-aqua rounded-pill" style="background-color: #cfffe2">
                    <div class="inner text-danger">
                        <h3 class="text-center">150</h3>
                        <p class="h5 text-center">Total Complaints</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <a href="registration_users.php" class="small-box-footer h4 text-center">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-md-4">
                <!-- small box -->
                <div class="small-box bg-green rounded-pill" style="background-color: #96ffc7">
                    <div class="inner text-danger">
                        <h3 class="text-center">53<sup style="font-size: 20px"></sup></h3>
                        <p class="h5 text-center">Total User</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="complaints.php" class="small-box-footer h4 text-center">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-md-4">
                <!-- small box -->
                <div class="small-box bg-yellow rounded-pill" style="background-color: #ffc5cb">
                    <div class="inner text-danger">
                        <h3 class="text-center">44</h3>
                        <p class="h5 text-center">Complaints Solve</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <a href="report.php" class="small-box-footer h4 text-center">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->
        <!-- Main row -->
        <div class="row">
        </div><!-- /.row (main row) -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<hr>
<footer class="main-footer text-center">
    <div class="pull-right hidden-xs">

    </div>
    <strong>Copyright &copy; 2021-2022<a href="dashboard.php">Footer</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
<hr>
</body>
</html>