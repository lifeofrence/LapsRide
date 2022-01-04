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
            $sql0 = "SELECT id, title, created FROM news ORDER BY created DESC";
            $result = $conn->query($sql0);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $sql1 = "SELECT body FROM news_body WHERE id=$id";
                $result1 = $conn->query($sql1); ?>

                <div class="flex-item">
                    <div class="flex-container-title">
                        <h2 id="title"><?php echo "Headline : ". $row["title"] . "<br>"; ?></h2>
                    </div>
                  
                    <div class="flex-container-body">
                        <p id="news_body"><?php while($row1 = $result1->fetch_assoc()) {
                            echo "Details : ". $row1["body"]; } ?></p>
                    </div>
                    <div class="flex-container-title">
                        <p id="date"><?php echo "Date : " .
                            date("d/m/Y", strtotime($row["created"])); ?></p>
                    </div>
                </div>
                <hr>

            <?php }
            } else {
                echo "No news available ! Please post some.";
            }
            $conn->close();
        ?>
    </div>

</body>
</html>
