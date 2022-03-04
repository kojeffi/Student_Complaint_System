
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
        <h1 class="h1 text-white text-capitalize">Welcome to this Update Page</h1>
    </div>
</nav>
<!--End of Navbar-->
<br>
<h1 class="text-info text-center h1 text-warning">Registered Users</h1>
<hr>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <table class="table-bordered table-hover form-group form-control" style="background-color: #ffe3ef">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
<?php
//To fetch users,connect to the db
   require_once"db_connect1.php";
//prepare a select query
   $selectQuery ="SELECT `id`, `username`, `password` FROM `users` WHERE 1";
//use mysqli_query() to grab all the users
   $users = mysqli_query($con,$selectQuery);
//use a loop to print the users
                foreach ($users as $user){
                $userUsername = $user["username"];
                $userPassword= $user["password"];
                $userId=$user["id"];
                echo"<tr>
               <td>$userUsername</td>
               <td>$userPassword</td>
              <td><a href='delete3.php?u_id=$userId'>Delete</a></td>
             <td><a href='update.php?u_id=$userId&username=$userUsername&password=$userPassword'>Update</a></td>
             </tr>";
}
?>
</body>
</html>

