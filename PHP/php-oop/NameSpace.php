<?php 

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

// cara mengakses namescpace
$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

// cara mengakses constant dan function()
echo Helper\APP . "</br>";
Helper\helpMe() . "</br>";


