<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    include "validate_admin.php";
    include "connection.php";
    include "header.php";
    include "admin_navbar.php";
    include "admin_sidebar.php";





 
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_add_style.css">
</head>

<body>
    <form class="add_customer_form" action="admin_booking.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Book Ride for User . . .</h1>
        </div>

    

        <div class="flex-container">
            <div class=container>
                <label>Name :</label><br>
                <input name="name" size="30" type="text"  />
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Pickup Location :</label><br>
                <input name="pickup" size="30" type="text"  />
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Destination :</label><br>
                <input name="destination" size="30" type="text"  />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Time :  </label>
            </div>
            <div class="flex-container-radio">
                <div class="container">
                    <select name ="time" id="time">
                    <option  selected class="text-dark">Select Time</option>
                         
                          <option value="8am">8am</option>
                          <option value="11am">11am</option>
                          <option value="1pm">1pm</option>
                          <option value="4pm">4pm</option>
                    </select>
                </div>
                 
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Date : </label><br>
                <input type="date" size="30" name="date"   />
            </div>
       

        <div class="flex-container">
            <div class=container>
                <label>phone :  </label><br>
                <input name="phone" size="30"type="text"    />
            </div>
        </div>
        
        <
        <div class="flex-container">
            <div class=container>
                <label>Email :  </label><br>
                <input name="email" size="30" type="text"   />
            </div>
        </div>


        <div class="flex-container">
            <!-- <div class="container">
                <a href="./admin_home.php" class="button">Go Back</a>
            </div> -->
            <div class="container">
                <button type="submit">Book</button>
            </div>
        </div>

    </form>
    

</body>
</html>
