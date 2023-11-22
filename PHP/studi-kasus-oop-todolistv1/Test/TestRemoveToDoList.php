<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";

addToDoList("Irwan");
addToDoList("Budi");
addToDoList("Joko");
addToDoList("Ani");
addToDoList("Irwanovic");

showToDoList();
$success = removeToDoList(2);
var_dump($success);
showToDoList();
