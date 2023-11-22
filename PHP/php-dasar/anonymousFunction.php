<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("irwan");
$sayHello("andi");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Eko", function(string $name): string {
    return strtoupper($name);
});

// atau menggunakan anonymous function
$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Irwan", $filterFunction);

// mengakses variable di luar closure / function
// gunakan use()
$firstN = "Andi";
$lastN = "Santoso";

$sayHelloAndi = function () use ($firstN, $lastN) {
    echo "Hello $firstN $lastN". PHP_EOL;
};
$sayHelloAndi();