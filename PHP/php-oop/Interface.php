<?php

// interface mirip dengan abstract class
// tidak boleh memiliki properties hanya memiliki constant
// kata kuncinya yaitu implements
// mendukung multiple inheritence
require_once "data/Car.php";

use Data\{Avanza};

$car = new Avanza();
$car->drive();
