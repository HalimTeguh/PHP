<?php

require_once "Exeption/ValidationExeption.php";
require_once "Helper/Validation.php";
require_once "Data/LoginRequest.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "  ";
$loginRequest->password = "Halim";

try {
    validateLoginRequest($loginRequest);
    echo "Berhasil";
} catch (ValidationExeption $exception) {
    echo "Validation Exception Error : {$exception->getMessage()}" . PHP_EOL;
} catch (Exception $exception) {
    echo "Exception Error : {$exception->getMessage()}" . PHP_EOL;
}