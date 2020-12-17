<?php 
    // Foreach
    $frutas = ["Abacaxi","Banana","Goiaba","Maça","Fruta"];

    //Array associativo
    $arrFrutas=[
        1=>"Abacaxi",
        2=>"Banana",
        3=>"Goiaba",
        4=>"Manga",
        5=>"Uva"];

    //foreach($array as $v){   }
    
    /* EXEMPLOS DE FOREACH
    foreach($frutas as $v){
        echo $v."<br>";
    }

    foreach($arrFrutas as $key => $v){
        echo "Key: ".$key." Valor: ".$v."<br>";
    }
    */
?>
<html>
    <head>
        <title>Foreach</title>
    </head>
    <body>
        <?php
            foreach($arrFrutas as $Valor){
                ?>
                <li><?=$Valor?></li>
                <?php
            }
        ?>
    </body>
</html>