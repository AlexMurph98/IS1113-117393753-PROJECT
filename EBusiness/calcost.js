/* global $ */

function calcSub(){
    
    var argSubTotal; 
    
    if(document.getElementById('salesforce').checked) {
    argSubTotal=100;
}
    else if(document.getElementById('aws').checked){ 
        argSubTotal=300;
    }
     else if(document.getElementById('c9').checked){ 
        argSubTotal=200;
     }
     else{
         argSubTotal=400;
     }
     
     
    display(argSubTotal);
}

function calcDisVatTotal(){
    
}

function display(parm1) {
    
    document.getElementById("subtotal").value= parm1;
    document.getElementById("total").value= parm1;
    
        

    
    $('#btnProceed').prop('disabled', false);
    
    
}  

function enablebtnProceed() {
    $('#btnProceed').prop('disabled', false);
    
} 

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true); 
} 

