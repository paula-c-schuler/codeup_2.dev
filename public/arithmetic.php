<?php
// EXERCISE 7.7 PHP ARITHMETIC - a study in scope - COMPLETE

// These variables have no impact on returns 
// because they were not passed in the function calls at the bottom
$a = 12;
$b = 6;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

function test($a, $b)
{
	return $a / $b;
}

echo add(6, 9) . " added" . PHP_EOL;
echo subtract(6, 9) . " subtracted" . PHP_EOL;
echo multiply(6, 9) . " multiplied" . PHP_EOL;
echo divide(6, 9) . " divided" . PHP_EOL;
echo modulus(6, 9) . " modulus" . PHP_EOL;
echo test(6, 9) . " testing modulus" . PHP_EOL;
