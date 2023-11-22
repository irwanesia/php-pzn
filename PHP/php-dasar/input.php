<?php

function input(string $info): string
{
    echo "$info: ";
    // fungsi untuk input diphp
    // resource stdin merupakan standart input
    // STDIN global variabel
    $result = fgets(STDIN);
    return trim($result);
}

echo "Masukan Angka Pertama" . PHP_EOL;
$bil1 = input("Tambah (x untuk batal) ");
echo "Masukan Angka Kedua" . PHP_EOL;
$bil2 = input("Tambah (x untuk batal) ");
$todo = $bil1 + $bil2;
// addCalc($todo);
echo $todo . PHP_EOL;
