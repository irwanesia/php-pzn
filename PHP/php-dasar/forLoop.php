<?php

// for ($i = 0; $i <= 5; $i++) {
//     echo "perulangan " . $i . PHP_EOL;
// }
// perulangan dengan kondisi
$counter = 1;
for (; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

// perulangan dengan Init statement
for ($counter = 1; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

// perulangan dengan Post statement
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

// syntax alternatif
$counter = 1;
for ($counter = 10; $counter >= 1; $counter--) :
    echo "Ini adalah for loop terbalik ke-$counter" . PHP_EOL;
endfor;
