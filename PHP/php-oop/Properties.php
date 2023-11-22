<?php

require_once 'data/Person.php';

$person = new Person("Udin", "Losari");
// $person->name = "Irwan";
// $person->address = "Cirebon Timur";
$person->country = "Indonesia";

// var_dump($person);

echo "Nama : $person->nama" . PHP_EOL;
echo "Alamat : $person->address" . PHP_EOL;
echo "Negara : $person->country" . PHP_EOL;

$person2 = new Person("Kampret", "Goa");
$person2->nama = "Irwanesia";
$person2->address = null;
$person2->country = "Inggris";


echo "Nama : $person2->nama" . PHP_EOL;
echo "Alamat : $person2->address" . PHP_EOL;
echo "Negara : $person2->country" . PHP_EOL;
