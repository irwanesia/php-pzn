<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

// misal isi nilai kosong, maka dgn validasi yg akan terbaca tetap yg string ada isinya.
$category->setName("  ");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
