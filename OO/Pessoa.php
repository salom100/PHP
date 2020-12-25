<?php
    //criando uma classe
    class Pessoa{

        //propriedades podem ser de 3 tipos
        //public = qualquer pessoa pode acessar
        //private = so pode ser acessada por dentro dessa class
        //protected = so pode ser acessada pela classe e pelas que herdam a classe

        protected $nome;
        protected $sobrenome;

        /*Uma constante é uma variavel imutavel que te o valor fixo
        para declarar a variavel constante, ela nao necessita do $ para ser declarada
        entao a sintaxe fica

        const VARIAVEL = "Valor";

        */
        const ESPECIE = "Humana";

        public function __construct($tmpNome, $tmpSobrenome){
            /*O construct é uma função que constroi o objeto e insere os valores do objeto
            sem a necessidade de chamar uma função que faz isso, construindo assim o objeto
            de forma mais rapido e eficiente
            */
            $this->nome=$tmpNome;
            $this->sobrenome=$tmpSobrenome;
        }

        public function setNome($novoNome){
            $this->nome= $novoNome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setSobrenome($sobrenome){
            $this->sobrenome= $sobrenome;
        }

        public function getSobrenome(){
            return $this->sobrenome;
        }
    }
?>