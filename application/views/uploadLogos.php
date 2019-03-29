<!DOCTYPE html>
<html>
<head>
	<title>Developer Dashboard</title>
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
<!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="">
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
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#">Upload Logo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#">All Logos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#">Sale History</a>
          </li>
           <li class="nav-item">
            <a class="nav-link waves-effect" href="#">Profile</a>
          </li>
           
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
         
        
           
          <li class="nav-item">
            <a href="#" class="nav-link border border-light rounded waves-effect"
              >
            
              <i class="fa fa-user mr-2"></i>
            </a>
          </li>

 <li class="nav-item">
            <a href="main/loadUserLoginForm" class="nav-link border border-light rounded waves-effect"
              >
             
              Login
              <i class="fa fa-user mr-2"></i>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="userlogout" class="nav-link border border-light rounded waves-effect">
               <i class="fa fa-sign-out mr-2"></i>
               Logout

            </a>
          </li>
     
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

<!-- Upload form -->

<!-- Material form login -->
<div class="card" style="margin-top: 70px;">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Upload New Logo</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form method="POST" class="text-center" style="color: #757575;">

    
      <div class="md-form">
        <input type="email" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">Title</label>
      </div>

      
      <div class="md-form">
   
<select class="browser-default custom-select">
  <option selected disabled="disabled">Select category</option>
  <option value="1">Technology</option>
  <option value="2">Abstract</option>
  <option value="3">Company</option>
</select>


      </div>

  

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded  my-4 waves-effect z-depth-0" type="submit">Upload</button>

      
    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
<!-- upload form end -->
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


$(document).ready(function() {
  
});
  </script>
</body>
</html>