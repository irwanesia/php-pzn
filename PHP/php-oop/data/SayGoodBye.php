<?php

namespace Data\Traits;

//  trait mirip dengan abstract juga
// bisa ditambahkan lebih dari 1 trait
// lebih mirip ke extension daripada pewarisan
// kata kunci nya menggunakan use
// bisa menambhakan properties juga

trait SayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    // ketika membuat abstract wajib mengoveride ke class personnya
    public abstract function run(): void;
}

class ParentPerson
{
    // namun jika function yg sama terdapat diclass parentnya, 
    // maka akan dioveride oleh Traitnya
    // public function GoodBye(?string $name): void
    // {
    //     echo "Good bye in Person" . PHP_EOL;
    // }

    // public function hello(?string $name): void
    // {
    //     echo "Hello in Person" . PHP_EOL;
    // }
}


class Person extends ParentPerson
{
    // kata kunci nya menggunakan use
    use SayHello, SayGoodBye, HasName, CanRUn {
        // visibility pada trait

        // hello as private; 
        // goodBye as private;
    }

    public function run(): void
    {
        echo "Person {$this->name} is running" . PHP_EOL;
    }

    // trait overriding
    // jika sebuah class mempliki parent class yg memiliki function yg sama dgn funtion ditrait
    // maka secara otomatis trait akan mengoveride function tersebut
    // namun jika membuat funtion yg sama diclassnya, maka secara otomatis akan meng-overidekan function ditrait
    // sehingga posisiny akan seperti ini
    // ParentClass = override by => Trait, dan Trait => overide by => ChildClas

    // jika terdapat fungsi yang sama diclass person dan traitnya 
    // maka yg within class person will be didahulukan
    public function GoodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}
