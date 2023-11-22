<?php

// menampilkan todolist

function showToDoList()
{
    global $todoList;

    echo "Aplikasi TODOLIST" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
