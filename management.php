<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="registration.php">REGISTER</a>
            </li>
        </ul>
    </div>
</nav>
<!--End of Navbar-->
<br>

<header class="main-header" style="background-color: #e4a9ff">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini h1 text-warning"><b>C</b>MS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Complaint</b>System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- Notifications: style can be found in dropdown.less -->

                <!-- Tasks: style can be found in dropdown.less -->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="dist/img/user2-160x160.jpg" class="rounded-circle" alt="User Image" />
                        <span class="hidden-xs">Name</span>
                    </a>
                    <ul class="dropdown-menu" style="width: 113px; ">
                        <!-- User image -->

                        <li class="user-footer" style="background-color: #ecf0f5" >
                            <div class="pull-right">
                                <a href="index.php" class="btn btn-danger btn-flat" style="width: 100%;
                                 margin-left: 64%;">Logout</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="background-color: #c9edff;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image " style="margin-left: 600px">
                <img src="dist/img/user2-160x160.jpg" class="rounded-circle" alt="User Image" />
            </div>
            <div class="pull-left info text-center h2">
                <p>Name</p>
                <a href="dashboard.php"><i class="h2 btn-block text-success text-center"></i> User</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" style="background-color: #e6fffc ;margin-left: 200px;margin-right: 200px">
            <li class="header h1 text-center modal-header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="dashboard.php">
                    <i class="fa fa-dashboard h2 text-center"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-comments h2 text-center"></i>
                    <span>Complaint</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o h4 text-center"></i></a></li>
                    <li><a href=""><i class="fa fa-circle-o h4 text-center"></i></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="user_management.php">
                    <i class="fa fa-users h2 text-center"></i>
                    <span>User Management</span>
                </a>
            </li>
            <li class="treeview">
                <a href="report.php">
                    <i class="fa fa-book h2 text-center"></i>
                    <span>Reports</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<hr>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header text-center text-warning">
            <h1>
                User Management
                <small></small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title text-center text-warning">User Management Table</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="5%">Profile</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Contact</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><center><img src="dist/img/user2-160x160.jpg" width="30" class="user-image rounded-circle" alt="User Image" /></center></td>
                                <td>Omondi Jeff</td>
                                <td><i style="color:blue">omondijeff88@gmail.com</i></td>
                                <td>+254 745842774</td>
                                <td>jeff123</td>
                                <td>*******</td>
                                <td><small class="label bg-green">Active</small>Active</td>
                                <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td><center><img src="dist/img/user3-128x128.jpg" width="30" class="user-image rounded-circle" alt="User Image" /></center></td>
                                <td>Olie Jeffy</td>
                                <td><i style="color:blue">olie@gzz.cc.com</i></td>
                                <td>+254 769200584</td>
                                <td>olie123</td>
                                <td>*******</td>
                                <td><small class="label bg-red">Inactive</small>Active</td>
                                <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Contact</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="modal fade" id="edit">
                            <div class="modal-dialog">
                                <form class="form-horizontal" action="#">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Edit User</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" value="Data">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">Email Address</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" value="Data">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">Contact</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" value="Data">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" value="Data">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label" >Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputEmail3" value="Data">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control">
                                                            <option>Active</option>
                                                            <option>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="file">
                                                        <input type="file" id="file" aria-label="File browser example">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                            </div><!-- /.box-body -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </form>
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<footer class="main-footer text-center">
    <div class="pull-right hidden-xs">

    </div>
    <strong>Copyright &copy; 2021-2022 <a href="dashboard.php">Footer</a>.</strong> All rights reserved.
</footer>
<div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
<hr>
</body>
</html>

