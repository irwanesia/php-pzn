<?php

// Fitur Covariance
// saat mengoverride function dari parent class, biasanya dichild class akan membuat funct yg sama dengan func yg diparent
// covariance memngkinkan meng overide return funct yg diparent dgn return value yg lebih spesifik
// ini melibatkan inhiretance jg

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Muza");

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Lurcil");
