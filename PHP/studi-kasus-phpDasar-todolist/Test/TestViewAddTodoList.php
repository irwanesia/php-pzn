<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Andi");
addTodoList("Ucok");
addTodoList("Ragil");
addTodoList("Asep");

viewAddToDoList();

showToDoList();