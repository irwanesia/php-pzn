<?php 
require_once 'data/Person.php';

$person = new Person("Rendi","Jaksel");
$person->name = "Andi";
$person->sayHello("Irwan");

$person1 = new Person("Joko","Valencia");
$person1->name = "Andi";
$person1->sayHello(null);
$person1->info();