<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="calcost.js"></script>
        
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
         <li><a href="https://github.com/AlexMurph98/IS1113-117393753-PROJECT" target="_blank">Github</a></li>
         <li><a href="../AboutCloud.html">About Cloud</a></li>
       </ul>
       </div>
       <br/> <br/>
       <div class="contentcvpages">
         
                 <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
                
                <label for="salesforce">
                    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                    SalesForce @ $100
                </label>
                
                <br/> <br/>
                
                <label for="aws">
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    Amazon Web Services @ $300
                </label>
                
                <br/>
                <br/>
                
                <label for="c9">
                    <input type="radio" id="c9" name="product" onClick="disablebtnProceed()"/>
                    Cloud 9 @ $200
                </label>
                
                <br/>
                <br/>
                
                <label for="gmail">
                    <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                    Gmail @ $400
                </label>
                
                 <br/>
                <br/>
                
                <label for="subtotal">
                    Sub Total
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </label>
                
                <br/> <br/>
                
                <label for="discount">
                    Discount at 5%
                    <input type="text" id="discount" name="discount" value="0.00" readonly/>
                </label>
                
                <br/> <br/>
                
                 <label for="vat">
                    Vat at 10%
                    <input type="text" id="vat" name ="vat" value="0.00" readonly/>
                </label>
                
                <br/> <br/>
                
                <label for="total">
                    Total
                    <input type="hidden" id="total" name="total" value="0.00" readonly/>
                </label>
                
                <br/> <br/>
                
                <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
         
         
         
       </div>
       <div class="footer" style="color=black">
         This was created by Alex Murphy, 117393753, BIS 1.
       </div>

    </body>
</html>