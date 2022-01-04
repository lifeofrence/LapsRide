<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_navbar_style.css">
    <script src="jquery-3.2.1.min.js"></script>
</head>
<?php
 /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
      session_start();
  }
global $result;
  if (isset($_SESSION['loggedIn_user_id'])) {
      $sql0 = "SELECT uname FROM admin WHERE id=".$_SESSION['loggedIn_user_id'];
      $result = $conn->query($sql0);
    
  }
   ?>

<body>
    <div class="nav-wrapper">
        <div class="topnav" id="theTopNav">
            <a href="javascript:void(0);" class="icon" onclick="openNav()" id="hamburger">
                &#9776;
            </a>
            <a id="user">Welcome, &nbspAdmin  !</a> 
            <!-- <strong><?php echo $result ["uname"] ?></strong> -->
       
            <a id="logout" href="logout_action.php" style="border-top-left-radius: 3px;" 
                    onclick="return confirm('Are you sure?')">Logout</a>
        </div>
    </div>

<script>
// Function below is jquery-3 function used for making the navbar sticky
$(document).ready(function() {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 120) {
      $("#theTopNav").addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 121) {
      $("#theTopNav").removeClass('navbar-fixed');
  }
  });
});
</script>

</body>
</html>
