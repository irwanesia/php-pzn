<?php

require_once "../Model/ClubList.php";
require_once "../BusinessLogic/AddClub.php";

addClub("M. City");
addClub("M. United");
addClub("Newcastle United");
addClub("Arsenal");
addClub("Brigthon Albion");

var_dump($clubList);
