<?php 
// EXERCISE 7.8 PHP 

$nouns = [
	'pinenuts',
	'pipes',
	'prunes',
	'pants',
	'privy',
	'princess',
	'price',
	'pest',
	'plate',
	'pen',
	'palace',
	'preacher',
	'prancer'
];

$adjectives = [
	'purple',
	'poisonous',
	'pure',
	'pixelated',
	'powerful',
	'pink',
	'powdered',
	'preachy',
	'pretty',
	'pristine',
	'puny',
	'peevish'
];


$nounRandom = array_rand($nouns, 1);
$adjectivesRandom = array_rand($adjectives, 1);

?>
<!DOCTYPE html>
<html>
 <head>
 	<link rel="stylesheet" type="text/css" href="/css/normalize.css">
 	<link rel="stylesheet" type="text/css" href="/css/server_name_generator.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>server name generator</title>
 </head>
 <body>
 
 	<div class="container">
 		<h1><?php echo $adjectives[$adjectivesRandom] . " " . $nouns[$nounRandom] ?></h1>


 	</div>

 </body>
 </html> 
