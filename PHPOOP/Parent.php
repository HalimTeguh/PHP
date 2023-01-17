<?php

require_once "Data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
$kotak = new Rectangle();

echo $shape->getCorner() . PHP_EOL;

echo $kotak->getCorner() . PHP_EOL;
echo $kotak->parentGetCorner() . PHP_EOL;