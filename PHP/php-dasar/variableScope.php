<?php

// jenis variable scope pada PHP 
// global
// local 
// static 

// 1. global scope
// hanya bisa di akses diluar function
$name = "Andi"; // global scope

// function sayName()
// {
//     echo $name . PHP_EOL;
// }

// sayHello();

// 2. local scope 
// hanya bisa di akses didalam function sendiri
// function createNames()
// {
//     $nama = "Andi";
// }

// createNames();
// echo $nama . PHP_EOL;

// 3. global keyword
// gunakan kata kunci global untuk akses variable diluar function dari dalam function
function sayName2()
{
    global $name; // global keyword
    echo $name . PHP_EOL;
}

sayName2();

// 4. static scope
// function sbelum gunakan static scope 
function increment1()
{
    $counter = 1; 
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment1();
increment1();
increment1();

echo "=============" . PHP_EOL;

// penggunaan scope
function increment2()
{
    // $counter = 1; 
    static $counter = 1; // implementasi static scope
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment2();
increment2();
increment2();