<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Complaints</title>
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
              <p class="h1 text-success" style="cursor: pointer"><b style="text-decoration: #74600f">Congratulations!<b>Welcome To This Page</p>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
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
<div class="spinner-border text-muted text-center"></div>
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
<hr class="btn-warning" style="border: 3px solid blue">
<div class="row">
    <div class="col-md-4">
        <a href="Contact.php"><img src="assets/images/images%20(1).jfif" alt="" style="margin-left:10px;width: 100%;background-size: "></a>
    </div>
    <div class="col-md-7">
        <form method="post" class="rounded " action="user_submit_complaint_handler.php" style="background-color: #cbdcff">
            <h1 class="text-info text-center text-primary">Submit Your Complaint</h1>
            <br>
            <div class="row">
            <div class="col-md-6">
                <label for="">Name</label>
                <input name="u_name" class="form-control" placeholder="Enter Your name" type="text">
            </div>
            <div class="col-md-6">
                <label for="">Registration Number</label>
                <input name="u_reg" class="form-control" placeholder="Enter Registration number" type="text">
                <br>
            </div>
            </div>
                <div class="row">
                <div class="col-md-6">
                    <label for="">Phone Number</label>
                    <input name="u_phone_number" class="form-control" placeholder="Enter phone number" type="number">
                </div>
                <div class="col-md-6">
                    <label for="">Email</label>
                    <input name="u_email" class="form-control" placeholder="Enter email" type="email">
                </div>
                </div>
            <div class="row">
            <div class="col-md-6">
                <label for="">Gender</label>
                <select name="u_gender"  class="form-control" id="gender">
                    <option value="">Select Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="">Complaint</label>
                <select name="u_category"class="form-control"  id="#Complaints">
                    <option value="">Select Your Complaint Category</option>
                    <option value="Accommodation">ACCOMMODATION
                    </option>
                    <option value="Library">
                        LIBRARY
                    </option>
                    <option value="Cafe">
                        CAFE
                    </option>
                    <option value="Missing Marks">
                        MISSING MARKS
                    </option>
                    <option value="Courses">
                        COURSES
                    </option>
                    <option value="Teaching Mode">
                        TEACHING MODE
                    </option>
                    <option value="Student Welfare">
                        STUDENT WELFARE
                    </option>
                    <option value="Student Dressing Code">
                        STUDENT DRESSING CODE
                    </option>
                </select>
            </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" >Description</label>
                    <textarea name="u_description"class="form-control" id="message" placeholder="Descibe your complaint according to category chosen" cols="45" rows="8"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword3" class="col-sm-2 control-label">Date</label>
                    <div class="form-control">
                        <input name="u_date" type="date" class="form-control" id="inputEmail3" placeholder="Enter...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="">Current Year of study</label>
                    <input name="u_year" class="form-control" placeholder="Year,Sem Ex.YR1,Sem2" type="text">
                </div>
                <div class="col-md-6">
                    Select file to upload:
                    <input  type="file" name="fileToUpload u_file" id="fileToUpload"><br>
                    <input type="submit" value="Upload file" name="submit">
                </div>
            </div>
                 <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-4">
                         <input class="btn-block btn-success form-control form-group"
                                name="btn_Add" value="Submit" type="submit">
                     </div>
                     <div class="col-md-4"></div>
                 </div>
        </form>
    </div>
    <div class="col-md-1">

    </div>
</div>
</body>
</html>

