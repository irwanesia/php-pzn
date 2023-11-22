<?php

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";

function viewRemoveToDoList()
{
    echo "Menghapus TODO" . PHP_EOL;
    $pilihan = input("Nomor");

    if ($pilihan == "x") {
        // batal
        echo "Batal Menghapus ToDo";
    } else {
        $success = removeToDoList($pilihan);

        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
