<?php 

require_once 'data/Person.php';

define("APP", "Belajar PHP OOP");
const APP_VERSION = "1.0.0";

echo APP . "</br>";
echo APP_VERSION . "</br>";


// mengakses constant dari class person
echo Person::AUTHOR . "</br>";