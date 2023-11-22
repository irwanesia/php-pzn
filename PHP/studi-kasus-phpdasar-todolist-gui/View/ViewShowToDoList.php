<?php

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowToDoList.php";
require_once __DIR__ . "/../View/ViewAddToDoList.php";
require_once __DIR__ . "/../View/ViewRemoveToDoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowToDoList()
{
    // while true untuk melakukan perulangan
    while (true) {
        showToDoList();

        echo "Daftar Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddToDoList();
        } else if ($pilihan == "2") {
            viewRemoveToDoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
