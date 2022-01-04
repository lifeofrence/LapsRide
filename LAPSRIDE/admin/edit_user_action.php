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


    if (isset($_GET['id'])) {
        $_SESSION['id'] = $_GET['id'];
    }
    

        $pickup = mysqli_real_escape_string($conn, $_POST["pickup"]);
        $destination = mysqli_real_escape_string($conn, $_POST["destination"]);
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $time = mysqli_real_escape_string($conn, $_POST["time"]);
        $date = mysqli_real_escape_string($conn, $_POST["date"]);
        $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);

  

    $sql0 = "UPDATE bookride SET pickup = '$pickup',
                                 destination = '$destination',
                                 name = '$name',
                                 time = '$time',
                                 date = '$date',
                                 phone = '$phone',
                                 email = '$email'
                            WHERE id=".$_SESSION['id'];


?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/action_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <?php
                if (($conn->query($sql0) === TRUE)) { ?>
                    <p id="info"><?php echo "Values Updated Successfully !"; ?></p>
                <?php
                }
                else { ?>
                    <p id="info"><?php echo "Error: " . $sql0 . "<br>" . $conn->error . "<br>"; ?></p>
                <?php
                }
            ?>
        </div>
        <?php $conn->close(); ?>

        <div class="flex-item">
            <a href="./view_booked_ride.php" class="button">Go Back</a>
        </div>

    </div>

</body>
</html>
