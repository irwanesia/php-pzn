<?php 

// fungsi untuk cek/melihat tipe data pada variabel
// contoh is function
// is_string
// is_bool

// halaman dokumentasi https://www.php.net/manual/en/ref.var.php 
$data = "sample";

var_dump(is_string($data));
var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_null($data));