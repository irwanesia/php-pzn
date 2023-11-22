<?php

require_once __DIR__ . "/Model/ToDoList.php";
require_once __DIR__ . "/BusinessLogic/ShowToDoList.php";
require_once __DIR__ . "/BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveToDoList.php";
require_once __DIR__ . "/View/ViewShowToDoList.php";
require_once __DIR__ . "/View/ViewAddToDoList.php";
require_once __DIR__ . "/View/ViewRemoveToDoList.php";
require_once __DIR__ . "/Helper/Input.php";

// dir digunakan untuk mengakses folder/diirektori saat ini
// jika tidak menggunkan __DIR__ akan error
// echo __DIR__ . PHP_EOL;

echo "Aplikasi ToDoList" . PHP_EOL;


viewShowToDoList();
