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
   <meta http-equiv="Refresh" content="3; url =./index.php"/>
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
       
   <?php



if (isset($_POST['submit'])) {
 
  // $mailTo = "lapride02@gmail.com";
  $mailTo = "gshockchris@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "Full Name: ".$fullName."\r\nEmail: ".$mailFrom."\r\nMessage: ".$message;
  mail($mailTo,  $txt, $headers);
  header("Location: index.php?mailsent");
}

   $fullName = mysqli_real_escape_string($conn, $_POST["fullName"]);
   $email = mysqli_real_escape_string($conn, $_POST["email"]);
   $message = mysqli_real_escape_string($conn, $_POST["message"]);
  
   
   $sql3 = "INSERT INTO sendmessage (fullName, email, message, date)  VALUES(
     '$fullName',
     '$email',
     '$message',
      NOW()
   )";

   ?>
   
   
   
   <div class="container ">
           <div class="ride_main my-3 h3">
           <div class="ride_text successfull h1">
               <?php
               if (($conn->query($sql3) === TRUE)) { ?>
                   <p class="h4" style="color:red;" id="info"><?php echo "Message Sent Sucessfully !\n"; ?></p>
                   <?php
               } else { ?>
                   <p id="info"><?php echo "Message Sent Unsucessfully ! Please Try again \n"; ?></p>
                   <!-- echo "Error: " . $sql3 . "<br>" . $conn->error . "<br>"; ?></p> -->
               <?php } ?>
           </div>
   
           </div>
           <?php $conn->close(); ?>
   
               </div>
   
       </div>
   
    
 <!-- section footer start -->

 <div class="section_footer fixed-bottom">
            <div class="container"> 
            <p class="copyright" > EASY, AFFORDABLE AND COMFORTABLE RIDE @2021 <a href="#" style="color:red;"><strong> LAPSRIDE </strong></a> All Rights Reserved. </p>
                  <!-- <div class="row">
                      
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
                      
                      <!-- <div class="image-icon"><img src="images/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
                    
                    </div>
                   
                  </div> -->
               
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