<?php 
// EXERCISE 7.5 

	$things = array
		(
			'Sgt. Pepper', 
			"11", 
			null, 
			array(
				1,
				2,
				3
			), 
			3.14, 
			"12 + 7", 
			false, 
			(string) 11
		);

	// identifies data type of array values
	// foreach($things as $thing) {
	// 	if (is_int($thing)) {
	// 		echo "$thing is an integer" . PHP_EOL;
	// 	} else if (is_float($thing)) {
	// 		echo "$thing is a float" . PHP_EOL;
	// 	} else if (is_bool($thing)) {
	// 		echo "$thing is a boolean" . PHP_EOL;
	// 	} else if (is_array($thing)) {
	// 		echo "$thing is an array" . PHP_EOL;
	// 	} else if (is_null($thing)) {
	// 		echo "$thing is null" . PHP_EOL;
	// 	} else if (is_string($thing)) {
	// 		echo "$thing is a string" . PHP_EOL;
	// 	}
	// }

	// identifies scalar datatype items in array
	// foreach($things as $thing) {
	// 	if (is_scalar($thing)) {
	// 		echo "$thing is scalar" . PHP_EOL;
	// 	}
	// }

	// display each element, including those nested in an array
	foreach($things as $thing) {
		if (!is_array($thing)) {
			echo $thing . PHP_EOL;
		} else if (is_array($thing)) {
			foreach($thing as $value) {
				echo "$value is part of an array" . PHP_EOL;
			}
		}
	}

 ?>
