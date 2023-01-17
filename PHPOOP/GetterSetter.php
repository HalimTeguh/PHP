<?php
use Data\Category;

require_once "Data/Category.php";

$categori = new Category("Samsung", true);

echo "Nama\t\t: {$categori->getName()}" . PHP_EOL;
echo "Expensive\t: {$categori->isExpensive()}" . PHP_EOL;

$categori->setName("");

echo "Nama\t\t: {$categori->getName()}" . PHP_EOL;
echo "Expensive\t: {$categori->isExpensive()}" . PHP_EOL;