<?php 
// EXERCISE 7.6 PHP foreach loop

	$books = array(
	    'The Hobbit' => array(
	        'published' => 1937,
	        'author' => 'J. R. R. Tolkien',
	        'pages' => 310
	    ),
	    'Game of Thrones' => array(
	        'published' => 1996,
	        'author' => 'George R. R. Martin',
	        'pages' => 835
	    ),
	    'The Catcher in the Rye' => array(
	        'published' => 1951,
	        'author' => 'J. D. Salinger',
	        'pages' => 220
	    ),
	    'A Tale of Two Cities' => array(
	        'published' => 1859,
	        'author' => 'Charles Dickens',
	        'pages' => 544
	    )
	);

	// CODE SAVED FOR PERSONAL REVIEW
	// $book is the name assigned to the array under $bookTitle
	// If it was written as ($books as $bookTitle), then array to string error
	// because $bookTitle would be the VALUE of the index, which is an array
	// ($books as $bookTitle) is ($arrayWhole as $valuesOfElements)
	// ($books as $bookTitle => $book) is ($array as $key => $valueOfKey)

	// Display book and information on each book
	// foreach($books as $bookTitle => $bookDataArray) {
	// 	echo $bookTitle . PHP_EOL;
	// 	foreach($bookDataArray as $key => $value) {
	// 		echo $key . ": " . $value . PHP_EOL; 
	// 	}
	// }

	// Display books published after 1950
	foreach($books as $bookTitle => $bookDataArray) {
		if ($bookDataArray['published'] > 1950) {
			echo $bookTitle . PHP_EOL; 
		}
	}

 ?>
