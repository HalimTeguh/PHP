<?php

require_once "Exeption/ValidationExeption.php";
require_once "Data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";


//tanpa reflection
$request = new LoginRequest();
$request->username = "Halim";
$request->password = null;


//ValidationUtil::validate($request);

//ValidationUtil::valicdateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $email;
    public ?string $password;
}

$register = new RegisterUserRequest;

$register->name = "Halim";
$register->email = "Halim";
$register->password = "Halim";

ValidationUtil::valicdateReflection($register);