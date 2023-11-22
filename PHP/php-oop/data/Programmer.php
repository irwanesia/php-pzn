<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
}

class FrontendProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

// function argument polymorphism
function sayHelloProg(Programmer $programmer)
{
    echo "Hello Programmer $programmer->name" . PHP_EOL;
}

// type check & cast
function sayHelloProgrammer(Programmer $Programmer)
{
    // echo "Hello Programmer $Programmer->name" . PHP_EOL;
    if ($Programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $Programmer->name" . PHP_EOL;
    } else if ($Programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $Programmer->name" . PHP_EOL;
    } else if ($Programmer instanceof Programmer) {
        echo "Hello Programmer $Programmer->name" . PHP_EOL;
    }
}
