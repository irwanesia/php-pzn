<?php

// function atau method sama
function hello()
{
    echo "Hello ini function" . PHP_EOL;
}

hello();
hello();

// function dengan argument dan default argument
function sayHello($name = "Default Argument Value")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("irwan");
sayHello("Andi");
sayHello();

// function dengan type declaration
function sum(int $angka1, int $angka2) {
    $total = $angka1 + $angka2;
    echo "Total $angka1 + $angka2 = $total" . PHP_EOL;
}

sum(100, 50);
sum("100", "50");
// sum("100", "salah");
sum(true, false);
// sum([], []);

// variable length argument list / seperti array
// contoh jika menggunakan array
function sumAlls(array $values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }

    echo "Total dari " . implode(",", $values) . " = $total " . PHP_EOL;
}

sumAlls([3, 5, 1, 4]);

// contoh jika menggunakan variable length argument list
function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }

    echo "Total dari " . implode(",", $values) . " = $total " . PHP_EOL;
}

sumAll(3, 5, 1, 4);

// jika kita sudah punya variable dengan nilai array
$nilai = [1,3,5,3,4];
sumAll(...$nilai);