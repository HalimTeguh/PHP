<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//Mengambil semua keys milik array(array_keys())
var_dump(array_keys($data));

//Mengambil semua values milik array(array_values())
var_dump(array_values($data));

//Mengubah semua data array dengan callback(array_map())
var_dump(array_map($mapFunction, $data));

$mapFunction = fn(int $value) => $value * 10;

//mengurutkan array descending(rsort())
rsort($data);
var_dump($data);

//mengurutkan array ascending(sort())
sort($data);
var_dump($data);

//mengubah posisi data array secara random(shuffle())
shuffle($data);
var_dump($data);

?>