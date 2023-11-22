<?php

//  trait mirip dengan abstract juga
// bisa ditambahkan lebih dari 1 trait
// lebih mirip ke extension daripada pewarisan
// kata kunci nya menggunakan use

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Irwan");
$person->hello("Andi");
$person->name = "Irwanesia";

var_dump($person);
$person->run();
