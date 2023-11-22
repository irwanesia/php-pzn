<?php

// Fitur Contravariance merupkan kebalikan dari ovariance
// contravariance memperbolehkan sebuah child class untuk membuat function argument yg elbih spesifik dibandingkan parentnya

// note :
// kalo covariance parent ke child
// kalo contracovariance child ke parent dan

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Muza");
// contravariance
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Lurcil");
$dog->eat(new \Data\Food());
