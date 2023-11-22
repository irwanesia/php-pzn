<?php

// __clone() Function
// kadang ga semua properties harus disalin
// misal kita hanya ingin menyalin beberapa propertiess saja
// jika ingin memodifikasi cara PHP melakukan clone maka bisa menggunakan atau membuat function didalam classnya menggunana function __clone()
// function __clone() akan dipanggil diobject hasil duplikasi setelah proses dulpikasi selesai


require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Irwan";
$student1->value = 80;
$student1->setSample("test sample propeties private"); // tidak akan tampil karena di unset

// rule function __clone
// $student1 => clone $tudent2 => $student2-> __clone()