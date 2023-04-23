<?php

require_once __DIR__ . "\..\Config\Database.php";
require_once __DIR__ . "\..\Model\user.php";
require_once __DIR__ . "\..\Repository\UserRepository.php";

use Config\Database;
use Model\User;
use Repository\UserRepositoryimpl;

function tambahUser(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);

    $user = new User("Halim", "123", 1);
    $userRepository->save($user);
}

function hapusUser(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);

    $id = 3;
    $result = $userRepository->delete($id);
    if($result == true){
        echo "Berhasil Menghapus User";
    }else{
        echo "Gagal Menghapus User";
    }
}

function editUser(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);

    $user = new User("Halim", "123", 1);
    $userRepository->save($user);
}

function findAll(){
    $connection = Database::getConnection();
    $userRepository = new UserRepositoryimpl($connection);


    $userList = $userRepository->findAll();

    var_dump($userList);
}

findAll();