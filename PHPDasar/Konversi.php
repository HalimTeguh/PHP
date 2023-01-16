<?php

$toString = (string) 100;
var_dump($toString);

$toInt = (int) "100";
var_dump($toInt);

$toFloat = (float) "20.1";
var_dump($toFloat);

//mengakses karakteri pada String
$name = "Halim";
echo $name[1] . "\n";

//Variable Parsing
echo "Halo $name, Selamat Belajar PHP\n";

//penggunaan Curly Brace pada variable Parsing
echo "Halo Mr.{$name}, Selamat Belajar PHP\n";



?>