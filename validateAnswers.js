// Use strict and ensure your code stays sharp!
"use strict";

// shortcut getElementById function                                         
var $ = function (id) { return document.getElementById(id); };

function allAnswered(){
    // set up an array to hold the question numbers that the user still needs to answer
    var missing = [];
    
    // check each question for an answer
    if (!($("00").checked || $("01").checked || $("02").checked || $("03").checked)){ missing.push(1);}
    if (!($("10").checked || $("11").checked || $("12").checked || $("13").checked)){ missing.push(2);}
    if (!($("20").checked || $("21").checked || $("22").checked || $("23").checked)){ missing.push(3);}
    if (!($("30").checked || $("31").checked || $("32").checked || $("33").checked)){ missing.push(4);}
    if (!($("40").checked || $("41").checked || $("42").checked || $("43").checked)){ missing.push(5);}
    if (!($("50").checked || $("51").checked || $("52").checked || $("53").checked)){ missing.push(6);}
    if (!($("60").checked || $("61").checked || $("62").checked || $("63").checked)){ missing.push(7);}
    if (!($("70").checked || $("71").checked || $("72").checked || $("73").checked)){ missing.push(8);}
    if (!($("80").checked || $("81").checked || $("82").checked || $("83").checked)){ missing.push(9);}
    if (!($("90").checked || $("91").checked || $("92").checked || $("93").checked)){ missing.push(10);}
    
    // convert the array to a string with the missing question numbers
    var missingString = missing.join(", ");    
    
    // ensure that every question has an answer and return true to the form submit
    if (($("00").checked || $("01").checked || $("02").checked || $("03").checked) && 
        ($("10").checked || $("11").checked || $("12").checked || $("13").checked) &&
        ($("20").checked || $("21").checked || $("22").checked || $("23").checked) &&
        ($("30").checked || $("31").checked || $("32").checked || $("33").checked) &&
        ($("40").checked || $("41").checked || $("42").checked || $("43").checked) &&
        ($("50").checked || $("51").checked || $("52").checked || $("53").checked) &&
        ($("60").checked || $("61").checked || $("62").checked || $("63").checked) && 
        ($("70").checked || $("71").checked || $("72").checked || $("73").checked) &&
        ($("80").checked || $("81").checked || $("82").checked || $("83").checked) && 
        ($("90").checked || $("91").checked || $("92").checked || $("93").checked)){ return true;}    
    // if all questions are not answered, alert the user which questions are missing answers and return false to the form submit
    else {  alert("You must answer all questions.\nYou're missing answers to question(s): " + missingString); // alert user to complete all missing questions
            return false;    }
} // end allAnswered()
