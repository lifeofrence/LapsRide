<?php
   
   include "validate_admin.php";
   include "header.php";
    include "admin_sidebar.php";
    include "admin_navbar.php";
   
    include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
</head>

<body>



    <div class="">
        <?php
            $sql0 = "SELECT id, fullName, email, message, date FROM sendmessage ORDER BY date DESC";
            $result = $conn->query($sql0);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $result1 = $conn->query($sql0); ?>

                <div class="flex-item">
                <div class="flex-container-title">
                        <h2 id="date"><?php echo "Date : " .
                            date("d/m/Y", strtotime($row["date"])); ?></h2>
                    </div>
                    <div class="flex-container-title">
                        <p id="message"><?php echo "Message  : ". $row["message"] . "<br>"; ?></p>
                    </div>
                    <div class="flex-container-body">
                        <p id="fullname"><?php  echo "Name  : ". $row["fullName"] ?></p>
                    </div>
                    <div class="flex-container-body">
                        <p id="email"><?php echo "Email  : ". $row["email"] ?></p>
                    </div>
                    <hr>
                   
                       
                </div>
               
            <?php }
            } else {
                echo "No news available !";
            }
            $conn->close();
        ?>
    </div>

</body>
</html>
