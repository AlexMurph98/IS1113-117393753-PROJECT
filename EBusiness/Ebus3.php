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
        echo "First Name is " . $_POST["fullname"] . ".";
        ?>
        <br/>
        <?php
        echo "E-mail is " . $_POST["email"] . ".";
        ?>
        <br/>
        <?php
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        <br/>
        
    </body>
</html>