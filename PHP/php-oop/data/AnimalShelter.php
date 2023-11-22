<?php

// Fitur Covariance
// saat mengoverride function dari parent class, biasanya dichild class akan membuat funct yg sama dengan func yg diparent
// covariance memngkinkan meng overide return funct yg diparent dgn return value yg lebih spesifik
// ini melibatkan inhiretance jg

namespace Data;

require_once "Animal.php";


interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
