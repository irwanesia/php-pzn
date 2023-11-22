<?php

/**
 * hapus todo list
 * 
 */

 function removeTodoList(int $number) : bool
 {
    global $todoList;
    
    // jika user input diluar nomor todolist yang ada
    // buat return functionnya jadi bool
    if($number > sizeof($todoList)){
        return false;
    }

    // geser todolist ke nomor diatasnya dibawah ini logic nya dengan for
    // 1. andi
    // 2. akbar
    // 3. ade (hapus data ade no. 3)
    // 4. adel
    // 5. amin

    // 1. andi
    // 2. akbar
    // 3. $todolist[3+1]
    // 4. $todolist[4+1]
    // 5. => yg number terakhir diunset

    for($i = $number; $i < sizeof($todoList); $i++){
        $todoList[$i] = $todoList[$i+1];
    }
    
    // kemudian unset data todolist yg terakhir
    unset($todoList[sizeof($todoList)]);

    return true;
 }
