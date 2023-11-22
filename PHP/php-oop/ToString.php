<?php

// magic function
// function2 yg sudah ditentukan kegunaannya di PHP
// kita tidak bisa menggunakan function tersebut, kecuali memang sudah ditentukan kegunaannya
// sebelumnya kita sudah membahas beberapa magic function seperti __construct() sebagai constructor, __destruct() sebagai destructor, dan __clone() sebagai object cloning dan masih banyak lagi
// berikut link untuk melihat magic function lainnya
// https://www.php.net/manual/en/langguage.oop5/magic.php

// __toString() Function adalah magic function yg representasi string sebuah object
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Irwan";
$student1->value = 100;

$string = (string) $student1;
var_dump($string);
