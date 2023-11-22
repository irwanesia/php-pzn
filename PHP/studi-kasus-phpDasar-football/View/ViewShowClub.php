<?php

require_once __DIR__ . "/../Model/Club.php";
require_once __DIR__ . "/../BusinessLogic/ShowClub.php";
require_once __DIR__ . "/../View/ViewAddClub.php";
require_once __DIR__ . "/../View/ViewRemoveClub.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowClub()
{
    // while true untuk melakukan perulangan
    while (true) {
        showClub();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddClub();
        } else if ($pilihan == "2") {
            viewRemoveClub();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
