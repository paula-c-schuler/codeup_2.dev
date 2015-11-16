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
    var result = "";
    var unacceptable = ["a", "b", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n",
    "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

    //This iteration adds an event listener to every class of buttons. 
    for (var i = 0; i < buttons.length; i++)
    { 
        buttons[i].addEventListener("click", buttonInputsPopulated, false);
        // console.log("Listening");
    }

    // Discerns value of input which determines next action.
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

    
    // Evaluates the string, allows the result to be used in next calculation.
    var evaluate = function()
    {
        var display = document.getElementById("display").value;
        var result = eval(display);
        document.getElementById("display").value = result;
    }

