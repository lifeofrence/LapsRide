<?php
 	
     include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>LAPS</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="shortcut icon" href="images/favicon.ico">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>


    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="images/logo.png" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1"> 
        <form action="./admin_login_action.php" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form1Example13" name="admin_uname" class="form-control form-control-lg" placeholder="Username" />
            <label class="form-label" for="form1Example13">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" name="admin_psw" class="form-control form-control-lg" placeholder="Password" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

        

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>

  

        </form>
      </div>
    </div>
  </div>
    
  <div class="copyright_section" style="margin-top: 50px;" >
    <hr>
    <div class="container">
      <p class="copyright" style="border-buttom-left-radius: 3px;" >  EASY, AFFORDABLE AND COMFORTABLE RIDE @2021 <a href="www.staunchgrin"> <strong>STAUNCHGRIN</strong></a> All Rights Reserved.   <strong>Version 1.0</strong></p> 
    </div>
  </div>
</section>


</body>
</html>
