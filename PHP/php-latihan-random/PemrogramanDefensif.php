<?php

use Sekuensial\{pemrogDefensif, Resistor, Euclidean};

require_once "Class/Sekuensial.php";

$result = new Sekuensial\PemrogDefensif(244, 35);
$result1 = new Sekuensial\PemrogDefensif(244, 0);
$result2 = new Sekuensial\Resistor();
$result3 = new Sekuensial\Euclidean(4, 0, 0, 3);

$result->bagi();
$result1->pembagianDefensif();
$result2->perhitunganResistorParalel(100, 100, 100);
$result3->jarakEuclidean();
// $result->bagi(4, 4);
// $result->bagi(4, 0); // akan error
// $result->pembagianDefensif(4, 0);

// // perhitungan resistor paralel
// $result->perhitunganResistorParalel(100, 100, 100);
// $result->jarakEuclidean(4, 0, 0, 3);
// $result->jarakEuclidean(4, 7, 8, 3);
