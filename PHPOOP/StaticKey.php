<?php

require_once "Helper/MathHelper.php";

use Helper\MathHelper;

$math = new MathHelper();
echo $math->name;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Halim";

echo MathHelper::$name . PHP_EOL;

echo MathHelper::sum(10, 10, 10);