<?php

require_once "Data/Animal.php";

use Data\{Cat};

$cat = new Cat();
$cat->name = "Coco";

$cat->run();