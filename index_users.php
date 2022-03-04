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
<br>
<br>
<br>
<br>
<!--start of Navbar-->
<hr>
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <!-- Brand -->
    <a href="dashboard.php"> <a href="#"><img class="rounded" src="images/jeff.jpg" style="width: 100px"></a>
        <a href="index.php"><span class=" name-caret"></span></a>
    </a>
    <a class="navbar-brand text-danger h1 text-center" href="index.php">STUDENT<br>COMPLAINT<br>MANAGEMENT<br>SYSTEM<br>
    </a>
    <h1 class=" text-danger text-center" style="margin-left: 200px">Welcome To Student Page</h1>
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
                <a class="nav-link " href=""></a>
            </li>
    </div>
</nav>
<!--End of Navbar-->
<br>
<h1 class="text-info text-center h1 text-warning">Registered Student</h1>
<hr>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table class="table-bordered table-hover form-group form-control" style="border:2px black;background-color: #1dd831">
            <tr style="background-color: #d1f4ff">
                <th>studentFullname</th>
                <th>studentDOB</th>
                <th>studentAddress</th>
                <th>studentDistrict</th>
                <th>studentGender</th>
                <th>StudentMobile</th>
                <th>studentFather</th>
                <th>studentState</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php
            //To fetch users,connect to the db
            require_once"connectdb.php";
            //prepare a select query
            $selectQuery ="SELECT `st_id`, `st_fullname`,
       `st_dob`, `st_address`, `st_district`, `st_gender`,'st_mobile' ,`st_father`, `st_state` FROM `st_info` WHERE 1 ";
            //use mysqli_query() to grab all the users
            $users = mysqli_query($con,$selectQuery);
            //use a loop to print the users
            foreach ($users as $user){
                $studentFullname=$user["st_fullname"];
                $studentDOB=$user["st_dob"];
                $studentAddress=$user["st_address"];
                $studentDistrict=$user["st_district"];
                $studentGender=$user["st_gender"];
                $studentMobile=$user["st_mobile"];
                $studentFather=$user["st_father"];
                $studentState=$user["st_state"];
                $studentId=$user["st_id"];
                echo"<tr>
              <td>$studentFullname</td>
               <td>$studentDOB</td>
               <td>$studentAddress</td>
               <td>$studentDistrict</td>
               <td>$studentGender</td>
               <td>$studentMobile</td>
                <td>$studentFather</td>
               <td>$studentState</td>
              <td><a href='delete5.php?st_id=$studentId'>Delete</a></td>
             <td><a href='update5.php?st_id=$studentId&st_fullname=$studentFullname&st_dob=$studentDOB&st_address=$studentAddress&st_district$studentDistrict&st_gender=$studentGender&st_mobile=$studentMobile&st_father=$studentFather&st_state=$studentId'>Update</a></td>
             </tr>";
            }
            ?>
        </table>
</body>
</html>


