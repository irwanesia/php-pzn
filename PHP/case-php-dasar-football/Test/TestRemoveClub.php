<?php

require_once "../Model/ClubList.php";
require_once "../BusinessLogic/AddClub.php";
require_once "../BusinessLogic/ShowClub.php";
require_once "../BusinessLogic/RemoveClub.php";

addClub("Atletico Madrid");
addClub("Espanyol");
addClub("Barcelona");
addClub("Real Betis");
addClub("Real Madrid");

showClub();
$success = removeClub(2);
var_dump($success);
showClub();
