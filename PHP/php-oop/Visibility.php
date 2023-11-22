<?php

require_once 'data/Product.php';
// use data\Product\getNam

$product = new Product("Apple", 2000);


// mengakses properties dengan visibility private,
// dengan memanggil function getName dan getPrice dengan function public
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Semangka", 1200);
$dummy->info();
