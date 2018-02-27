<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <meta charset="utf-8"/>
        <style>
            .buttonhome {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                    }
                    
                .buttonprint {
                background-color: black;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                    }
                    
                .content {
                  width: 200px ;
                  margin-left: auto ;
                  margin-right: auto ;
                  text-align: left;
                    }    
        </style>
    </head>
    
    <body>
        <div class="content">
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
        echo "VAT: $" . $_SESSION["vat"] . ".";
        ?>
        <br/>
        <?php
        echo "Discount: $" . $_SESSION["discount"] . ".";
        ?>
        <br/>
        <?php
        echo "Total: $" . $_SESSION["total"] . ".";
        ?>
        <br/>
        <a href="../homepage.html" class="buttonhome">Return Home</a> <button onclick="myPrint()" class="buttonprint">Print Receipt</button>
        </div>
        
        <script>
        function myPrint() {
            window.print();
                }
        </script>

        
    </body>
</html>