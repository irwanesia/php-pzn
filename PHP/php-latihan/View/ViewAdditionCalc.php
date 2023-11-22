<?php

require_once __DIR__ . "/../Model/Calc.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddCalc.php";

function viewAdditionCalc()
{
    echo "Penjumlahan" . PHP_EOL;
    $bil1 = input("Masukan Angka Pertama (x untuk batal) ");
    $bil2 = input("Masukan Angka Kedua (x untuk batal) ");

    if ($bil1 == "x" || $bil2 == "x") {
        // batal
        echo "Batalkan!" . PHP_EOL;
    } else {
        addCalc($bil1, $bil2) . PHP_EOL;
    }
}
