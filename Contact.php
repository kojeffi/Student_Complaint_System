<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTACT</title>
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
<body>
<html>
<!--start of Navbar-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <!-- Brand -->
    <a href="#"><img class="rounded" src="images/jeff.jpg" style="width: 100px"></a>
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
        </ul>
    </div>
</nav>
<!--End of Navbar-->
<br>
<br>
<br>
<br>
<br>
<br>
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single text-info text-center">Contact US</h1>
                        <span class="color-text-a text-info text-center">We are available 24/7.</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="dashboard.php">HOME</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                CONTACT
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-map box">
                        <div id="map" class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?v1/place?key=API_KEY&q_Space+Needle,Nairobi+WA"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 section-t8">

                    <div class="row">
                        <div class="col-md-7">
                            <form action="contact_handler.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn-block text-danger hover form-control">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr>
    </section><!-- End Contact Single-->

</main><!-- End #main -->

</body>
</html>