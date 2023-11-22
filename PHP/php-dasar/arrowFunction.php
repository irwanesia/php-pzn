<?php

// arrow function digunkan untuk function yang sederhana

$fname = "Andi";
$lname = "Santoso";

$anonymousFunction = function () use ($fname, $lname): string {
    return "Hello $fname $lname" . PHP_EOL;
};

// contoh arrow function
$arrowFunction = fn () => "Hello $fname $lname" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();
