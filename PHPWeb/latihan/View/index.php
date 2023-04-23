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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USER</title>
</head>
<body>
    <h1 style="text-align: center;">USER</h1>

    <div style="width: 500px; margin: auto;">
        <a href="tambahForm.html" style="margin:auto; padding-left: 205px;"><button>Tambah User</button></a>


        <table border="1" style="margin: auto; margin-top: 10px;">
            <tr>
                <td style="width: 30px; padding: 5px; text-align: center;">No</td>
                <td style="width: 100px; padding: 5px;">Nama</td>
                <td style="width: 100px; padding: 5px;">Password</td>
                <td style="width: 50px; padding: 5px;">Level</td>
                <td style="width: 100px; padding: 5px; text-align: center;">Action</td>
            </tr>
            <?php
            foreach($listUser as $row){
                ?>
            <tr>
                <td style="text-align: center"><?= $row->getId() ?></td>
                <td><?= $row->getName() ?></td>
                <td><?= $row->getPassword() ?></td>
                <td style="text-align: center"><?= $row->getLevel() ?></td>
                <td>
                    <form action="editForm.php" method="post">
                        <input type="hidden" name="id" value="<?= $row->getId()?>">
                        <a href="edit.php"><button>Edit</button></a>
                    </form>
                    <form action="../Utility/delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $row->getId()?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            <?php
            }
            ?>
            </tr>
        </table>
    </div>

</body>
</html>