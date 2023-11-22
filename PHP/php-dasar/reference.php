<?php

// reference
// mengakses variable yg sama dengan bana variable yg berbeda
// reference di php tidak sama dgn referenc di bahasa lainnya
// analoginya seperti file, jika variable adalah file, dan value adalah isi file, maka reference adalah membuat shortcut 
// saat mengubah isi value dari reference maka otomatis value variable aslinya akan berubah
// untuk membuat referencec terhadap variable, bisa menggunakan karakter &

// assign by reference (reference di variabel)
$name = "Andi";

$otherN = &$name;
$otherN = "Irwan";

echo $name . PHP_EOL;

// pass by reference (reference di argumen value)
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);
increment($counter);
increment($counter);

echo $counter . PHP_EOL;

// returning reference (reference di function) / jarang digunakan
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;
