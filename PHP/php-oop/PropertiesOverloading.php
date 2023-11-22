<?php

// dinamic properties menggunakn 4 meagic funct ini
// 4 magic funct untuk prooerites overloading
//  __set() => dieksekusi ketika mengubah properties yang tidak tersedia
//  __get() => dieksekusi ketika mengakses properties yg tidak tersida 
//  __isset() => dieksekusi ketika mengecek isset() atau empty() properties yg tidak tersedia
//  __unset() => dieksekusi ketika menggunakan unset() properties yg tidak tersedia

class Zero
{
    private array $properties = [];

    // ketika tidak ada properties maka get funct ini yg akan dipanggil
    public function __get($name)
    {
        // echo "Access property $name" . PHP_EOL;
        // return "Contoh";
        return $this->properties[$name];
    }

    // untuk memberi nilai pada properties
    public function __set($name, $value)
    {
        // echo "Set properties $name dengan isi $value" . PHP_EOL;
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        // echo "Isset $name" . PHP_EOL;
        // return false;

        return isset($this->properties[$name]);
    }

    function __unset($name)
    {
        // echo "Unset $name" . PHP_EOL;
        unset($this->properties[$name]);
    }
}

$zero = new Zero();
$zero->firstname = "andi";
$zero->firstname . PHP_EOL;
isset($zero->firstname);
unset($zero->firstname);

$zero->firstname = "irwan";
$zero->midlename = "irwn";
$zero->lastname = "irwanovic";

echo "Fisrt Name : $zero->firstname" . PHP_EOL;
echo "Midle Name : $zero->midlename" . PHP_EOL;
echo "Last Name : $zero->lastname" . PHP_EOL;
