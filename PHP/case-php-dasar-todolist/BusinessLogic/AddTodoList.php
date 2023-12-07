<?php

/**
 * tambah todo list
 * 
 */

 function addTodoList(string $todo)
 {
    global $todoList;

    // cari tau ada berapa todo list nya dulu
    // jika todolistnya ada 1 maka ditambahkan barunya ke todolist 2, dst.
    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
 }