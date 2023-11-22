<?php

// contoh string function 
// join() => menggabungkan array jadi string
// explode => memecah string jadi array
//  strtolower => jadi lowercase
//  strtoupper => jadi uppercase
// substr => ambil sebagian string
// trim => hapus whitespace didepan dan belakang string


echo addcslashes("zoo['.']", 'z..A') . PHP_EOL;
// output:  \zoo['\.']

// explode
// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0] . PHP_EOL; // piece1
echo $pieces[1] . PHP_EOL; // piece2

// Example 2
$data = "foo:*:1023:1000:gecos:/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user . PHP_EOL; // foo
echo $pass . PHP_EOL; // *
echo $gecos . PHP_EOL; // *

// halaman dokumentasi https://www.php.net/manual/en/ref.strings.php 