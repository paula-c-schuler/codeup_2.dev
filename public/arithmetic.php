<?php

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

$a = 6;
$b = 9;
echo add(6, 9) . " added" . PHP_EOL;
echo subtract(6, 9) . " subtracted" . PHP_EOL;
echo multiply(6, 9) . " multiplied" . PHP_EOL;
echo divide(6, 9) . " divided" . PHP_EOL;

