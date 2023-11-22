<?php

$test = "      aku mulai berjalan, lalu berhenti karna menyerah, kemudian berlanjut karna yakin bisa";
echo "tanpa trim() $test" . PHP_EOL;
echo "dengan trim() " . trim($test) . PHP_EOL;

// Hapus baris baru (\ n) dari kedua sisi string:
$str = "\n\n\nHello World!\n\n\n";
echo "Tanpa trim: $str" . PHP_EOL;
echo "Dengan trim: " . trim($str) . PHP_EOL;
