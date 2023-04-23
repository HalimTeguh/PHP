<?php

namespace Model{
    class User{
        private int $id;
        private string $name;
        private string $password;
        private int $level;

        public function __construct(string $name = "", string $password = "", int $level = 0){
            $this->name = $name;
            $this->password = $password;
            $this->level = $level;
        }

        public function getId():int {
            return $this->id;
        }

        public function setId(int $id): void{
            $this->id = $id;
        }

        public function getName(): string{
            return $this->name;
        }

        public function setName(string $name): void{
            $this->name = $name;
        }

        public function getPassword(): string{
            return $this->password;
        }

        public function setPassword(string $password): void{
            $this->password = $password;
        }

        public function getLevel(): int{
            return $this->level;
        }

        public function setLevel(int $level): void{
            $this->level = $level;
        }
    }
}