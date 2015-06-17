<?php 
// EXERCISE 7.8 PHP WITH HTML, LOOPS
// needs styling
// EXERCISE 7.9 PHP Alternative Syntax
// not finished

$myFavorites = [
	'Cello music',
	'Extra sharp white cheddar',
	'Italian restaurants in Italy',
	'Photography',
	'Dancing',
	'Writing',
	'Treehouses',
	'Camping',
	'Concerts',
	'Singing'
]
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>favorite things</title>
</head>
<body>
	<h1>Some of My Favorite Things in Life</h1>
	<ol>
		<?php foreach($myFavorites as $favorite) { ?>
		<li><?php echo $favorite ?></li>
		<?php } ?>	
	</ol>
</body>
</html>
