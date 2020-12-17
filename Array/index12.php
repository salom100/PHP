<?php
    //Exemplo de como inserir valores num array

    $array = [];

    for($i=0;$i<=100;$i++){
        $array[] = $i;
    }

    for($i=0;$i<=100;$i++){
        echo $array[$i]."<br>";
    }
?>