<?php

    namespace Repository{
        use Model\User;

        interface UserRepository{
            function save(User $user): void;
            function delete(int $id): bool;
            function edit(User $user): void;
            function findAll(): array;
        }

        class UserRepositoryimpl implements UserRepository{
            private \PDO $connection;

            function __construct(\PDO $connection){
                $this->connection = $connection;
            }

            public function save(User $user):void {
                $sql = "INSERT INTO user (name, password, level) VALUES (?,?,?)";
                $statment = $this->connection->prepare($sql);
                $statment->execute([$user->getName(), $user->getPassword(), $user->getLevel()]);
            }

            public function delete(int $id):bool {
                $sql = "SELECT * FROM user WHERE id = ?";
                $statment = $this->connection->prepare($sql);
                $statment->execute([$id]);

                foreach ($statment as $row){
                    if($row["id"] == $id){
                        $sql = "DELETE FROM user WHERE id = ?";
                        $statment = $this->connection->prepare($sql);
                        $result = $statment->execute([$id]);
                        return $result;
                    }else{
                        return false;
                    }
                }
                return false;
            }

            public function edit(User $user): void{

                $sql = "UPDATE user SET name=?, password=?, level=? WHERE id = ?";
                $statment = $this->connection->prepare($sql);
                $statment->execute([$user->getName(), $user->getPassword(), $user->getLevel(), $user->getId()]);
            }

            public function findAll(): array {
                $sql = "SELECT id, name, password, level FROM user";
                $statment = $this->connection->prepare($sql);
                $statment->execute();

                $userList = [];
                foreach ($statment as $row){
                    $data = new User();
                    $data->setId($row["id"]);
                    $data->setName($row["name"]);
                    $data->setPassword($row["password"]);
                    $data->setLevel($row["level"]);

                    $userList[] = $data;
                }
                return $userList;
            }
        }
    }
?>