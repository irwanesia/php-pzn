<?php 

// inhiretance
class Manager
{
    var string $nama;
    var string $title;

    // constructor overiding
    public function __construct(string $nama = "", string $title = "" )
    {
        $this->nama = $nama;
        $this->title = $title;
    }

    function sayHello(string $nama): void // artinya tidak mengembalikan value, ngasih tau kalo function tersebut tidak mengembalikan value
    {
        echo "Hi $nama, my name is Manager $this->nama </br>";
    }
}

class VicePresident extends Manager
{
    // constructor overiding
    public function __construct(string $nama = "")
    {
        // tidak wajib tapi direkomendasikan
        parent::__construct($nama, "VP");
    }

    // function overiding , function menimpa ulang dari function class turunan class parent
    // mendeklarasikan function ulang dari parent class
    function sayHello(string $nama): void
    {
        echo "Hi $nama, my name is VP $this->nama </br>";
    }
}