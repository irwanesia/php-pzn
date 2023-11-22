<?php

function sum(int $first, int $second) 
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

function getFinalValue(int $value)
{
    if($value >= 80){
        return "A";
    }else if ($value >= 70){
        return "B";
    }else if ($value >= 60){
        return "C";
    }else if ($value >= 50){
        return "D";
    }else{
        return "E";
    }

    echo "Ups" . PHP_EOL;
}

$nilai = getFinalValue(85);
var_dump($nilai);

// return type declaration
function getFinalValue2(int $bil1, int $bil2): int
{
    $total = $bil1 + $$bil2;
    return $total;
}

function getFinalString(string $value): string
{
    return "nama saya $value";
}