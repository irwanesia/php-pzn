<?php

require_once __DIR__ . "/Model/ClubList.php";
require_once __DIR__ . "/Model/SkorList.php";
require_once __DIR__ . "/BusinessLogic/ShowClub.php";
require_once __DIR__ . "/BusinessLogic/AddClub.php";
require_once __DIR__ . "/BusinessLogic/RemoveClub.php";
require_once __DIR__ . "/View/ViewShowClub.php";
require_once __DIR__ . "/View/ViewAddClub.php";
require_once __DIR__ . "/View/ViewRemoveClub.php";
require_once __DIR__ . "/Helper/Input.php";

// dir digunakan untuk mengakses folder/diirektori saat ini
// jika tidak menggunkan __DIR__ akan error
// echo __DIR__ . PHP_EOL;

echo "Klasemen Sepak Bola" . PHP_EOL;


viewShowClub();
