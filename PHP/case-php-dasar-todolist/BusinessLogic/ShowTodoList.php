<?php

/**
 * menampilkan todo list
 * 
 */

 function showTodoList()
 {
    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    foreach($todoList as $number => $val) {
        echo "$number. $val" . PHP_EOL;
    }
 }