/*User starts the game on alert ok.
  User has to type in five characters that match the given string.
  User must do this within a specified time.
  If user fails to make deadline with a match, the game gives another chance. 
  The game plays through ten attempts.
  At the end of ten, the score is tallied as a ratio. 

  Coder needs a random number generator for creating the letters.
  Random is compiled onto an array and displayed.
  Input is captured.
  Input is compared. 
  If input matches, then user gets a point.
  If input failes to match within time, then user gets another try...
  Until ten tries are finished.
  Then score is converted to percentage and displayed on a new line. 
  */

"use strict";
    
// Keys mapped for keyboard input
var keyMapping = {
    65: 'a',
    66: 'b',
    67: 'c',
    68: 'd',
    69: 'e',
    70: 'f',
    71: 'g',
    72: 'h',
    73: 'i',
    74: 'j',
    75: 'k',
    76: 'l',
    77: 'm',
    78: 'n',
    79: 'o',
    80: 'p',
    81: 'q',
    82: 'r',
    83: 's',
    84: 't',
    85: 'u',
    86: 'v',
    87: 'w',
    88: 'x',
    89: 'y',
    90: 'z',
};
    
// Function that creates a random string
function randString()
{
    var randomText = '';
    var possible = 'abcdefghijklmnopqrstuvwxyz';

    for(var i=0; i < 5; i++)
    {
        text += possible.charAt(Math.floor(Math.random(65) * possible.length));
    }

    return text;
}



var intervalID = setInterval(function(){

    // Call random function to get random string
    // Set html of an element to this random string so user can see it
    // Capture user keyboard and match with random string before it changes
    // If user enters correctly give the user a point and add that to the html

}, 5000);
