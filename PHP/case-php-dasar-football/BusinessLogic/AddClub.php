<?php

// menambah todo ke list

function addClub(string $club)
{
    global $clubList;

    $number = sizeof($clubList) + 1; // sizeof untuk mengetahui jumlah length

    $clubList[$number] = $club;
}
