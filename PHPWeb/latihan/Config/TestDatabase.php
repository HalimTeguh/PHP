<?php
use Config\Database;

require_once "Database.php";

$connection = Database::getConnection();
echo "Success terhubung dengan database";