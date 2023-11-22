<?php

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";

function viewAddToDoList()
{
    echo "Menambah TODO" . PHP_EOL;
    $todo = input("Todo (x untuk batal) ");

    if ($todo == "x") {
        // batal
        echo "Batal Menambahkan ToDo";
    } else {
        addToDoList($todo);
    }
}
