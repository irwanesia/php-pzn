<?php

function looping($pencacah)
{
    for ($i = 1; $i <= $pencacah;) {
        echo "looping ke $i </br>";
        $i += 1;
    }
}

function base()
{
    for ($i = 1; $i <= 8; $i++) {
        echo '<td class="p-2">2</td>';
    }
}

function exponent()
{
    for ($i = 7; $i >= 0; $i--) {
        echo '<td class="p-2">' . $i . '</td>';
    }
}

function position()
{
    for ($i = 128; $i >= 1;) {

        echo '<td class="p-2">' . $i . '</td>';
        $i /= 2;
    }
}
