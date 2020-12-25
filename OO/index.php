<?php

    require "Pessoa.php";
    require "Programador.php";
    //require_once "Pessoa.php"; quando o projeto e muito grande e se chama a classe varias vezes esse codigo o faz uma unica vez assim nao se necessita chamar ela novamamente
    
    
    //Criando um objeto e por conta do construct eu posso inserir os valores na hora que defino o objeto
    //retirando a necessidade de chamar a função setNome("nome");
    $objeto = new Pessoa("Salomon","Abasto");
    /* Quando as propriedades de um objeto sao publicos, podemos inserir valores dessa forma
    $objeto->nome = "Salomon";
    $objeto->sobrenome = "Abasto Macías";
    */

    //Quando as propriedades sao privadas devemos inserir chamando a função feita na classe que insere o valor  
    /*
    $objeto->setNome("Salomon"); função que sera suprida pelo construct
    $objeto->setSobrenome("Abasto");
    */

    //chama as funções que a classe opera atraves do objeto selecionado
    echo $objeto->getNome()."<br>";
    echo $objeto->getSobrenome()."<br>";

    
    var_dump($objeto);
    echo "<br>";
    echo "<br>";
    $programador = new Programador("Salomón","Abasto","PHP");
    echo $programador->getNome()."<br>";
    echo $programador->getSobrenome()."<br>";

    var_dump($programador);
    echo "<br>";
    #constantes como chamar
    echo $programador::ESPECIE;

?>