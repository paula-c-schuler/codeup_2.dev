// function () {
//     "use strict";

// EXERCISE 4.7.3 Javascript Calculator
// Extra features and changes include:
// Percent button

    var buttons = document.getElementsByClassName("buttons");     

    var spot1Holder = "";
    var spot2Holder = "";
    var operand = "";
    var display = document.getElementById("display");
    var fieldRight = document.getElementById("fieldRight");
    var result = "";

    //THIS ITERATION ADDS A LISTENER TO EVERY BUTTON 
    for (var i = 0; i < buttons.length; i++)
    { 
        buttons[i].addEventListener("click", buttonInputsPopulated, false);
        // console.log("Listening");
    }

    function buttonInputsPopulated (event)
    {
        var value = this.value; 
        if (this.value === "c")
        {
            clearAll();
        }
        else if (this.value === "=")
        {
            console.log(this.value);
            var equal = this.value;
            console.log(equal = " is equal");
            evaluate();
            // cleardisplay();
        }

        else if (this.value === "%")
        {
            percentNumber = document.getElementById("display").value;
            percent (percentNumber);
            
        }
        else if (this.value === "+" || this.value === "*" || this.value === "-" || this.value === "/")
        {
            operand = this.value;
            document.getElementById("display").value += operand;
        }
        else if (this.value)
        {
            console.log(this.value);
            document.getElementById("display").value += this.value;
            

        }


        else 
        {
            display.value += this.value;
        }
    }

    var cleardisplay = function ()
    {
        document.getElementById("display").value = "";
    } 

    var clearAll = function ()
    {
        location.reload(true); 
    }

    var percent = function()
    {
        console.log(percentNumber);
        percentNumber /= 100;
        console.log(percentNumber);
        document.getElementById("display").value = percentNumber;
}

    var displayString = function()
    {
        console.log(this.value + " is in displayString");
    }

    
// NEED TO EVALUATE THE STRING, BUT DETERMINE OPERAND? 
    var evaluate = function()
    {
        var display = document.getElementById("display").value;
        console.log(display);
        var result = eval(display);
        console.log(result);
        document.getElementById("display").value = result;
        // if (this.value == "+")
        // {
        //     console.log(document.getElementById("display" + " IS IN EVALUATE"));
        //     // display.value = eval(display.value);
            
        // } else if (operand.value == "-")
        // {
        //     display.value = parseInt(display.value) - parseInt(fieldRight.value);
            
        // } else if (operand.value == "*")
        // {
        //     display.value = parseInt(display.value) * parseInt(fieldRight.value);
            
        // } else if (operand.value == "/")
        // {
        //     display.value = parseInt(display.value) / parseInt(fieldRight.value);
            
        // } 
    }

// var negative = function()
//     {
//         if (display === 0)
//         {
//             alert("syntax error, please clear");
//         }  
//         if (display > 0)
//         {
//             display.value = parseInt(display.value);
//             console.log (display.value);
//             display.value = parseInt("-" + display.value);
//             console.log ("Display negative value is " + display.value);
//         }
    // }
