<?php

// menampilkan todolist

function showClub()
{
    global $clubList;

    echo "Data Klub" . PHP_EOL;

    foreach ($clubList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
