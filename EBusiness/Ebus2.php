<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
          <title>Enter Details</title>
          <!--linking stylesheet-->
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
         <meta charset="utf-8"/>
         <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
         <!--Function for the text box to only allow numbers only-->
         <script language="Javascript">
             function isNumberKey(evt)
            {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
 
                return true;
            }
         </script>
         
         <!--Function for the text box to only allow letters only-->
         <script language="Javascript">
             function alphaOnly(e) {
                var code;
                if (!e) var e = window.event;
                if (e.keyCode) code = e.keyCode;
                else if (e.which) code = e.which;
                if ((code >= 48) && (code <= 57)) { return false; }
                return true;
                }
         </script>
        
        <!--Internal style sheet-->
        
        <style>
            .row {
                  display: -ms-flexbox; /* IE10 */
                  display: flex;
                  -ms-flex-wrap: wrap; /* IE10 */
                  flex-wrap: wrap;
                  margin: 0 -16px;
                }
                
            .col-50 {
                  -ms-flex: 50%; /* IE10 */
                  flex: 50%;
                }

            .col-75 {
                  -ms-flex: 75%; /* IE10 */
                  flex: 75%;
                }
                
            .col-50,
            .col-75 {
                  padding: 0 16px;
                }
                
            .container {
                  background-color: #BEBEBE;
                  padding: 5px 20px 15px 20px;
                  border: 1px solid lightgrey;
                  border-radius: 3px;
                }

            input[type=text] {
                  width: 100%;
                  margin-bottom: 20px;
                  padding: 12px;
                  border: 1px solid #ccc;
                  border-radius: 3px;
                }
                
                input[type=password] {
                  width: 100%;
                  margin-bottom: 20px;
                  padding: 12px;
                  border: 1px solid #ccc;
                  border-radius: 3px;
                }

            label {
                  margin-bottom: 10px;
                  display: block;
                }
                
            .btn {
                  background-color: grey;
                  color: white;
                  padding: 12px;
                  margin: 10px 0;
                  border: none;
                  width: 80%;
                  border-radius: 3px;
                  cursor: pointer;
                  font-size: 17px;
                }

            .btn:hover {
                  background-color: #45a049;
                }
                
                .btnvalidate {
                  background-color: #4CAF50;
                  color: white;
                  padding: 12px;
                  margin: 10px 0;
                  border: none;
                  width: 60%;
                  border-radius: 3px;
                  cursor: pointer;
                  font-size: 17px;
                }
                
                body {
                background: url(http://freephotocourse.com/uploads/3/4/0/2/34026443/2738510_orig.jpg) no-repeat;
                background-size: cover;
                font-family: arial;
                color: white;
                }
                
                /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
            @media (max-width: 800px) {
                  .row {
                  flex-direction: column-reverse;
                 }
                  .col-25 {
                   margin-bottom: 20px;
                 }
}


        </style>
    </head>
    <body>
        
        <div class="heading">
        <h1 class="mainheading">117393753 - IS1113 Project!</h1>
        <h4 class="subheading">Use The Navigation Bar Below For Easy Access.</h4>
        </div>
        <br/>
        <!--This is the nav bar which is made using unordered lists-->
        <div class="navigation">
       <ul>
         <li><a href="../homepage.html">Home</a></li>
         <li><a>My Information</a>
            <ul>
                <li><a href="../CV/cv_page1.html">Curriculum Vitae</a></li>
                <li><a href="../interests/sports.html">Interests</a></li>
                <li><a href="../interests/cloud.html">Cloud Services</a></li>
            </ul>
         </li>
         <li><a>Cloud Store</a>
            <ul>
                <li><a href="mybus.html">My Company</a></li>
                <li><a href="EBusiness/Ebus1.php">EBusiness</a></li>
            </ul>
         
         </li>
         <li><a href="https://github.com/AlexMurph98/IS1113-117393753-PROJECT" target="_blank">Github</a></li>
         <li><a href="../AboutCloud.html">About Cloud</a></li>
       </ul>
       </div>
               <!--Adding the content part of the page which is then wrapped using the row and container divs-->
       <div class="contentcvpages">
         <br/> <br/>
       <h2>Please enter your payment details</h2>
        
        <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="Ebus3.php" method="POST">

        
          <div class="col-50">
            <h4>Billing Address</h4>
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" placeholder="John M. Doe" onkeypress="return alphaOnly(event);" maxlength="50">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" maxlength="50">
            </div>
          

          <div class="col-50">
            <h4>Payment</h4>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="John More Doe" onkeypress="return alphaOnly(event);" maxlength="50">
            <label for="ccnumb">Credit card number</label>
            <input type="text" id="ccnumb" name="ccnumb" placeholder="1111-2222-3333-4444" onkeypress="return isNumberKey(event)" maxlength="16">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" onkeypress="return alphaOnly(event);" maxlength="9">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" onkeypress="return isNumberKey(event)" maxlength="4">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" onkeypress="return isNumberKey(event)" maxlength="3">
                 <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" onkeypress="return isNumberKey(event)" maxlength="4">
                <p style="text-align:center;">Please ensure that you validate the details to enable the proceed button</p>
                <br/> <br/>
              <input type="submit" id="btnPurchase" value="Continue to checkout" class="btn" disabled>
             
                <br/>
                
              </div>
             
            </div>
          </div>
         </form>
         <br/>
         <!--Button using validation function set on ebus2_val-->
         <button onClick="validateDetails()" class="btnvalidate">Validate</button>
        </div>
        
        
    
      
      <br/>
                            
    </div>
  </div>

        
        
        
             <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["fullname"] = $_POST["fullname"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["cname"] = $_POST["cardname"];
            $_SESSION["ccnumb"] = $_POST["cardnumber"];
            $_SESSION["vat"] = $_POST["vat"];
            $_SESSION["discount"] = $_POST["discount"];
            $_SESSION["subtotal"] = $_POST["subtotal"];
            ?>
         
       </div>
        
       <div class="footer">
         This was created by Alex Murphy, 117393753, BIS 1.
       </div>
        
    </body>
</html>