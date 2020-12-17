<?php
    //função
    /* Explicação
        Quando criamos uma função e chamamos ela, se ela tem um return ao inves de echo dentro da função
        EX:
        function Funcao(){
            return "Texto";
        }
        Para exibir o valor que retorna, devemos colocar a echo antes de chamar a função
        assim:
        echo Funcao();

        Se dentro da função, ja existir um echo dentro
        EX: 
        function Funcao(){
            echo "Texto";
        }
        So precisamos colocar o nome da função para chamar ela de volta
        Funcao();
    */
    
    /*
    function Ola(){
        return "Hello World <br>";
    }
    $v= Ola();
    echo $v;

    //função com parametros
    function identifica($nome, $email =""){
        return "Ola meu nome é: ".$nome." e meu email é: ".$email." <br>";
    }

    $nome = "Salomon";
    $email = "computacaosalomon@gmail.com";

    echo identifica($nome,$email);
    */

    function Multiplica($p1,$p2){
        return (($p1 * $p2)/4);
    }

?>
<html>
    <head>
        <title>Função</title>
    </head>
    <body>
        <?php
            for($i=0;$i<10;$i++){
                ?>
                    <li><?=Multiplica($i,($i*5));?></li>
                <?php
            }
        ?>
    </body>
</html>