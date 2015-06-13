<?php 
// PHP specifies uses for single and double quotes. 
// Codeup Code Standard says name variables with camel case. 
// Double quotes are required for string interpolation. 
// Concatenators are not to be included in an interpolation. 
// Use escape character \ to print characters that are special.

// EXERCISE 7.1.2 COMPLETE

	$firstName = 'Paula';

	$introduction = "Hello, my name is $firstName. I can't say \"home\" is in Nevada." 
	. PHP_EOL . PHP_EOL;

	echo $introduction;

	$brickInTheWall = "We don't need no education";
	$brickInTheWall2 = "We don't need no thought control";
	echo $brickInTheWall . PHP_EOL . $brickInTheWall2 . PHP_EOL . PHP_EOL;

	$shakespear1 = "All the world's a stage," . PHP_EOL;
	$shakespear2  = "And all the men and women merely players:" . PHP_EOL;
	$shakespear3 = "They have their exits and their entrances;" . PHP_EOL;
	echo $shakespear1 . $shakespear2 . $shakespear3 . PHP_EOL . PHP_EOL;

	$firstName = "Joe";
	$lastName = "Blow";
	$address = "123 Any Street";
	echo $lastName . ", " . $firstName . ", " . $address . PHP_EOL . PHP_EOL;
	echo "{$firstName}{$lastName}{$address}" . PHP_EOL . PHP_EOL;
	echo $firstName . " " . $lastName . PHP_EOL;
	echo $address . PHP_EOL . PHP_EOL;



 ?>
