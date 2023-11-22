<?php

// saat membuat class, class bisa dijadikan abstract
// absttract class artinya class tersebut tidak bisa dibuat object, hanya turunannya saja
// untuk membuat sebuaH CLASS abstract gunakan kata kunci abstrak
// abstract class bisa digunakan sebagai abstrac child

require_once "data/Location.php";

use Data\{Location, City, Provincy, Country};

$location = new Location(); // akan error, cannot instantiate

$city = new City();
$Prov = new Provincy();
$country = new Country();
