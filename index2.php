<?php
    //variaveis e gettype 
    $nomeCompleto = "Salomón Abasto Macías";
    $sexo = "M";
    $salario = 3500;
    $fgts = 15.54;
    $valido = true;

    echo $nomeCompleto." <br>";
    echo "gettype($ Variavel) pega o tipo de variavel (nao há espaço entre $ e variavel) <br>";
    echo "A variavel é do tipo: ".gettype($nomeCompleto)."<br>";
    echo "O sexo é: ".$sexo."<br>";
    echo "A variavel é do tipo: ".gettype($sexo)."<br>";
    echo "O salario é: ".$salario."<br>";
    echo "A variavel é do tipo: ".gettype($salario)."<br>";
    echo "O fgts é:".$fgts."<br>";
    echo "A variavel é do tipo: ".gettype($fgts)."<br>";

    echo $valido."<br>";
    echo "A variavel valido é do tipo: ".gettype($valido)."<br>";

    echo "// consegue gerar comentarios no codigo <br>";
    echo "/* e */ pode comentar varias linhas <br>";
?>