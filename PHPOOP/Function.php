<?php

require_once "data/Person.php";

$person = new Person("Halim", "Malang");
$person->name = "Halim";

$person->sayHello("Budi");

$teguh = new Person("Teguh", null);
$teguh->name = "Teguh";

$teguh->sayHello(null);

$teguh->info();
$person->info();