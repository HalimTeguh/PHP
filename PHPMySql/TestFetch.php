<?php

require_once __DIR__ . "\GetConnection.php";

$connection = getConnection();

$username = "teguh";
$password = "saputro";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$Statement = $connection->prepare($sql);
$Statement->execute([$username, $password]);

if ($row = $Statement->fetch()) {
    echo "Login BERHASIL : " . $row["username"] . PHP_EOL;
    var_dump($row);
} else {
    echo "Login GAGAL" . PHP_EOL;
}

$connection = null;