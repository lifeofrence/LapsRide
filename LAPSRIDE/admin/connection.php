<?php
$servername = "localhost";
$username = "tinysnot_lifeofrence";
$password = "Rence5254";
$dbname = "tinysnot_LapsRide";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
