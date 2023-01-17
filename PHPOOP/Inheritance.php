<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Halim";

$manager->sayHello("Budi");

$viceManager = new VicePresident();
$viceManager->name = "Halim";

$viceManager->sayHello("Teguh");