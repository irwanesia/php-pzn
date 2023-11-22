<?php

require_once __DIR__ . "/../Model/Calc.php";
require_once __DIR__ . "/../BusinessLogic/ShowCalc.php";
require_once __DIR__ . "/../View/ViewAdditionCalc.php";
require_once __DIR__ . "/../View/ViewSubstractionCalc.php";
require_once __DIR__ . "/../View/ViewMultiplicationCalc.php";
require_once __DIR__ . "/../View/ViewDivisionCalc.php";
require_once __DIR__ . "/../Helper/Input.php";


function ViewShowCalc()
{
    // while true untuk melakukan perulangan
    while (true) {
        showCalc();

        echo "Menu" . PHP_EOL;
        echo "1. Penjumlahan" . PHP_EOL;
        echo "2. Pengurangan" . PHP_EOL;
        echo "3. Perkalian" . PHP_EOL;
        echo "4. Pembagian" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAdditionCalc();
        } else if ($pilihan == "2") {
            viewSubstractionCalc();
        } else if ($pilihan == "3") {
            viewMultiplicationCalc();
        } else if ($pilihan == "4") {
            viewDivisionCalc();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
