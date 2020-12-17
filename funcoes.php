<?php 
    $nome = "Salomon Abasto Macias";

    echo $nome."<br>";
    //substr($variavel,inicio,fim(opcional));
    echo substr($nome,0,5)."<br>";
    //strtolower($variavel) muda a letra para minuscula
    echo strtolower($nome)."<br>";
    // strtoupper($varialvel) transforma em tudo em letra maiuscula
    echo strtoupper($nome)."<br>";

    //strip_tags($variavel/string, as exeções) remove todas as formatações do html
    $msg = strip_tags("<h1>Bem-Vindo</h1>","<h1>");
    echo $msg;

    //str_replace("BuscaPalavra","SubstituiPalavraPor",$variavel); pode ser utilizado para substituir palavroes
    $comida = "Banana, Maça, Pera, Uva, Banana";
    $alt = str_replace("Banana","Morango",$comida);
    echo $alt."<br>";
    
    //explode("Termo que separará o valor do texto e coloca em modo de array",$variavel);
    $ex = explode(" ",$nome);
    echo $ex[0]."<br>";

    //strlen($variavel) conta o numero de caracteres que existe
    echo strlen($nome)."<br>";
    if(strlen($nome)>10){
        echo "Nome Grande demais";
    }else{
        echo "Acesso permitido";
    }

?>