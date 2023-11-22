<?php 

require_once 'data/Manager.php';

$manager = new Manager();
$manager->nama = "Irwan";
$manager->sayHello("Yjandra");

$vp = new VicePresident();
$vp->nama = "Vladimir Joko";
$vp->sayHello("Zalenskhi Udin");