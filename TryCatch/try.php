<?php 
    //try catch
    /*
    o try tenta executar algo, quando ela nao consegue ele passa para o catch que é responsavel pelo tratamento
    */
    require_once("func.php");

    try{//tenta criar uma conexao
        AbrirConexao();
    }catch(Exception $ex){//existem varias classes de exeções de erros
        // $ex->funcao();
        echo "<b>Mensagem:</b>".$ex->getMessage()."<br>";
        echo "<b>Linha:</b>".$ex->getLine()."<br>";
        echo "<b>Arquivo:</b>".$ex->getFile()."<br>";
    }
    

    /*
    try{

    }catch{

    }finally{
        ultima execução apos o try e catch
    }
    
    */
?>