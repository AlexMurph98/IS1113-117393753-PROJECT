<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
                
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        <br/>
         <?php
        echo "First Name is " . $_POST["firstname"] . ".";
        ?>
        <br/>
        <?php
        echo "E-mail is " . $_POST["email"] . ".";
        ?>
        <br/>
        <?php
        echo "Cardname is " . $_POST["cardname"] . ".";
        ?>
        <br/>
        <?php
        echo "Card Number is " . $_POST["cardnumber"] . ".";
        ?>
    </body>
</html>