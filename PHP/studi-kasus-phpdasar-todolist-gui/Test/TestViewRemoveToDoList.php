<?php

require_once "../Model/ToDoList.php";
require_once "../View/ViewRemoveToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";
require_once "../BusinessLogic/RemoveToDoList.php";
require_once "../BusinessLogic/ShowToDoList.php";

addToDoList("Irwan");
addToDoList("Irwan 1");
addToDoList("Irwan 2");
addToDoList("Irwan 3");
addToDoList("Irwan 4");
addToDoList("Irwan 6");

showToDoList();

viewRemoveToDoList();

showToDoList();
