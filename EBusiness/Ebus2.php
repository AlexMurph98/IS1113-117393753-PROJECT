<!DOCTYPE html>
<html>
    <head>
          <title>Enter Details</title>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
         
         <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        
        <div class="heading">
        <h1 class="mainheading">117393753 - IS1113 Project!</h1>
        <h4 class="subheading">Use The Navigation Bar Below For Easy Access.</h4>
        </div>
        <br/>
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
                <li><a href="EBusiness/Ebus1.php">EBusiness</a></li>
            </ul>
         
         </li>
       </ul>
       </div>
       <div class="content" style="color=black">
         
       <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">

                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
        </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
         
         
         
       </div>
       <div class="footer" style="color=black">
         This was created by Alex Murphy, 117393753, BIS 1.
       </div>
        
    </body>
</html>