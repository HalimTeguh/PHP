<?php

require_once "Data/Product.php";

$product = new Product("Apple", 5000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$product2 = new ProductHalim("Halim", 3000);

echo $product2->info();