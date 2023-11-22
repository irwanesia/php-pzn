<?php

// DateTIme
// dalam pemrograman biasa dikenal manipulasi data waktu termasuk PHP
// di PHP bisa  menggunakan clas DateTime untuk memanipulasi data waktu
// ada banayak sekali funct pada class DateTime yg bisa digunakan untuk memanipulasi data waktu

// contoh beberapa funct DateTime
// setTime($hour, $minute, $second) => ubah waktu dateTime
// setDate($year, $month, $day)  => ubah tanggal dateTime
// setTimeStamp($unixTimeStamp)  => ubah unix timeStamp dateTime

$date = new DateTime(); // class nya sudah disediakan oleh PHP
// waktu sekarang, tp zona europe/berlin
var_dump($date);

// untuk merubah waktu asia/jakarta
// difolder lampp cari php.ini, lalu ganti timezone nya
// ; http://php.net/date.timezone
// date.timezone=Asia/Jakarta

$date->setDate(1990, 2, 22);
$date->setTime(10, 10, 10, 10);
var_dump($date);


// DateInterval
//  kadang kita hanya ingin memanipulasi waktu sebagian saja, misal hanya menambah 1 tahun atau mengurai beberapa hari
// ini bisa menggunakan function add punya DateTime
// namun function add tersebut menerima parameter berurpa DateInterval
// saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah interval
// kita bisa lihat detail nya di https://www.php.net/manual/en/dateinterval.construct.php
// untuk pembuatan duration, harus diawali dengan karakter P yg artinya period
// cara mengatur tgl nya saja, atau thnnya saja, atau bulannya saja.

// nambah satu tahun
$date->add(new DateInterval("P1Y"));
var_dump($date);

// mengurangi 1 bulan
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$date->add($minusOneMonth);
// $dateInterval = new DateInterval();

var_dump($date);


// merubah time zone
$timeZone = new DateTime();
// $timeZone->setTimezone(new DateTimeZone("Asia/Jakarta"));
$timeZone->setTimezone(new DateTimeZone("America/Toronto")); // time zone amerika/toronto

var_dump($timeZone);

// format dateTime
// funtion format() menerima argument berupa format string, ini bisa digunakan untuk memanipulasi cara kita menampilkan string format waktu
//  link detail ppengguanaan format DateTIme https://wwww.php.net/manual/en/datetime.format.php

$now = new DateTime();
$now->setTimezone(new DateTimeZone("America/Toronto"));

$formatDateTime = $now->format("Y-m-d H:i:s");
echo "waktu amerika di toronto saat ini adalah $formatDateTime" . PHP_EOL;


// parse dateTime
// selain format DateTime menjadi string, bis jg melakukan hal sebaliknya 
// yaitu memparsing dateTime sesuai dgn format yg kita mau
// dengan menggunakan static function createFormFormat() dari class DateTime
$parseDateTime = DateTime::createFromFormat("Y-m-d H:i:s", "2022-02-22 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($parseDateTime);
