<?php

require_once "Exeption/ValidationExeption.php";
require_once "Helper/Validation.php";
require_once "Data/LoginRequest.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Halim";
$loginRequest->password = "Halim";

//ValidationException dan Exception mirip

validateLoginRequest($loginRequest);
echo "Berhasil";