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

<body>

<div class="container ">
        <div class="ride_main my-3 h3">
        <div class="ride_text successfull h1">
            <?php
            if (($conn->query($sql3) === TRUE)) { ?>
                <p class="h4" id="info"><?php echo "Ride Booked Sucessfully !\n"; ?></p>
                
                <?php
            } else { ?>
                <p id="info"><?php echo "Ride Book Unsucessfully ! Please Try again \n"; ?></p>
                <!-- echo "Error: " . $sql3 . "<br>" . $conn->error . "<br>"; ?></p> -->
            <?php } ?>
        </div>

        </div>
        <?php $conn->close(); ?>

            </div>
   <div class="flex-container">
            <div class="container">
                <a href=".book_ride.php" class="button">Book Again</a>
            </div>
            <!-- <div class="container">
                <a href=".admin_home.php" class="button">Back</a>
            </div> -->
        
        </div>
    </div>

        

</body>
</html>
