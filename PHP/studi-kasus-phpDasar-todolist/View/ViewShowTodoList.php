<?php

/**
 * view show todo list
 * 
 */

 require_once __DIR__ . "/../Model/TodoList.php";
 require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
 require_once __DIR__ . "/../View/ViewAddTodoList.php";
 require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
 require_once __DIR__ . "/../Helper/Input.php";

 function viewShowTodoList()
 {
    // agar ketika selesai memilih menu balik ke tampilan awal maka gunakan perulangan while dengan kondisi "TRUE"
    while(true){
        showToDoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah TODO" . PHP_EOL;
        echo "2. Hapus TODO" . PHP_EOL;
        echo "3. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if($pilihan == "1"){
            viewAddToDoList();
        }else if($pilihan == "2"){
            viewRemoveToDoList();
        }else if($pilihan == "x"){
            // keluar
            break;
        }else{
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi". PHP_EOL;
 }