<?php

    namespace Service{
        use Model\User;
        use Repository\UserRepository;

        interface UserService{
            function addUser(string $name, string $password, int $level): void;
            function RemoveUser(int $id): void;
            function EditUser(int $id, string $name, string $password, int $level): void;
            function ShowUsers(): array;
        }

        class UserServiceimpl implements UserService{
            private UserRepository $userRepository;

            function __construct(UserRepository $userRepository){
                $this->userRepository = $userRepository;
            }

            public function addUser(string $name, string $password, int $level): void{
                $this->userRepository->save(new User($name, $password, $level));
                echo "Success menambah user" . PHP_EOL;
            }

            public function RemoveUser(int $id): void{
                $result = $this->userRepository->delete($id);
                if($result == true){
                    echo "Berhasil Menghapus User" . PHP_EOL;
                }else{
                    echo "Gagal Menghapus User" . PHP_EOL;
                }
            }

            public function EditUser(int $id, string $name, string $password, int $level): void{
                foreach ($this->userRepository->findAll() as $key=>$value){
                    if($value->getId() == $id){
                        $user = new User($name, $password, $level);
                        $user->setId($id);
                        $this->userRepository->edit($user);
                    }
                }
            }

            public function ShowUsers(): array{
                $user = array();
                foreach ($this->userRepository->findAll() as $key=>$value){
                    $user[] = $value;
                }
                return $user;
            }
        }
    }
?>