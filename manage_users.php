<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
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
    <a class="navbar-brand text-danger h1 text-center" href="index.php">STUDENT<br>COMPLAINT<br>MANAGEMENT<br>SYSTEM<br>
    </a>
    <h1 class="text-warning text-center" style="margin-left: 200px">Welcome to this Users managers Page</h1>
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
<h1 class="text-info text-center h1 text-warning">Registered Users</h1>
<hr>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table class="table-bordered table-hover form-group form-control" style="border:2px black;background-color: #1dd831">
            <tr style="background-color: #d1f4ff">
                <th>Full Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Contact</th>
                <th>Username</th>
                <th>Password</th>
                <th>Status</th>
                <th>File</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php
            //To fetch users,connect to the db
            require_once"db_connect4.php";
            //prepare a select query
            $selectQuery ="SELECT `id`, `name`, `email`, `contact`, `username`, `password`, `status`, `file` FROM `users` WHERE 1 ";
            //use mysqli_query() to grab all the users
            $users = mysqli_query($connection,$selectQuery);
            //use a loop to print the users
            foreach ($users as $user){
                $userFullname = $user["name"];
                $userEmail = $user["email"];
                $userContact = $user["contact"];
                $userUsername =$user["username"];
                $userPassword= $user["password"];
                $userStatus=$user["status"];
                $userFile=$user["file"];
                $userId=$user["id"];
                echo"<tr>
              <td>$userFullname</td>
               <td>$userEmail</td>
               <td>$userContact</td>
               <td>$userUsername</td>
               <td>$userPassword</td>
               <td>$userStatus</td>
               <td>$userFile</td>
               
              <td><a href='delete.php?u_id=$userId'>Delete</a></td>
             <td><a href='update.php?u_id=$userId&name=$userFullname&email=$userEmail&contact=$userContact
             &username=$userUsername&password=$userPassword&status=$userStatus&file=$userFile'>Update</a></td>
             </tr>";
            }
            ?>
        </table>
</body>
</html>


