<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

$statement = $connection->query($sql);
$name = null;
$success = false;
foreach ($statement as $row) {
    $name = $row["username"];
    $success = true;
}

if ($success) {
    echo "Login berhasil : $name" . PHP_EOL;
} else {
    echo "Login Gagal." . PHP_EOL;
}

$connection = null;