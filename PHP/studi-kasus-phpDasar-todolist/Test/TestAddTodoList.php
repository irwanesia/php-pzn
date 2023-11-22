<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/addTodoList.php";


addTodoList("Andi");
addTodoList("Soekamti");
addTodoList("Bang Kevin");

var_dump($todoList);