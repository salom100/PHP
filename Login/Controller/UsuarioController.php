<?php
    require_once("DAL/UsuarioDAO.PHP");

    class UsuarioController{
        private $usuarioDAO;

        public function __construct(){
            $this->usuarioDAO = new UsuarioDAO();
        }

        public function Cadastrar(Usuario $usuario){
            //Verifica se ha nome senha e se o email possui @ para poder chamar a função cadastrar usuario
            if(strlen($usuario->getNome())> 3 && strlen($usuario->getSenha()) >= 7 && strpos($usuario->getEmail(),"@") > 0){ 
                return $this->usuarioDAO->cadastrar($usuario);
            }else{
                return -2; // dados invalidos
            }
        }

        public function Autenticar(string $email, string $senha){
            if(strpos($email,"@")>0 && strpos($email,".")>0 && strlen($senha)>= 7){
                return $this->usuarioDAO->Autenticar($email, $senha);
            }else{
                return null;
            }
        }

        public function RetornarUsuario(string $email){
            if(strpos($email,"@")>0 && strpos($email, ".")>0){
                return $this->usuarioDAO->RetornarUsuario($email);
            }else{
                return null;
            }
        }
    }
?>
