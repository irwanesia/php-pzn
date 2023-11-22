<?php

// stdClass
// class kosong bawaan dari php
// biasanya digunakan ketika melakukan konversi dari tipe lain menjadi tipe object
// stdClass sangat berguna ketika ingin melakukan konversi dari tipe data array ke object secara otomatis

$array = [
    "firstname" => "irwan",
    "midllename" => "irwanisme",
    "lastname" => "irwanesia"
];

$object = (object) $array;
var_dump($object);

echo "First Name : $object->firstname" . PHP_EOL;
echo "Midlle Name : $object->midllename" . PHP_EOL;
echo "Last Name : $object->lastname" . PHP_EOL;
