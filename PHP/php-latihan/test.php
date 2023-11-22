<?php

require_once __DIR__ . "/Model/Calc.php";
require_once __DIR__ . "/BusinessLogic/ShowCalc.php";
require_once __DIR__ . "/BusinessLogic/AddCalc.php";
require_once __DIR__ . "/BusinessLogic/SubsCalc.php";
require_once __DIR__ . "/View/ViewShowCalc.php";
require_once __DIR__ . "/View/ViewAdditionCalc.php";
require_once __DIR__ . "/View/ViewSubstractionCalc.php";
require_once __DIR__ . "/Helper/Input.php";

// dir digunakan untuk mengakses folder/diirektori saat ini
// jika tidak menggunkan __DIR__ akan error
// echo __DIR__ . PHP_EOL;

echo "Aplikasi ToDoList" . PHP_EOL;


ViewShowCalc();
