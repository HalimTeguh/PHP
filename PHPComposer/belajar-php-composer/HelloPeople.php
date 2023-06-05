<?php

require_once __DIR__ . "/vendor/autoload.php";

use Halim\Data\People;

$people = new People("ChatGPT");

$people->sayHello("Halim");