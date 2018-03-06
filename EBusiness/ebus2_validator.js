/* global $ */

function validateDetails(){
    
    var pin;
    var fullname;
    var email;
    var cardname;
    var cardnum;
    var expmonth;
    var expyear;
    var cvv;
    
    pin = document.getElementById("user_pin").value;
    fullname = document.getElementById("fullname").value;
    email = document.getElementById("email").value;
    cardname = document.getElementById("cname").value;
    cardnum = document.getElementById("ccnumb").value;
    expmonth = document.getElementById("expmonth").value;
    expyear = document.getElementById("expyear").value;
    cvv = document.getElementById("cvv").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else if (fullname == ""){
        alert("Please enter your name");
        return false
    }
     else if (email == ""){
        alert("Please enter your email");
        return false
    }
     else if (cardname == ""){
        alert("Please enter your card name");
        return false
    }
     else if (cardnum == ""){
        alert("Please enter your card number");
        return false
    }
     else if (expmonth == ""){
        alert("Please enter your cards expiry month");
        return false
    }
     else if (expyear == ""){
        alert("Please enter your cards expiry year");
        return false
    }
     else if (cvv == ""){
        alert("Please enter your cards cvv");
        return false
    }
    else{
        enablebtnPurchase();
        
    }
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}