<?php

require_once __DIR__ . "\GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('halim@gmail.com', 'Belajar PHP DATABASE')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('halim@gmail.com', 'Belajar PHP DATABASE')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('halim@gmail.com', 'Belajar PHP DATABASE')");

$connection->rollBack();

$connection = null;