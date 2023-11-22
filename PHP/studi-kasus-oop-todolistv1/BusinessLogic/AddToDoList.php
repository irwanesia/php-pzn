<?php

// menambah todo ke list

function addToDoList(string $todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1; // sizeof untuk mengetahui jumlah length

    $todoList[$number] = $todo;
}
