<?php
    class Usuario{
        private $nome;
        private $email;
        private $senha;
        private $data;
        
        //set = atribuir
        //get = captar ou obter
        public function setNome($nome){
            $this->nome =$nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setEmail($email){
            $this->email =$email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getSenha(){
            return $this->senha;
        }

        public  function setData($data){
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }
    }
?>