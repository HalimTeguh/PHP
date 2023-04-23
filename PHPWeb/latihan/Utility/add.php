<?php

require_once __DIR__ . "\..\Config\Database.php";
require_once __DIR__ . "\..\Model\User.php";
require_once __DIR__ . "\..\Repository\UserRepository.php";
require_once __DIR__ . "\..\Service\UserService.php";

use Config\Database;
use Repository\UserRepositoryimpl;
use Service\UserServiceimpl;

function tambahUser(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);
    $userService = new UserServiceimpl($userRepository);

    $nama = $_POST["name"];
    $password = $_POST["password"];
    $level = $_POST["level"];

    $userService->addUser($nama, $password, $level);
}

tambahUser();
header("Location: ../View/index.php");

?>