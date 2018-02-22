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
    calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(parmsubtotal){
    
    var vatrate=0.1;
    var discount=0.05;
    var vat;
    var discount;
    var subtotal;
    var total;
    
    subtotal = parmsubtotal;
    vat = (parmsubtotal * vatrate);
    discount = (parmsubtotal * discount);
    total = (parmsubtotal + vat - discount);
    
    display(subtotal, discount, vat, total);
    
}

function display(parm1, parm2, parm3, parm4) {
    
    document.getElementById("subtotal").value= parm1;
    document.getElementById("discount").value= parm2;
    document.getElementById("vat").value= parm3;
    document.getElementById("total").value= parm4;
    
        

    
    $('#btnProceed').prop('disabled', false);
    
    
}  

function enablebtnProceed() {
    $('#btnProceed').prop('disabled', false);
    
} 

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true); 
} 

