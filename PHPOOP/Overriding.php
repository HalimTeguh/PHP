<?php

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Halim";

$vp = new VicePresident();
$vp->name = "Teguh";

$manager->sayHello("Joko");
$vp->sayHello("Joko");