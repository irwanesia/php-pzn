<?php
// <!-- object cloning
// - kebutuhan untuk menduplikasi sebuah oobjet
// - biasanya membuat object baru dghn menyalin semua properties diobject awal ke obnject baru
// - untungnya di PHP punya fitur object cloning
// - kita bisa mengguunakan printah clone untuk membuat dupliakasi object
// - dan secara otomatis semua properties diobject awal akan diduplikasi ke object baru
// -->


require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Irwan";
$student1->value = 80;
$student1->setSample("test sample propeties private");

// cara manual clone atau memperbanyak object
$student2 = new Student();
$student2->id = "2";
$student2->name = "Aira";
$student2->value = 70;

// cara otomatis cloning object
$student3 = clone $student1;
// semua properties akan diclone, baik yg private, protected, maupun public
var_dump($student1);
var_dump($student2);
var_dump($student3);
