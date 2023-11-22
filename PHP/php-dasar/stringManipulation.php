<?php

// 1. dot operator
$nama = "irwan";
$test = "dasd a" . "sadasda " . $nama . PHP_EOL;
echo $test;

// 2. konversi string to number atau sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.02";
var_dump($valueFloat);

// jika salah
$valueFloat = (float)"salah";
var_dump($valueFloat);

// 3. akses karakter di string
$name = "Irwan";
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;

// 4. variable parsing
echo "Hello $name, selamat belajar PHP" . PHP_EOL;

// 5. curly brace (string tanpa spasi)
echo "Hello {$name}esia, selamat belajar PHP" . PHP_EOL;