<?php
    //Cookie
    $req = filter_input(INPUT_GET,"req",FILTER_SANITIZE_NUMBER_INT);

    switch($req){
        case 1:
            Criar();
            break;
        case 2:
            Ler();
            break;
        case 3:
            Alterar();
            break;
        case 4:
            Deletar();
            break;
    }
    
    function Criar(){
        echo "Criar";
        //setcookie("nome da chave","valor da chave", Tempo)
        setcookie("nome","Salo", time()+100);
    }

    function Ler(){
        //echo $_COOKIE["nome"];
        echo filter_input(INPUT_COOKIE,"nome",FILTER_SANITIZE_STRING);
    }

    function alterar(){
        echo "alterar";
        // setcookie("nome da chave","novo valor");
        setcookie("nome","Salomon");
    }

    function Deletar(){
        echo "Deletar";
        setcookie("nome","Salo",time()-1);
    }
?>