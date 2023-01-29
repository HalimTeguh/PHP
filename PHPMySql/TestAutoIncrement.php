<?php

require_once __DIR__ . "\GetConnection.php";

$connection = getConnection();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('Teguh@gmail.com', 'Belajar PHP Database')");
$id = $connection->lastInsertId();

echo "id : $id" . PHP_EOL;

$connection = null;