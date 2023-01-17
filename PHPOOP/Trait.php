<?php

require_once "Data/SayGoodBye.php";

use Data\traits\{Person, SayGoodBye, SayHello, HasName};

$person = new Person();
$person->goodBye("Halim");
$person->sayHello("Teguh");
$person->name = "Halim";

$person->goodBye("$person->name");

$person->run();