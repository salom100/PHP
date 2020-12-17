<?php 
    /* JSON = JavaScript Object Notation
    É um mecanismo para transporte de informações

    Diferenças(OBS)
    Vazio: espaço alocado mas nao tem nada
    Null: nao tem espaço alocado e nao tem nada

    EX DE JSON
    {
        "titulo" : "Titanic",
        "Sinopse" : "Um navio colide com um iceberg",
        "ano" : 2017,
        "Horarios" : ["16:00","19:00","21:00"]
    }

    Geralmente as informações de um JSON vem em uma unica linha, e depois fazemos o tratamento delas para poder operar
    */

    //CONVERTENDO JSON EM ARRAY
    $arrayFilme = array(
        "titulo"=> "Titanic",
        "Sinopse"=> "Um navio bate no iceberg e afunda",
        "Ano"=> 2017,
        "horarios"=> array(
            "16:00",
            "19:00",
            "21:00"
        )
    );

    //var_dump($arrayFilme); Demonstra as variaveis organizadas do array
    
    //CONVERTENDO ARRAY EM JSON
    //json_encode($varialveArray) converte um array em json
    $jsonStr = json_encode($arrayFilme);
    echo $jsonStr;

?>