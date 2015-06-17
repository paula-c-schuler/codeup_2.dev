<?php 
// EXERCISE 7.8 PHP WITH HTML, loops
// Loops work. CSS not finished. If "purple", change color to purple?
// Next: Add a submit button option to get a new name
// EXERCISE 7.9 PHP Alternative Syntax
// not finished

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
 	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>server name generator</title>
 </head>
 <body>
 
 	<div class="container">
 		<div class="row one-fifth">
 			<div class="heading">The new server name is:</div>
 		</div>
 		<div class="row one-fifth">
 			<div class="name"><?php echo $adjectives[$adjectivesRandom] . " " . $nouns[$nounRandom]?></div> 
 		</div>
 	</div>

 </body>
 </html> 
