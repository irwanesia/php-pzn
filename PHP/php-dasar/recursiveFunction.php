<?php
// recursive function adalah kemampuan function memanggil function dirinya sendiri

// contoh function bukan recursive
function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        // $total = $total * $i;
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(5)); // 120
// cara manual
var_dump(1 * 2 * 3 * 4 * 5); // 120

// contoh PENGGUNAA function recursive
function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return $value;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));
