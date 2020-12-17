<?php
    //Convertendo Json em array
    
    $jsonStr = '{"titulo":"Titanic","Sinopse":"Um navio bate no iceberg e afunda","Ano":2017,"horarios":["16:00","19:00","21:00"]}';

    // json_decode($variavelJson) converte o json em array
    $arrFilme = json_decode($jsonStr);
    
    
    //var_dump($arrFilme);

    echo "<p><b>Titulo: </b>".$arrFilme->titulo."</p>";
    echo "<p><b>Sinopse: </b>".$arrFilme->{"Sinopse"} ."</p>";
    echo "<p><b>Ano: </b>".$arrFilme->Ano."</p>";
    echo "<p><b>Horarios: </b></p>";

    for($i =0 ; $i<count($arrFilme->horarios); $i++){//acessa os valores do titulo horario
        echo "<p><b>".$arrFilme->horarios[$i]."</b></p>";
    }
?>

