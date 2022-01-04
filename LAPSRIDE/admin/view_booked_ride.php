<?php
    include "validate_admin.php";
    include "connection.php";
    include "header.php";
    include "admin_navbar.php";
    include "admin_sidebar.php";
    

    if (isset($_POST['submit'])) {
        $back_button = TRUE;
        $search = $_POST['search'];
        $by = $_POST['by'];

        if ($by == "name") {
            $sql0 = "SELECT id, name, phone FROM bookride
            WHERE name LIKE '%".$search."%' 
            OR CONCAT(name) LIKE '%".$search."%'";
        }
        else {
            $sql0 = "SELECT id, name, phone FROM bookride
            WHERE phone LIKE '$search'";
        }
    }
    else {
        $back_button = FALSE;

        $sql0 = "SELECT id, name, pickup, destination, phone, date, time, email FROM bookride ORDER BY id DESC " ;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/manage_users_style.css">
</head>

<body>
    <div class="search-bar-wrapper">
        <div class="search-bar" id="the-search-bar">
            <div class="flex-item-search-bar" id="fi-search-bar">

                <form class="search_form" action="" method="post">
                    <div class="flex-item-search">
                        <input name="search" size="30" type="text" placeholder="Search Users..." />
                    </div>

                    <div class="flex-item-search-by">
                        <button type="submit" name="submit" id="search">search</button>
                    </div>

                    <div class="flex-item-by">
                        <label>By :</label>
                    </div>

                    <div class="flex-item-search-by">
                        <select name="by">
                            <option value="name">Name</option>
                            <option value="wa">Phone</option>
                        </select>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="flex-container">
        <?php
            $result = $conn->query($sql0);
           
            if ($result->num_rows > 0) {
            // output data of each row
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $i++; ?>

                <div class="flex-item">
                    <div class="flex-item-1">
                        <p id="id"><?php echo $i . "."; ?></p>
                    </div>
                    <div class="flex-item-2">
                        <p id="name"><?php echo $row["name"]; ?></p>
                        <p id="wa"><?php echo "Pickup : " . $row["pickup"]; ?></p>
                        <p id="wa"><?php echo "Destination : " . $row["destination"]; ?></p>
                        <p id="wa"><?php echo "Time : " . $row["time"]; ?></p>
                        <p id="wa"><?php echo "Date : " . $row["date"]; ?></p>
                        <p id="wa"><?php echo "Phone : " . $row["phone"]; ?></p>
                        <p id="wa"><?php echo "Email : " . $row["email"]; ?></p>
                     
                    </div>
                    <div class="flex-item-1">
                        <div class="dropdown">
                            <!--i'm dynamically naming each dropdown for every entry in the loop and
                                passing the respective integer value in the dropdown_func().
                                This creates adynamic anchor for each button-->
                          
                            <!--Pass the user trans_id as a get variable in the link-->
                            <a href="./edit_user.php?id=<?php echo $row["id"] ?>">Edit</a> <br>
                         <hr>
                            <a href="./delete_user.php?id=<?php echo $row["id"] ?>"
                                 onclick="return confirm('Are you sure?')">Delete</a>
                          
                        </div>
                    </div>
                </div>

            <?php }
            } else {  ?>
                <p id="none"> No results found :(</p>
            <?php }
            if ($back_button) { ?>
                <div class="flex-container-bb">
                    
                </div>
            <?php }
            $conn->close(); ?>
    </div>

    <script>
    /*  The problem with lots of menus sharing same anchor(dropdown-content) is that clicking on
        any of the buttons produces the same output as clicking the first button. Thus only the
        menu associated with the first button opens. This is BIG PROBLEM when we have lots of menus
        inside the while-loop.
        Hence, solve this problem using dynamic naming to create different anchors for different
        buttons.
        This is a proper solution and NOT a hack/workaround */
    function dropdown_func(i) {
        // Dynamic naming of the dropdown #id
        var doc_id = "dropdown".concat(i.toString());

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;

        // Close any menus, if opened, before opening a new one
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
        }

        document.getElementById(doc_id).classList.toggle("show");
        return false;
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;

        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }

    // Sticky search-bar
    $(document).ready(function() {
        var curr_scroll;

        $(window).scroll(function () {
            curr_scroll = $(window).scrollTop();

            if ($(window).scrollTop() > 120) {
                $("#the-search-bar").addClass('search-bar-fixed');

              if ($(window).width() > 855) {
                  $("#fi-search-bar").addClass('fi-search-bar-fixed');
              }
            }

            if ($(window).scrollTop() < 121) {
                $("#the-search-bar").removeClass('search-bar-fixed');

              if ($(window).width() > 855) {
                  $("#fi-search-bar").removeClass('fi-search-bar-fixed');
              }
            }
        });

        // Fixes some 'unfortunate-graphics-derp' while resizing the window
        $(window).resize(function () {
            var class_name = $("#fi-search-bar").attr('class');

            if ((class_name == "flex-item-search-bar fi-search-bar-fixed") && ($(window).width() < 856)) {
                $("#fi-search-bar").removeClass('fi-search-bar-fixed');
            }

            if ((class_name == "flex-item-search-bar") && ($(window).width() > 855) && (curr_scroll > 120)) {
                $("#fi-search-bar").addClass('fi-search-bar-fixed');
            }
        });
    });

    </script>

</body>
</html>
