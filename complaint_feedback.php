<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
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
           <h1 class="h1 text-secondary btn-outline-dark text-center" style="cursor: pointer">Complaints feedback</h1>
           <hr>

           <div class="row">
           <div class="col-md-4"></div>
           <div class="col-md-4" style="background-color: #ffeff4">
               <a class="h1 text-center" href="mailto:someone@example.com">Send Email</a>
           </div>
           <div class="col-md-4">
               <li class="dropdown user user-menu">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-left: 350px">
                       <span class="hidden-xs text-danger">LOGOUT</span>
                   </a>
                   <ul class="dropdown-menu" style="width: 60px;margin-left: 350px">
                       <!-- User image -->
                       <li class="user-footer" style="background-color: #13eacd" >
                           <div class="pull-left">
                               <a href="index.php" class="btn btn-danger btn-flat" style="width: 50%;
                                 margin-left: 10%;">LOGOUT</a>
                           </div>
                       </li>
           </div>
           </div>
</body>
</html>
