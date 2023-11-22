<?php 

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

// penggunaan import
use data\One\Conflict;
// use data\Two\Conflict; ini tidak bisa ketika digunkan di dalam use
use function Helper\helpMe;
use const Helper\APP;

// cara akses ketika menggunakan import atau use, beda dengan menggunakan namespace
$conflict1 = new Conflict();
$conflict2 = new \Data\Two\Conflict();

helpMe();
echo APP . "</br>";
