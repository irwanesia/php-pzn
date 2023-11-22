<?php

// php mendukung regex yg kompatibel dgn bahasa perl
// regex merupakan fitur yg digunakan untuk melakukan pencarian di string menggunakan pola tertentu
// materi regex ini lumayan panjang, dan hanya sebagian yg akan disampaikan
// lebih detailnya https://www.php.net/manual/en/pcre.pattern.php

// function regex, detailnya ada di https://www.php.net/manual/en/ref.pcre.php
// preg_match($pattern, $subject) => untuk mencari match pattern
// preg_match_all($pattern, $subject) => untuk mencari match pattern
// preg_replace($pattern, $replacment, $subject) => untuk mereplace semua pattern dgn replacment
// preg_split($pattern, $subject) => memtong dengan pattern menjadi array

$matches = [];
$result = (bool)preg_match_all("/ir|wan|esia|To/i", "Irwan Tjandra Nesia", $matches);
$result2 = (bool)preg_match("/ir|wan|esia|To/i", "Irwan Tjandra Nesia", $matches);

var_dump($result);
var_dump($matches);


// preg_replace()
$result1 = preg_replace("/juancukk|kirik/i", "***", "Eh, keplon. Sini lu, Juancukk!. kirik mene iraaa!");
var_dump($result1);

// preg_split()
$result2 = preg_split("/[\s,-]/i", "Eh, keplon. Sini lu, Juan-cukk!");
var_dump($result2);
