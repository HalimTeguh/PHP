<?php

require_once __DIR__ . "\..\Config\Database.php";
require_once __DIR__ . "\..\Model\User.php";
require_once __DIR__ . "\..\Repository\UserRepository.php";
require_once __DIR__ . "\..\Service\UserService.php";

use Config\Database;
use Repository\UserRepositoryimpl;
use Service\UserServiceimpl;

function tampilData(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);
    $userService = new UserServiceimpl($userRepository);

    $listUser = $userService->ShowUsers();
    
    foreach($listUser as $row){
        echo $row->getId() . " | " . $row->getName() . PHP_EOL;
    }
}

function tambahUser(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);
    $userService = new UserServiceimpl($userRepository);

    $nama = "Teguh";
    $password = "123";
    $level = 1;

    $userService->addUser($nama, $password, $level);
}

function hapusUser(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);
    $userService = new UserServiceimpl($userRepository);

    $id = 5;
    $userService->RemoveUser($id);
}

function editUser(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);
    $userService = new UserServiceimpl($userRepository);

    $id = 6;
    $name = "Belajar";
    $password = "999";
    $level = 3;

    $userService->EditUser($id, $name, $password, $level);
}

tampilData();
editUser();
tampilData();

?>