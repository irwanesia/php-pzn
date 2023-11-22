<?php

// trait conflict
// jika ada dua trait atau lebih lalu terdapat function yang dimasing2 trait nya
// maka akan terjadi error, atau conflict

trait A
{

    function doA(): void
    {
        echo "a" . PHP_EOL;
    }

    function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}

trait B
{

    function doA(): void
    {
        echo "A" . PHP_EOL;
    }

    function doB(): void
    {
        echo "B" . PHP_EOL;
    }
}

class Sample
{
    use A, B {
        // cara agar tidak terjadi conflict pada trait yg memiliki nama function sama
        A::doA insteadof B;
        A::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();
