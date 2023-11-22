<?php 

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

// penggunaan import alias
use data\One\Conflict as Conflict1;
use data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APP as ap;

// cara akses ketika menggunakan import atau use, beda dengan menggunakan namespace
// dan cara mengakses menggunakan alias
$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

// cara mengakses alias
help();
echo ap . "</br>";
