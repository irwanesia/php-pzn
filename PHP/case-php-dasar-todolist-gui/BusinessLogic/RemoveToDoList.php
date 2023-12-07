<?php

// menghapus todolist

function removeToDoList(int $number): bool // return bool digunakan kalo memasukan data yg tidak ada
{
    global $todoList;


    // setelah melakukan unset geser data key/angkanya
    //  1. irwan
    //  2. irsadasdwan
    //  3. wwasd irsadasdwan

    //  1. irwan
    //  2. $todolist[2+1]
    //  2. $todolist[3+1]

    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}
