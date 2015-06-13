<?php 
// EXERCISE 7.3 

	$numbers = array(1, 2, 3, 4, 5);
	var_dump($numbers) . PHP_EOL;
	print_r($numbers) . PHP_EOL;

	$numbers = [1, 2, 3, 4, 5];
	var_dump($numbers) . PHP_EOL;
	print_r($numbers) . PHP_EOL . PHP_EOL;
	echo $numbers[3] . PHP_EOL;

	$contact = [
		"firstName" => "Paula",
		"lastName" => "Schuler",
		"email" => "paula@gmail.com",
		"phone" => "210-555-5555"
	];
	var_dump($contact);

	$test = [
		"one" => [
			"firstName" => "Paula",
			"lastName" => "Schuler",
			"email" => "paula@gmail.com",
			"phone" => "210-555-5555"
		],
		"two" => [
			"firstName" => "Carol",
			"lastName" => "Burnett",
			"email" => "carol@gmail.com",
			"phone" => "210-555-3333"
		],
		"three" => [
			"firstName" => "Barack",
			"lastName" => "Obama",
			"email" => "barack@gmail.com",
			"phone" => "210-111-1111"
		]
	];
	var_dump($test);

 ?>
