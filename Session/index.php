<?php
    //session
    //gravar no maximo informações resumidas

    //se faz necessario iniciar a session
    session_start();

    //SINTAXE
    //$_SESSION["Chave"] = Valor;
    $_SESSION["key"] = date("H:i:s");

    // exibe o que esta dentro da session
    //echo $_SESSION["key"];

?>