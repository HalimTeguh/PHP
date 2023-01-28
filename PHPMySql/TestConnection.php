<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";


//Dalam membuat koneksi dengan database lebih baik menggunakan try catch untuk menangkap kesalahannya.
try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "SUCCESS terkoneksi ke database MySql" . PHP_EOL;

    //menutup connection
    $connection = null;

} catch (PDOException $exception) {
    echo "FAILED terkoneksi ke database MySql : " . $exception->getMessage() . PHP_EOL;
}