// function () {
//     "use strict";

// EXERCISE 4.7.3

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
        console.log("Listening");
    }

    function buttonInputsPopulated (event)
    {
        var value = this.value; 
        if (this.value === "c")
        {
            clearFields();
        }
        else if (this.value === "=")
        {
            evaluateFields();
            clearFieldOperand();
        }

        else if (this.value === "%")
        {
            console.log("percent can be heard");
            // document.getElementById("display").value *= 100;
        }
        else if (isNaN(this.value))
        {
            operand = this.value;
            document.getElementById("operand").value = operand;
        }
        else if (operand != "")
        {
            fieldRight.value += this.value;
        } 
        else if (this.value === "-")
        {
            console.log(this.value);
        }


        else 
        {
            display.value += this.value;
        }
    }

    var clearFieldOperand = function ()
    {
        document.getElementById("operand").value = "";
    } 

    var clearFields = function ()
    {
        location.reload(true); 
    }

    var percent = function()
    {
        this.value *= 100;
    }

    var negative = function()
    {
        if (display === 0)
        {
            alert("syntax error, please clear");
        }  
        if (display > 0)
        {
            display.value = parseInt(display.value);
            console.log (display.value);
            display.value = parseInt("-" + display.value);
            console.log ("Display negative value is " + display.value);
        }
    }

    

    var evaluateFields = function()
    {
        operand = document.getElementById("operand");
        if (operand.value == "+")
        {
            display.value = parseInt(display.value) + parseInt(fieldRight.value);
            fieldRight.value = "";
        } else if (operand.value == "-")
        {
            display.value = parseInt(display.value) - parseInt(fieldRight.value);
            fieldRight.value = "";
        } else if (operand.value == "*")
        {
            display.value = parseInt(display.value) * parseInt(fieldRight.value);
            fieldRight.value = "";
        } else if (operand.value == "/")
        {
            display.value = parseInt(display.value) / parseInt(fieldRight.value);
            fieldRight.value = "";
        } 
    }
// }


