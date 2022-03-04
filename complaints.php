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
    <a href="#">
        <a href="#"><img class="rounded" src="images/jeff.jpg" style="width: 100px"></a>
        <a href="index.php"><span class=" name-caret"></span></a>
    </a>
    <a href="index.php"><span class=" name-caret"></span></a>
    <a class="navbar-brand text-danger h1 text-center" href="index.php">Student<br>COMPLAINT<br>MANAGEMENT<br>SYSTEM<br>
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link h1 hover rounded-pill text-secondary" href="#" style="margin-left: 200px;">Welcome To This Page</a>
            </li>
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-left: 350px">
                    <span class="hidden-xs text-danger">LOGOUT</span>
                </a>
                <ul class="dropdown-menu" style="width: 60px;margin-left: 350px">
                    <!-- User image -->
                    <li class="user-footer" style="background-color: #13eacd" >
                        <div class="pull-left">
                            <a href="complaint_feedback.php" class="btn btn-danger btn-flat" style="width: 50%;
                                 margin-left: 10%;">LOGOUT</a>
                        </div>
                    </li>
        </ul>
    </div>
</nav>
<!--End of Navbar-->
<br>
<h1 class="text-info text-center h1 text-warning hover" style="cursor:pointer;text-decoration: underline">View Complaints</h1>
<hr>
<div class="row">
    <div class="col-md-12">
        <table class="table-bordered table-hover form-group form-control" style="background-color: #ffe3ef">
            <tr>
                <th>Name</th>
                <th>Reg No</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Category</th>
                <th>Description</th>
                <th>Date</th>
                <th>Year of Study</th>
                <th>File</th>
                <th>Delete</th>
            </tr>
            <?php
            //To fetch users,connect to the db
            require_once"db_connection.php";
            //prepare a select query
            $selectQuery ="SELECT `id`, `u_name`, `u_reg`, `u_phone_number`, `u_email`, `u_gender`, `u_category`, `u_description`, `u_date`, `u_year`, `u_file` FROM `complaints` WHERE 1 ";
            //use mysqli_query() to grab all the users
            $users = mysqli_query($con,$selectQuery);
            //use a loop to print the users
            foreach($users as $user){
                $userName=$user["u_name"];
                $userRegistrationNumber=$user["u_reg"];
                $userPhoneNumber=$user["u_phone_number"];
                $userEmail=$user["u_email"];
                $userGender=$user["u_gender"];
                $userCategory=$user["u_category"];
                $userDescription=$user["u_description"];
                $userDate=$user["u_date"];
                $userYearOfStudy=$user["u_year"];
                $userFile=$user["u_file"];
                $userId=$user["id"];
                echo"<tr>
                 <td>$userName</td>
                <td>$userRegistrationNumber</td>
                <td>$userPhoneNumber</td>
                <td>$userEmail</td>
                <td>$userGender</td>
                <td>$userCategory</td>
                <td>$userDescription</td>
                 <td>$userDate</td>
                <td>$userYearOfStudy</td>
                <td>$userFile</td>
              <td><a href='delete2.php?u_id=$userId'>Delete</a></td>
             </tr>";
            }
            ?>
            </div>
             </div>
</body>
</html>