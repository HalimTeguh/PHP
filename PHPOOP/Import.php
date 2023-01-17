<?php

require_once "Conflict.php";
require_once "Helper.php";

use Person\Satu\{Conflict as Conflict1, Data as Data, jalan as Walk}; //Group Use Keyword 
use Person\Dua\COnflict as Conflict2;
use function Helper\helpMe; //use keyword for namespace
use const Helper\APPLICATION as APP; //menggunakan Alias (as) pada use Keyword

$conflict = new Conflict1();

helpMe();

echo APP . PHP_EOL;