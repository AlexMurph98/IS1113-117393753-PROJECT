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
                    
                .contentint {
                  width: 350px ;
                  margin-left: auto ;
                  margin-right: auto ;
                  text-align: left;
                    }    
                    
                .row {
                  display: -ms-flexbox; /* IE10 */
                  display: flex;
                  -ms-flex-wrap: wrap; /* IE10 */
                  flex-wrap: wrap;
                  margin: 0 -16px;
                }
                
                .container {
                  background-color: #BEBEBE;
                  padding: 5px 20px 15px 20px;
                  border: 1px solid lightgrey;
                  border-radius: 3px;
                }
        </style>
    </head>
    
    <body>
        <div class="contentint">
        <div class="row">
        <div class="container">
        <h4 style="text-align:center;">RECEIPT</h4>
                
        
        <?php
        echo "Customer Name: " . $_POST["fullname"] . ".";
        ?>
        <br/>
        <?php
        echo "E-mail: " . $_POST["email"] . ".";
        ?>
        <br/>
        <?php
        echo "Subtotal: $" . $_SESSION["subtotal"] . ".";
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
        <br/> <br/>
        <a href="../homepage.html" class="buttonhome">Return Home</a> <button onclick="myPrint()" class="buttonprint">Print Receipt</button>
        </div>
        </div>
        </div>
        
        
        <script>
        function myPrint() {
            window.print();
                }
        </script>

        
    </body>
</html>