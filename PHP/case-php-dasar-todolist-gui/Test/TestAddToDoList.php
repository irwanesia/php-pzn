<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddToDoList.php";

addToDoList("Irwan");
addToDoList("Irwanesia");
addToDoList("Irwanovic");

var_dump($todoList);
