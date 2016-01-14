
var math = Math.floor((Math.random()*50)+1);
console.log (math);
i = 0;

for (i = 0; i < 50; i++) {

	if (i % 2 != 0) {

		console.log("Here is an odd number: " + i);

		continue;

	} else if (i % 2 != 0) {
		console.log("This is an even number: " + i);
	}
}

/*
*also can be written as 
*
*for (i = 1; i < 50; i+=2) {
*	console.log ("This is an odd number.")
*	}
*}
*/

/*
*to not print the random number
*for (i = 1; i < 50; i++) {
*	if (math == i) {
*		console.log ("Yikes, skip this one!")
*
*		continue; 
*		
*	} else if (i % 2 != 0) {
*		console.log ("This is an odd number: " + i);
*	}
*}
*
*/


/* also can be written as 
 *	do {
 *		var math = Math.floor((Math.random()*50)+1);
 *	} for (i = 1; i < 50; i++) {
 *		if (math == i) {
 *			console.log ("Yikes, skip this one!")
 *		} else if (i % 2 != 0) {
 *			console.log ("This is an odd number: " + i);
 *		}
 *	}
 */
 
