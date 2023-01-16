<?php

//Menggabungkan array menjadi String (join() / implode())
var_dump(join(", ", [1, 2, 3, 4, 5]));

//Memecah String menjadi array (explode())
var_dump(explode(" ", "Halim Teguh Saputro"));

//mengubah string menjadi lowecase (strtolower())
var_dump(strtolower("HALIM TEGUH SAPUTRO"));

//mengubah string menjadi uppercase (strtoupper())
var_dump(strtoupper("halim teguh saputro"));

//mengambil sebagian string (substr())
var_dump(substr("Halim Teguh Saputro", 0, 5));

//menghapus whitespace dri depan dan belakang string (trim())
var_dump(trim("      Halim      "));


?>