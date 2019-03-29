
<!DOCTYPE html>
<html>
<!-- user registration -->
<head>
	<title>Developer Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url()?>css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url()?>css/style.min.css" rel="stylesheet">
</head>
<body>
<div class="container">

	<!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="index">
        <strong class="blue-text">Logos Heaven</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <br><br><br>
  <!-- Navbar -->

	<!-- Material form register -->
<div class="card">

    <h5 class="card-header success-color white-text text-center py-4">
        <strong>Developers Sign up Here</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form  method="post" action="<?php echo base_url('index.php/main/registerdeveloper') ?>" class="text-center" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input name="name" required="required" type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">Name</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input name="username" required="required" type="text" id="materialRegisterFormLastName" class="form-control">
                        <label for="materialRegisterFormLastName">Username</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input name="email" required="required" type="email" id="materialRegisterFormEmail" class="form-control">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input name="password" required="required" type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Password</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 8 characters and 1 digit
                </small>
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <input name="mobile" required="required" type="number" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <label for="materialRegisterFormPhone">Phone number</label>
                <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Optional - for two step authentication
                </small>
            </div>
            <!-- Sign up button -->
            <button name="signup" class="btn btn-outline-success btn-rounded my-4 waves-effect z-depth-0" type="submit">Register</button>
           <hr>

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a> and
                <a href="" target="_blank">terms of service</a>. </p>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->

<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url()?>js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url()?>js/mdb.min.js"></script>
</div>
 <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="#" data-toggle="modal" data-target="#modalContactForm"  role="button">Contact us
        <i class="fa fa-envelope-open ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="#"  role="button">Login
        <i class="fa fa-sign-in ml-2"></i>
      </a>
      <a class="btn btn-success" href="#"  role="button">Developer
        <i class="fa fa-sign-in ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="#" >
        <i class="fa fa-facebook mr-3"></i>
      </a>

      <a href="#" >
        <i class="fa fa-twitter mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-youtube mr-3"></i>
      </a>

      <a href="#" >
        <i class="fa fa-google-plus mr-3"></i>
      </a>

      <a href="#" >
        <i class="fa fa-dribbble mr-3"></i>
      </a>

      <a href="#" >
        <i class="fa fa-pinterest mr-3"></i>
      </a>

      <a href="#" >
        <i class="fa fa-github mr-3"></i>
      </a>

      <a href="#" >
        <i class="fa fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2016-2018 Copyright:
      <a href="#" > www.logosheaven.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  
  <!--/.Footer-->

  
</body>
</html>
