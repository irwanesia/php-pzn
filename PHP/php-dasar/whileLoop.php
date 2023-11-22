<?php
$i = 1;
while ($i <= 10) {
    echo "Hello while loop" . $i . PHP_EOL;
    $i++;
}

$j = 2;
while ($j <= 10) :
    echo "Hello while loop" . $j . PHP_EOL;
    $j++;
endwhile;
