<?php

// generator
// sebelumnya sudah diketahui untuk membuat object yg bisa diiterasi bisa menggunakan iterator
// namun membuat iterator manual sangatlahj ribet
// namnun di PHP terdapat fitur generator yg bisa kita gunakan 
// untuk membuat iterator secara otomatis hanya dengan kata kunci yield

// iterator secara manual menggunakan array
function getGenap(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

$Genap = getGenap(10);

// iterator menggunakan fitur generator pada PHP dgn kata kunci yield
foreach ($Genap as $value) {
    echo "Bilangan Genap $value" . PHP_EOL;
}

function getGanjil(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

echo "=====================" . PHP_EOL;
$ganjil = getGanjil(10);
foreach ($ganjil as $value) {
    echo "Bilangan Ganjil $value" . PHP_EOL;
}
