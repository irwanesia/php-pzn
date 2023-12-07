<?php

require_once "../View/ViewAddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("Eko");
addToDoList("Irwan");
addToDoList("Andi");


viewAddToDoList();

showToDoList();
