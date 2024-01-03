<?php

namespace Codeir\Test;

class Person
{
    public function __construct(private string $nama)
    {

    }

    // 09. penggunaan test exception
    public function sayHello(?string $name)
    {
        if($name == null ) throw new \Exception("Name is null");

        return "Hello $name, my name is $this->nama";
    }

    // 10. Test-Output
    // jika sebuah method outputnya tidak mengembalikan nilai
    public function sayGoodBye(?string $name): void
    {
        echo "Good bye $name" . PHP_EOL;
    }

}