<?php 
    /*herança: para fazer uma classe herdar a outra, basta colocar o extends e a 
    classe que ela quer herdar, logo as funções da classe mae passam para a classe filha
    e a classe filha pode ter atributos ou caracteristicas diferentes, mas que tambem tem 
    atributos semelhantes ao da mae*/
    class Programador extends Pessoa{
        public $linguagem;

        public function __construct($tmpNome, $tmpSobrenome,$tmpLinguagem){
            $this->nome =$tmpNome;
            $this->sobrenome = $tmpSobrenome;
            $this->linguagem = $tmpLinguagem;

            #contantes magicas __CLASS__ ela ja tem um pre valor ou objetivo
            #existem varios tipos de constantes magicas
            echo "Objeto ".__CLASS__." foi instanciado <br>";

            echo "Linha ".__LINE__." aonde o objeto foi instanciado <br>";

            echo "Local ".__FILE__." aonde o objeto foi instanciado <br>";

            echo "Diretorio ".__DIR__." aonde o objeto foi instanciado <br>";
            /* LISTA DE CONSTANTES E SUAS OPERAÇÔES
            __LINE__
                Retorna o numero da linha do script na qual ela foi declarada

            __FILE__
                Retorna o caminho do arquivo PHP
        
            __DIR__
                Retorna o diretorio

            __FUNCTION__
                Retorna a funciton a qual foi declarada

            __CLASS__
                retorna a class a qual foi declarada

            __METHOD__
                Retorna a classe e o método a qual foi declarada

            __NAMESPACE__
                Retorna o namespace a qual foi declarada
            

            */
        }
    }
?>