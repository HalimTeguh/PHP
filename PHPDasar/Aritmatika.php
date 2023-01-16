<?php
$a = 10;
$b = 2;

//Penjumlahan
$result = $a + $b;
var_dump($result);

//Pengurangan
$result = $a - $b;
var_dump($result);

//Perkalian
$result = $a * $b;
var_dump($result);

//Pembagian
$result = $a / $b;
var_dump($result);

//Modulus
$result = $a % $b;
var_dump($result);

//Perpangkatan
$result = $a ** $b;
var_dump($result);

//Operator Penugasan
$buku = 3000;
$pensil = 2000;
$penghapus = 1000;
$diskon = 0.5;
$total = 0;

$totalBiasa = $buku + $pensil + $penghapus;
$total += $buku;
$total += $pensil;
$total += $penghapus;
$total *= $diskon;
var_dump($total);

?>