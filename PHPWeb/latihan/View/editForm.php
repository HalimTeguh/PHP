<?php

require_once __DIR__ . "\..\Config\Database.php";
require_once __DIR__ . "\..\Model\user.php";
require_once __DIR__ . "\..\Repository\UserRepository.php";
require_once __DIR__ . "\..\Service\UserService.php";

use Config\Database;
use Repository\UserRepositoryimpl;
use Service\UserServiceimpl;

$connection = Database::getConnection();
$userRepository = new UserRepositoryimpl($connection);
$userService = new UserServiceimpl($userRepository);


$listUser = $userService->ShowUsers();

$userId = $_POST['id'];
foreach($listUser as $row){
  if($row->getId() == $userId){
    $user = $row;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit User</title>
  </head>
  <body>
    <h1 style="text-align: center">Edit User</h1>

    <form action="../Utility/edit.php" method="post">
      <table border="1" style="margin: auto">
        <tr>
          <td style="padding: 10px;">Nama</td>
          <td style="padding: 10px;"><input type="text" name="name" value="<?= $user->getName()?>"/></td>
        </tr>
        <tr>
          <td style="padding: 10px;">Password</td>
          <td style="padding: 10px;"><input type="text" name="password" value="<?= $user->getPassword()?>"/></td>
        </tr>
        <tr>
          <td style="padding: 10px;">Level</td>
          <td style="padding: 10px;"><input type="text" name="level" value="<?= $user->getLevel()?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding: 5px; padding-right: 10px;">
            <input type="hidden" name="id" value="<?= $user->getId()?>">
            <a href="index.php"><button>Cancel</button></a>
            <input type="submit" value="Submit" style="float: right;">
            </td>
        </tr>
      </table>
    </form>
  </body>
</html>
