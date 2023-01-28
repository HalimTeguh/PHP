<?php

require_once __DIR__ . "\GetConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$prepareStatement = $connection->prepare($sql);
$prepareStatement->execute([$username, $password]);

$success = false;
$user = null;
foreach ($prepareStatement as $row) {
    $success = true;
    $user = $row["username"];
}

if ($success) {
    echo "Login BERHASIL : $user" . PHP_EOL;
} else {
    echo "Login GAGAL" . PHP_EOL;
}

$connection = null;