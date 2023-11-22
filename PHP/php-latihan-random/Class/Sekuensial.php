<?php

namespace Sekuensial;

class PemrogDefensif
{
    var int $a;
    var int $b;


    // construct adalah function yang ketika dipanggil ketika object dibuat
    function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    // contoh pemrograman tidak defensif
    function bagi()
    {
        $c = $this->a / $this->b;
        echo $c . PHP_EOL;
    }

    // contoh pemrograman defensif (dgn melakukan pencegahan pembagian nilai 0)
    // pembagian nilai 0 akan menghasilkan error
    function pembagianDefensif()
    {
        if ($this->b <> 0) {
            $c = $this->a / $this->b;
            echo $c . PHP_EOL;
        } else {
            echo "Pembagi tidak boleh angka 0" . PHP_EOL;
        }
    }
}

class Resistor
{

    function perhitunganResistorParalel(int $r1, int $r2, int $r3)
    {
        $r = $r1 / (1 / $r1 + 1 / $r2 + 1 / $r3);
        echo "R = $r" . PHP_EOL;
    }
}

class Euclidean
{
    var int $x1;
    var int $x2;
    var int $y1;
    var int $y2;

    // construct adalah function yang ketika dipanggil ketika object dibuat
    function __construct(int $x1, int $x2, int $y1, int $y2)
    {
        $this->x1 = $x1;
        $this->x2 = $x2;
        $this->y1 = $y1;
        $this->y2 = $y2;
    }

    function jarakEuclidean()
    {
        $jarak = sqrt(pow(($this->x2 - $this->x1), 2) + pow(($this->y2 - $this->y1), 2));
        echo "Jarak Euclidean = $jarak" . PHP_EOL;
    }
}
