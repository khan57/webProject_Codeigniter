<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>User sign in </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url()?>css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url()?>css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }
  </style>
</head>
<body>
  <!-- nav -->

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="<?php echo base_url('index.php/main')?>">
        <strong class="blue-text">Logos Heaven</strong>
      </a>
    </div>
  </nav>
  <br><br><br><br><br>
  <!-- Navbar -->
  <!-- nav  -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <span style="font-weight: bolder;color: red"><?php echo $this->session->flashdata('error'); ?></span>
<form method="POST" action="<?php echo base_url('index.php/main/userLogin')?>" class="border border-light p-5">

    <p class="h4 mb-4 text-center ">Users Sign in</p>

    <input required="required" name="email"  type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

    <input required="required" name="password"  type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-between">
        <div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <a href="">Forgot password?</a>
        </div>
    </div>

    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    <div class="text-center">
        <p>Not a member?
            <a href="">Register</a>
        </p>

        <p>or sign in with:</p>
        <a type="button" class="light-blue-text mx-2">
            <i class="fa fa-facebook"></i>
        </a>
        <a type="button" class="light-blue-text mx-2">
            <i class="fa fa-twitter"></i>
        </a>
        <a type="button" class="light-blue-text mx-2">
            <i class="fa fa-linkedin"></i>
        </a>
        <a type="button" class="light-blue-text mx-2">
            <i class="fa fa-github"></i>
        </a>
    </div>

</form>
  </div></div> <div class="col-md-3"></div></div>
<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url()?>js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url()?>js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url()?>js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
$(document).ready(function () {
 $('#defaultLoginFormEmail').val(' ');

 $('#defaultLoginFormPassword').val(' ');
});
  </script>

</body>
</html>