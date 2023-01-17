<?php

require_once "NameSpace.php";
require_once "Helper.php";

$conflict1 = new Person\Satu\Conflict();

$conflict2 = new Person\Dua\Conflict();

echo Helper\helpMe();
echo Helper\APPLICATION . PHP_EOL;