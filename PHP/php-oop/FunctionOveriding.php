<?php 

require_once 'data/Manager.php';

$manager = new Manager();
$manager->nama = "Irwan";
$manager->sayHello("Dina");

$vp = new VicePresident();
$vp->nama = "Budi";
$vp->sayHello("Ani");