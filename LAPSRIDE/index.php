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
	<!--header section start -->
    <div id="index.php" class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="logo"> <img src="images/logo.png"  width="70" height="70"></a></div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="index.php">Home</a></li>                                                    
                            <li><a href="#about">About</a></li>
                            <!-- <li><a href="#taxis">Taxi</a></li> -->
                            <li><a href="#booking">Booking</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                       
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.php">Home</a>
                  <a href="#about">About</a>
                  <!-- <a href="#taxis">Taxi</a> -->
                  <a href="#booking">Booking</a>
                  <a href="#contact">Contact Us</a>
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
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section" id="booking" >
      <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
            <div class="book_now">
              <h1 class="book_text">BOOK NOW</h1>
              <a class="call_text" href="tel:09023250180">+234 902 3250 180 </a>
              <!-- <h1 class="call_text">(+234) 8095193865</h1> -->
            </div>
           
            <div class="image_1 "> <img src="./images/carpana.svg"> </div>
          </div>
          <div class="col-md-6">
          <div class="request_text"> <marquee bgcolor="#e1e1e1"behavior="scroll" direction="left" scrollamount="10"> The available locations for now is Kubwa,
                        Gwarimpa,
                        Jahi, Life- Camp,
                        Wuse, Garki,
                        Maitama,
                        Asokoro,  
                        Lokogoma & Apo  </marquee> 
                      </div> 
            <h1 class="booking_text">Book a Ride to your destination</h1>
            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
                     <!-- <div class="request_text"> <marquee bgcolor="#e1e1e1"behavior="scroll" direction="left" scrollamount="10"> The available locations for now is Kubwa
                        Gwarimpa
                        Jahi & Life- Camp
                        Wuse & Garki
                        Maitama
                        Asokoro
                        Lokogoma & Apo  </marquee> 
                      </div>  -->
                  <!-- <h2 class="request_text">FOR NIN ABUJA</h2> -->
                      <form method="post" action="booking.php">
                      <div class="form-group mt-3">
                        <input type="text" class="email-bt" placeholder="Pick-Up Location" name="pickup"  required />
                      </div>
                      <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Destination" name="destination" required />
                      </div>
                      <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Name" name="name" required />
                      </div>

                      <div class="form-group dark">
                        <select name="time" id="time" class=" form-select-lg mb-3 form-control-time text-dark" aria-label=".form-select-lg example" >
                          <option selected class="text-dark">Select Time</option>
                          <option value="8am">8am</option>
                          <option value="11am">11am</option>
                          <option value="1pm">1pm</option>
                          <option value="4pm">4pm</option>
                        </select>
                        <div class="d-none email-bt form-select form-select-lg mb-3 nice-select" tabindex="0"><span class="current">Open this select menu</span><ul class="list"><li class="option selected" data-value="Open this select menu">Open this select menu</li><li class="option " data-value="1">One</li><li class="option " data-value="2">Two</li><li class="option " data-value="3">Three</li></ul></div>
                      </div> 

                      <div class="form-group input-group mb-3">
                      <input type="date" class="email-bt" id="date" name="date">
                      </div>
                      <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Phone Number (whatsapp)" name="phone" required />
                      </div>
                      <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Email Address" name="email" required />
                      </div>
                      
                     <button class="book_bt" type="submit"> BOOK </button>
                  
                    </form>
                
             
            </div> 
          </div>
               
      </div>
          </div>
        </div>
    </div>
    </div
    
    <!-- why ride section start -->
    <div id="about" class="ride_section layout_padding">
      
      <div class="container">
        <div class="ride_main">
          <h1 class="ride_text">Why Ride <span style="color: red;">With LAPS</span></h1>
      </div>
        </div>
        <div class="card-group">
          <div class="card">
            <img src="./images/MONEY.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-dark h1">LAPS FOR EVERY POCKET</h5>
              <p class="card-text text-dark"> <strong> Our rides are Affordable. Why Pay all the bills? When you can share it and still get to your destination in comfort. With little amount of 
                money you can be able to leave Campus to anywhere within Abuja and also return back to
                 Campus. We are here to provide easy and affordable transport service for every student.</strong></p>
              
            </div>
          </div>
          <div class="card">
            <img src="./images/Security.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-dark h1">SECURE & SAFER RIDES</h5>
              <p class="card-text text-dark"> <strong>We provide a high level of confidentiality between the driver and riders. Due to the high level of insecurity and kidnapping in 
                the Nation our riders are given a 100% assurance of their safety. 
                The Pick-Up and Drop-Off of our riders is known and highly confidential as such information can only be released incase of emergencies. </strong> </p>
             
            </div>
          </div>
          <div class="card">
            <img src="./images/frndski.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-dark h1">FRIENDLY </h5>
              <p class="card-text text-dark"> <strong> Friendships have a huge impact on your mental health and happiness. Good friends relieve stress, provide comfort and joy, and prevent loneliness and isolation. 
                we make it easy to make friends because you will have the priveledge to ride with many people. </strong></p>
              
            </div>
          </div>
        </div>
    </div>
  
<!-- =========================================CONTACT INFORMATION SECTION========================================= -->


<div class="card">
  <div class="card-body">
    <div class="contact" id="contact">
  
      <h1 class="text-dark h1 text-center ride_tex ">CONTACT  <span style="color: red;">INFORMATION</span> </h1>
      <ul class="list-unstyled li-space-lg text-dark address">
          <li class="address"> <strong> Don't hesitate to give us a call or send us a contact form message </li> </strong>
          <li><i class="material-icons">Location</i></i>Kabusa Garden Estate abuja, Nigeria</li>
          <li><i class="material-icons">Phone</i><a class="turquoise" href="tel:09023250180">+234 902 3250 180 </a></li>
          <li><i class="material-icons">E-mail</i><a class="turquoise" href="lapride02@gmail.com">lapride02@gmail.com</a></li> 
      </ul>
    
      <div class="row mt-3">
          <div class="col-lg-6">
              <div class="map-responsive">
                  <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Plot%20630,%20Durumi%20Area%201+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                  </iframe>
                  <a href="https://www.maps.ie/route-planner.htm"></a>
              </div>
          </div> <!-- end of col -->
          <div class="col-lg-6">
              
              <!-- Contact Form -->
              <form method="post" action="send.php" >
                  <div class="form-group mt-5"> 
                      <input type="text" class="email-bt" name="fullName" id="FN" placeholder="Full name"/>
                  </div>
                  <div class="form-group">
                  <input type="text" class="email-bt" id="EMAIL" name="email" placeholder="Email adress"/>
                  </div>
                  <div class="form-group">
                      <textarea class="form-control-textarea email-bt" id="cmessage" name="message" required="" placeholder="Your message"></textarea>
                      <label class="label-control" for="cmessage"></label>
                      <div class="help-block with-errors"></div>
                  </div>
                
                  <div class=form-botten>
                  <input class="book_bt" type="submit" value="send"/>
                     <!-- <div class="send_bt"><a class="send_bt" href="#">Send</a></div>  -->
                  </div>
                  </div>
                 
              </form>
              <!-- end of contact form -->
          </div> 
      </div>
    
    </div>

</div>

<!-- ==========================================END OF CONTACT INFORMATION======================================== -->

    <!-- why ride section end -->
    <!-- location section start -->
    <!-- <div id="contact" class="location_sectin layout_padding">
      <div class="container-fluid">
        <div class="location_main">
          <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-5">
              <div class="download_text">DOWNLOAD<br><span style="color: #fffcf4;">OUR APP TODAY</span></div>
            </div>
            <div class="col-sm-3">
              <div class="image_7"><img src="images/img-7.png"></div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- download section end -->
  <!-- section footer start -->
    <div class="section_footer ">
      <div class="container"> 
          <div class="">
            <div class="row">
                <!-- <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Address</h2>
                  <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                </div> -->
                <div class="col-sm-6 col-md-4">
                  <h2 class="account_text">Links</h2>
                  <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Home</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#about">About</span></a></div>
                
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#booking">Booking</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Contact Us</span></a></div>
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
              
          <!-- <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="adderess_text">Newsletter</h2>
            <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <button class="subscribr_bt">SUBSCRIBE</button>
          </div> -->
          </div>
          </div>
          </div>
      </div>
    </div>
    
  <!-- section footer end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright">  EASY, AFFORDABLE AND COMFORTABLE RIDE @2021 <a href="www.staunchgrin"> <strong>STAUNCHGRIN</strong></a> All Rights Reserved.   <strong>Version 1.0</strong></p> 
 
    </div>
  </div>

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