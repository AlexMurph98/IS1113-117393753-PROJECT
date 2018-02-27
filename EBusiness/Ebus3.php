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
        echo "First Name: " . $_POST["fullname"] . ".";
        ?>
        <br/>
        <?php
        echo "E-mail: " . $_POST["email"] . ".";
        ?>
        <br/>
        <?php
        echo "Total: " . $_SESSION["total"] . ".";
        ?>
        <br/>
        
    </body>
</html>