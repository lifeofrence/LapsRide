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
<!-- <meta http-equiv="Refresh" content="2; url =./index.php"/> -->
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
	
	<!--header section start -->
  <div id="index.html" class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="logo"><a href="index.html">   <img src="images/logo.png" onclick="eEgg_func()" width="70" height="70"> </a></div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="index.html">Home</a></li>                                                    
                            <li><a href="index.html">About</a></li>
                            <!-- <li><a href="#taxis">Taxi</a></li> -->
                            <li><a href="index.html">Booking</a></li>
                            <li><a href="index.html">Contact Us</a></li>
                       
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.html">Home</a>
                  <a href="index.html">About</a>
                  <!-- <a href="#taxis">Taxi</a> -->
                  <a href="index.html">Booking</a>
                  <a href="index.html">Contact Us</a>
                </div>
                </div>
                <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle-menu.png" class="toggle_menu"></span>
                </div>  
                </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
<?php
$pickup = mysqli_real_escape_string($conn, $_POST["pickup"]);
$destination = mysqli_real_escape_string($conn, $_POST["destination"]);
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$time = mysqli_real_escape_string($conn, $_POST["time"]);
$date = mysqli_real_escape_string($conn, $_POST["date"]);
$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);

$sql3 = "INSERT INTO bookride VALUES(
  NULL,
  '$pickup',
  '$destination',
  '$name',
  '$time',
  '$date',
  '$phone',
  '$email'
)";

?>

    <!-- why ride section start -->
    <div id="about" class="ride_section layout_padding">
      
      <div class="container">
        <div class="ride_main">
          <h1 class="ride_text">SAFE <span style="color: red;">With LAPS</span></h1>
      </div>
        </div>
       
        
    </div>


        <div class="ride_main my-3 h3">
        <div class="ride_text successfull h1">
            <?php
            if (($conn->query($sql3) === TRUE)) { ?>
                <p class="h4" id="info"><?php echo "Ride Booked Sucessfully !\n"; ?></p>
                
                <?php
            } else { ?>
                <p id="info"><?php echo "Ride Book Unsucessfully ! Please Try again \n"; ?></p>
               <p><?php> echo "Error: " . $sql3 . "<br>" . $conn->error . "<br>"; ?></p>
            <?php } ?>
        </div>

        </div>
        <?php $conn->close(); ?>

            </div>

 
 <!-- section footer start -->

      <div class="section_footer fixed-bottom">
            <div class="container"> 
              
                  <div class="row">
                      
                      <div class="col-sm-6 col-md-4">
                        <h2 class="account_text">Links</h2>
                        <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="index.php">Home</span></a></div>
                      <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="index.php">About</span></a></div>
                      
                      <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="index.php">Booking</span></a></div>
                      <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="index.php">Contact Us</span></a></div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                      <h2 class="account_text">Follow Us</h2>
                      <div class="image-ico"> <img src="./images/icons8-whatsapp.svg"/> <span class="fb_text wp-text"><a href="https://wa.me/message/DELOPBK7IEYDL1">Whatsapp</a></span></div>
                      <div class="image-icon"><img src="images/fb-icon.png"><span class="fb_text"><a href="#">Facebook</a></span></div>
                      <div class="image-icon"><img src="images/twitter-icon.png"><span class="fb_text"><a href="#">Twitter</a></span></div>
                      <!-- <div class="image-icon"><img src="images/in-icon.png"><span class="fb_text"><a href="#">Linkedin</a></span></div> -->
                      <!-- <div class="image-icon"><img src="images/youtube-icon.png"><span class="fb_text"><a href="#">Youtube</a></span></div>             -->
                      
                      <div class="image-icon"><img src="images/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
                    
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <h2 class="account_text">Scan to Book a Ride</h2>
                      <div class="w-50"><img src="images/scanqrcode.jpg"></div>
                    </div>
                  </div>
               
                </div>
            </div>
         

      <!-- copyright section start
      <div class="copyright_section">
        <div class="container">
          <p class="copyright"> EASY, AFFORDABLE AND COMFORTABLE RIDE @2021 All Rights Reserved. <a href="#">LIFEOFRENCE</a></p>
        </div>
      </div> -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
       
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>   
</body>
</html>