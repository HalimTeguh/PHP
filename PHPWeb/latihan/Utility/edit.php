<?php

require_once __DIR__ . "\..\Config\Database.php";
require_once __DIR__ . "\..\Model\User.php";
require_once __DIR__ . "\..\Repository\UserRepository.php";
require_once __DIR__ . "\..\Service\UserService.php";

use Config\Database;
use Repository\UserRepositoryimpl;
use Service\UserServiceimpl;

function editUser(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);
    $userService = new UserServiceimpl($userRepository);

    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $userService->EditUser($id, $name, $password, $level);
}

editUser();
header("Location: ../View/index.php");

?>