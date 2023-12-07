<?php

function input(string $info): string
{
    echo "$info: ";
    // fungsi untuk input diphp
    // resource stdin merupakan standart input
    // STDIN global variabel
    $result = fgets(STDIN);
    return trim($result);
}
