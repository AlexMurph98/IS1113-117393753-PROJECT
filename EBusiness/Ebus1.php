<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <!--Linking css file-->
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        <meta charset="utf-8"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="calcost.js"></script>
        
        <!--Internal Style sheet-->
        <style>
             .container {
                  background-color: #BEBEBE;
                  padding: 5px 20px 15px 20px;
                  border: 1px solid lightgrey;
                  border-radius: 3px;
                }
                
            .row {
                  display: -ms-flexbox; /* IE10 */
                  display: flex;
                  -ms-flex-wrap: wrap; /* IE10 */
                  flex-wrap: wrap;
                  margin: 0 -16px;
                }    
                
                 .buttoncalc {
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
                    
                .buttonclear {
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
                    
                    .buttonadd {
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
                width: 326px;
                    }
                    
                .contentint {
                  width: 350px ;
                  margin-left: auto ;
                  margin-right: auto ;
                  text-align: left;
                  font-style: italic;
                    } 
                
                 body {
                background: url(http://freephotocourse.com/uploads/3/4/0/2/34026443/2738510_orig.jpg) no-repeat;
                background-size: cover;
                font-family: arial;
                color: white;
                }

        </style>
        
    </head>
    
    <body>
        
        <div class="headingEbus1">
        <h1 class="mainheading">EBusiness</h1>
        </div>
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
       <br/> <br/>
               <!--Adding the content part of the page which is then wrapped using the row and container divs-->
       <div class="contentint">
            <div class="row">
        <div class="container">
          
         
                 <h4>Select a Product</h4>
            
            <br/>
            <!--Adding a form that posts values to ebus2-->
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
                    <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
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
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                </label>
                
                <br/> <br/>
                
                <button type="submit" class="buttonadd" id="btnProceed" disabled>Add to Shopping Cart</button>
                
            </form>
            
            <!--Adding buttons to give users options what to do next-->
            <button class="buttoncalc" onClick="calcSub()">Calculate Cost</button>
            <a class= "buttonclear" role="button" href="Ebus1.php">Clear Choice</a>
         </div>
        </div>
         </div>
         <br/> <br/>
       <div class="footer">
         This was created by Alex Murphy, 117393753, BIS 1.
       </div>

    </body>
</html>