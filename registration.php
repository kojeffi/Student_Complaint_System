
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>CMS | User Registration</title>
      <!--    Start of connection to bootstrap js-->
      <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
      <script src="assets/bootstrap/js/popper.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
      <!--    End of connection bootstrap js-->

      <!--    start of connection to bootstrap css-->
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
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
  <div class="row" style="background-color: #e1fbff;margin-right: 10px;margin-left: 10px">
      <div class="col-md-4">
          <div class="row navbar navbar-fixed-top">
              <div class="navbar-inner">
                  <div class="container">
                      <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                          <i class="icon-reorder shaded"></i>
                      </a>

                      <a class="brand h1 text-info text-center" href="index.php">
                          CMS | Users
                      </a>

                      <div class="nav-collapse collapse navbar-inverse-collapse">

                          <ul class="nav pull-right">

                              <li><a href="index.php">
                                      Back to Portal

                                  </a></li>
                          </ul>
                      </div><!-- /.nav-collapse -->
                  </div>
              </div><!-- /navbar-inner -->
          </div><!-- /navbar -->

      </div>
      <div class="col-md-4">

      </div>
      <div class="col-md-4"></div>
  </div>
  <hr>
  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login hover" method="post" action="registration_handler.php">
                  <h2 class="form-login-heading h1 text-center"><b>User Registration</b></h2>
		        <p style="padding-left: 1%; color: green">
		        </p>
		        <div class="login-wrap">
		         <input type="text" class="form-control" placeholder="Full Name" name="fullname" required="required" autofocus>
		            <br>
		            <input type="email" class="form-control" placeholder="User ID" id="email"
                           onBlur="userAvailability()" name="email" required="required">
		             <span id="user-availability-status1" style="font-size:12px;"></span>
		            <br>
		            <input type="password" class="form-control" placeholder="Password"
                           required="required" name="password"><br >
		             <input type="text" class="form-control" maxlength="10" name="contactno" placeholder="Contact no" required="required" autofocus>
		            <br>
		            
		            <button class="btn btn-theme btn-block form-control btn-success"  type="submit"
                            name="btn_Add" id="submit"><i class="fa fa-user"></i> Register</button>
		            <hr>
		            
		            <div class="text-primary text-sm-right" style="margin-right: 30px">
		                Already Registered<br/>
		                <a class="h2" href="index[1].php">
		                   Sign in
		                </a>
		            </div>
		
		        </div>
		
		      
		
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
