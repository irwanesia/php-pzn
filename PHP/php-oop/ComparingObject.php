<?php

// sama seperti tipe data yg lain, untuk membandingkan dua buah object, kita bisa menggunakan operator == (equals) dan === (identity)
// operator == (equals) membandingkan semua properties yg terdapat diobject tersebut, dan tiap properties juga akan dibandingkan menggunakan operator == (equals)
// sedangkan operator === (identity), maka akan membandingkan apakah object identik, artinya mengacu ke object yang sama


require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Irwan";
$student1->value = 80;

// cara manual clone atau memperbanyak object
$student2 = new Student();
$student2->id = "2";
$student2->name = "Aira";
$student2->value = 70;

$student3 = new Student();
$student3->id = "1";
$student3->name = "Irwan";
$student3->value = 80;

// contoh comparing pbject
var_dump($student1 == $student3);
var_dump($student1 === $student2);
