<?php

require_once "Exeption/ValidationExeption.php";
require_once "Helper/Validation.php";
require_once "Data/LoginRequest.php";

$loginRequest = new LoginRequest();
$loginRequest->password = "Halim";

try {
    validateLoginRequest($loginRequest);
    echo "Berhasil" . PHP_EOL;
} catch (ValidationExeption $exception) {
    echo "Validation Exception Error : {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace()); //jika ingin mengecek letak errornya
    //atau
    echo $exception->getTraceAsString() . PHP_EOL;
} catch (Exception $exception) {
    echo "Exception Error : {$exception->getMessage()}" . PHP_EOL;
} finally {
    echo "Error atau tidak block code ini tetap di eksekusi" . PHP_EOL;
}