<?php 

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

// penggunaan group use
use data\One\{Conflict as cf1, Dummy, Sample};
use function Helper\{helpme};
use const Helper\APP as ap;

// cara akses ketika menggunakan import atau use, beda dengan menggunakan namespace
// dan cara mengakses menggunakan alias
$conflict1 = new cf1();
$conflict2 = new Dummy();
$conflict2 = new Sample();

// cara mengakses alias
helpme();
echo ap . "</br>";
