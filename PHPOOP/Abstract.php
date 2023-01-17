<?php

require_once "Data/Location.php";

use Data\{City, Provincce, Country};

$Location = new Location(); //Error karena abstract tidak dapat dibuatkan object

$city = new City();
$province = new Province();