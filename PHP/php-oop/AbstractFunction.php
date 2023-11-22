<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Muza";
$cat->run();

$dog = new Dog();
$dog->name = "Kelly";
$dog->run();
