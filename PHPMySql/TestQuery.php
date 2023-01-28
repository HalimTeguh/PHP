<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = "SELECT id, name, email FROM customers";

$statement = $connection->query($sql);

foreach ($statement as $row) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "ID\t: $id" . PHP_EOL;
    echo "Name\t: $name" . PHP_EOL;
    echo "Email\t: $email" . PHP_EOL;

    echo PHP_EOL;
}

$connection = null;