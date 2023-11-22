<?php

$bil1 = 4;
$bil2 = 4;
$angka2 = ++$bil1;
$angka3 = $bil2++;

// post increment, kembalikan $angka, lalu naikan angka 1
var_dump($angka2); // hasilnya 5

// pre increment naikan $angka, lalu kembalikan $angka
var_dump($angka3); // hasilnya 4
