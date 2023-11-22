<?php

class Person
{
    const AUTHOR = "Code IR Programmer"; // contoh penggunaan constant

    var string $nama;
    var ?string $address = null; // kode nullable properties
    var string $country = "Indonesia"; // default value

    // construct adalah function yang ketika dipanggil ketika object dibuat
    function __construct(string $nama, ?string $address)
    {
        $this->nama = $nama;
        $this->address = $address;
    }

    // destruct adalah function yang ketika dipanggil ketika object akan dihapus dari memory
    // tidak perlu/tidak memasukan parameter/argument

    function __destruct()
    {
        echo "Object Person $this->nama is destroyed" . PHP_EOL;
    }

    function sayHello(?string $nama) // function dalam class dengan parameter nullable properties
    {
        if (is_null($nama)) {
            echo "Hi, my nama is $this->nama" . PHP_EOL; // $this->nama artinya ambil data nama dari object class
        } else {
            echo "Hi $nama, my nama is $this->nama" . PHP_EOL; // $nama artinya ambil data nama dari parameter/argumen function
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL; // mengakses constant didalam class nya itu sendiri dengan self keyword
    }
}
