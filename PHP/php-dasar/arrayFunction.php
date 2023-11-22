<?php

// contoh array fumction
// array_keys() mengambil semua key milik array
// array_values() mengambil semua value milik array
// array_map() mengubah semua data array dengan callback
// sort() mengurutkan array
// rsort() mengurutkan array terbalik
// shuffle() mengubah posisi data di array secara random


$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$mapFunction = array_map(fn(int $value) => $value * 10, $data);
var_dump($mapFunction);

rsort($data);
var_dump($data);

// halaman dokumentasi https://www.php.net/manual/en/ref.array.php 