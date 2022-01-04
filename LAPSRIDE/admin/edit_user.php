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

    $sql0 = "SELECT * FROM bookride WHERE id=".$_SESSION['id'];
   

    $result0 = $conn->query($sql0);


    if ($result0->num_rows > 0) {
        // output data of each row
        while($row = $result0->fetch_assoc()) {
            $pickup = $row ["pickup"];
            $destination = $row ["destination"];
            $name = $row ["name"];
            $time = $row ["time"];
            $date = $row ["date"];
            $phone = $row ["phone"];
            $email = $row ["email"];

        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_add_style.css">
</head>

<body>
    <form class="add_customer_form" action="./edit_user_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Edit/View User details . . .</h1>
        </div>

    

        <div class="flex-container">
            <div class=container>
                <label>Name :</label><br>
                <input name="name" size="30" type="text" value="<?php echo $name ?>"  />
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Pickup Location :</label><br>
                <input name="pickup" size="30" type="text" value="<?php echo $pickup ?>"  />
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Destination :</label><br>
                <input name="destination" size="30" type="text" value="<?php echo $destination ?>"  />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Time :  </label>
            </div>
            <div class="flex-container-radio">
                <div class="container">
                    <select name ="time" id="time">
                    <option  selected class="text-dark" value=<?php echo $time ?> ><?php echo $time ?></option>
                         
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
                <input type="date" size="30" name="date" value="<?php echo $date ?>"  />
            </div>
       

        <div class="flex-container">
            <div class=container>
                <label>phone :  </label><br>
                <input name="phone" size="30"type="text" value="<?php echo $phone ?>"    />
            </div>
        </div>
        
        <
        <div class="flex-container">
            <div class=container>
                <label>Email :  </label><br>
                <input name="email" size="30" type="text" value="<?php echo $email ?>"    />
            </div>
        </div>


        <div class="flex-container">
            <div class="container">
                <a href="./edit_users.php" class="button">Go Back</a>
            </div>
            <div class="container">
                <button type="submit">Update</button>
            </div>
        </div>

    </form>

</body>
</html>
