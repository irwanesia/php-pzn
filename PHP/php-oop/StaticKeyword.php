<?php

// kata kunci static adalah keyword yg bisa digunakan untuk membuat properties atau function diclassnya 
// tanpa menginstansiasi class terlebih didahulu
// namun saat membuat tatic properties atau function , secara otomatis hal tersebut
// tidak akan lagi berhubungan dengan class instance yg dibuat
// untuk akese static properties dan function gunakan operator ::
// static function tidak bisa mengakses function biasa, karena function biasa menempel pada class instance sedangkan static function tidak

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Irwan";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 23, 8, 12);
echo "Result $result" . PHP_EOL;
