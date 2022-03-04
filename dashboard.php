
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
<hr>
<!--start of Navbar-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
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
                <a class="h6 text-warning" href="user_submit_complaint.php" title="Submit Complaints" data-toggle="popover"
                   data-placement="right" data-content="Content">SUBMIT COMPLAINTS</a>
            </li>
            <li class="nav-item" style="margin-left: 10px">
            <a  class="h6 text-warning" href="admin.php" title="Admin Only" data-toggle="popover"
            data-placement="bottom" data-content="Content">ADMIN</a>
            <li class="nav-item" style="margin-left: 10px">
                <a class="h6 text-warning" href="Contact.php" title="Contact" data-toggle="popover"
                   data-placement="top" data-content="Content">CONTACT</a>
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
<br>
<br>
<hr>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="spinner-grow text-muted"></div>
        <div class="spinner-grow text-primary"></div>
        <div class="spinner-grow text-success"></div>
        <div class="spinner-grow text-info"></div>
        <div class="spinner-grow text-warning"></div>
        <div class="spinner-grow text-danger"></div>
        <div class="spinner-grow text-secondary"></div>
        <div class="spinner-grow text-dark"></div>
        <div class="spinner-grow text-light"></div>

    </div>
    <div class="col-md-4"></div>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="hover rounded-pill" src="assets/images/yu.jfif" alt="Los Angeles" style=" margin-left:300px;width: 70%;height: 300px">
        </div>
        <div class="carousel-item">
            <img class="hover rounded-pill" src="assets/images/jef.jfif" alt="Chicago" style="margin-left:300px;width: 70%;height: 300px">
        </div>
</div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon text-center h1 text-secondary">
            Complaint<b class="text-success">Management<b class="text-primary">System</b>
        </span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon">
        </span>
    </a>

</div>
<hr>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="background-color: #c9edff;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image " style="margin-left: 600px" size="0,3,0">
                <img src="assets/images/icons/images%20(1).jfif" class="rounded-circle" alt="User Image" />
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="rounded-pill" style="background-color: #e6fffc ;margin-left: 200px;margin-right: 200px">
            <li class="header h-50 text-center modal-header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="user_submit_complaint.php">
                    <i class="fa fa-users h1 text-center"></i>
                    <span>SUBMIT COMPLAINTS</span>
                </a>
            </li>
            <li class="treeview">
                <a href="complaint_feedback.php">
                    <i class="fa fa-comments h1 text-center"></i>
                    <span>COMPLAINT FEEDBACK</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="meadmin/home.php">
                    <i class="fa fa-book h1 text-center"></i>
                    <span>ADMIN PAGE</span>
                </a>
            </li>
            <li class="treeview">
                <a href="index_users.php">
                    <i class="fa fa-comments h1 text-center"></i>
                    <span>REGISTERED STUDENT</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>


            <li class="treeview">
                <a href="students/home.php">
                    <i class="fa fa-comments h1 text-center"></i>
                    <span>STUDENT</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<hr>
<div class="footer text-center">
    <div class="container">
        <b class="copyright">&copy; 2022 Brought To You By Omondi Jeff</b> All rights reserved.
    </div>
</div>

<hr>
</body>
</html>

