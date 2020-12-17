<?php
    //Array associativo Foreach dentro de Foreach

    //Array
    $Notas = [
        "aluno1"=>[
            "nome"=>"Salomón",
            "nota"=>8
        ],
        "aluno2"=>[
            "nome"=>"Camila",
            "nota"=>8.5
        ],
        "aluno3"=>[
            "nome"=>"Evandro",
            "nota"=>8
        ],
        "aluno4"=>[
            "nome"=>"Leticia",
            "nota"=>10
        ]
    ];

    foreach($Notas as $aluno){//foreach que percorre o array usando a chave que tbm é um array
        foreach($aluno as $chave => $valor){//segundo foreach que percorre a chave/array e exibe o titulo e o valor
            echo $chave." = ".$valor." <br>";
        }
        echo "<br>";
    }

?>