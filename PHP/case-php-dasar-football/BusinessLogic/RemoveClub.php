<?php

// menghapus todolist

function removeClub(int $number): bool // return bool digunakan kalo memasukan data yg tidak ada
{
    global $clubList;


    // setelah melakukan unset geser data key/angkanya
    //  1. Juventus
    //  2. Lazio
    //  3. Inter Milan

    //  1. Juventus
    //  2. $todolist[2+1]
    //  2. $todolist[3+1]

    if ($number > sizeof($clubList)) {
        return false;
    }

    for ($i = $number; $i < sizeof($clubList); $i++) {
        $clubList[$i] = $clubList[$i + 1];
    }

    unset($clubList[sizeof($clubList)]);

    return true;
}
