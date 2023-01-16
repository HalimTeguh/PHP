<?php

$nilai = array(1, 2, 3, 4);
var_dump($nilai);

$nama = ["Halim", "Teguh", "Saputro", 2, 3.5];
var_dump($nama);

$kosong = [];
var_dump($kosong);

echo "\n";

//mengakses nilai pada sebuah array
echo "Nilai ke-3 adalah ";
echo $nilai[2];
echo "\n\n";

//mengubah data array
$nilai[3] = 6;
var_dump($nilai);
echo "\n\n";

//Menambah data di array dengan posisi paling belakang
$nilai[6] = 7;
var_dump($nilai);
echo "\n\n";

//Menghapus data di index.
unset($nilai[6]);
var_dump($nilai);
echo "\n\n";

//Menghitung jumlah data pada array
echo "Jumlah data nilai adalah ";
echo count($nilai);
echo "\n\n";


//array sebagai Map

$data = array(
    "id" => "Halim",
    "nama" => "Halim Teguh Saputro",
    "age" => 20
);

var_dump($data);
var_dump($data["age"]);
echo "\n\n";


//array dalam array (nested array)

$data = array(
    "id" => "Halim",
    "nama" => "Halim Teguh Saputro",
    "age" => 20,
    "address" => [
        "city" => "Malang",
        "country" => "Indonesia"
    ]
);

var_dump($data["address"]);
var_dump($data["address"]["city"]);


?>