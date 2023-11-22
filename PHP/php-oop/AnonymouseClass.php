<?php

// anonymous class atau class tanpa nama
// kemampuan mendeklarasikan class, sekaligus meng instansiasi objectnya secara langsung
// sangat cocok untuk implementasi interface atau abstract class sederhana, 
// tanpa harus membuat implementasi class nya

interface HelloWorld
{
    function  sayHello(): void;
}

// anonymous class a
$helloWorld = new class("irwan") implements HelloWorld
{
    public string $name;

    // // anonymous constructor
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello(): void
    {
        echo "hello World $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
