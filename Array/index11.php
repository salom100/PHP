<?php
    //array com chave
    /*
    Exemplo simples
    $notas = array(
        "aluno1" => 10,
        "aluno2" => 5,
        "aluno3" => 7,
    );

    echo $notas["aluno2"];
    */

    // é possivel colocar array dentro de outro array
    //Exemplo

    $notas = array(
        "aluno1" => array(
            "nome" => "Julia",
            "nota" => "10"
        )
    );

    echo $notas["aluno1"]["nota"];
?>