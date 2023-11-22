<?php

// saat akses function maka akan secara otomatis funct akan diakases
// naum jika ternyata funct tersebut tidak tersedia object, maka php tidak secara otomatis menjadikan itu error
// pjp akan melakukan fallback/callback ke magic functionnya
// dgn demikian kita bisa buat funct yg dinamis
// berikut 4 magic funct yg bisa digunakan untuk funtc overloading
// ___call():mixed
// static __cacllStatic()

class Zero
{
    private array $properties = [];

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call function $name with argument $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call static function $name with argument $join" . PHP_EOL;
    }
}

$zero = new Zero();
// $zero->firstname = "andi";
// $zero->firstname . PHP_EOL;
// isset($zero->firstname);
// unset($zero->firstname);

// $zero->firstname = "irwan";
// $zero->midlename = "irwn";
// $zero->lastname = "irwanovic";

// echo "Fisrt Name : $zero->firstname" . PHP_EOL;
// echo "Midle Name : $zero->midlename" . PHP_EOL;
// echo "Last Name : $zero->lastname" . PHP_EOL;

$zero->sayHello("Irwan", "andi");
$zero::sayHello("Meong", "Kusnadi");
$zero->sayHello("Irwan");
