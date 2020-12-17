<?php
    //While Tradução de Enquanto
    //Utilizado quando nao sabemos quanto sera lido
    //Sempre deve ter uma condição de saida, no caso $contador ++.

    //Na programação os valores começam de 0.
    $count= 0;

    while($count < 10){
        echo "Cont: ".$count." <br>";
        //$count = $count+1;
        //$count += 1;
        $count++;
    }

    // Exemplo de operadores unarios
    $cont=10;

    while($cont > 0){
        echo "Cont: ".$cont."<br>";
        $cont--;
    }

    //html exemplo abaixo
?>

<html>
    <head>
        <title>While</title>
    </head>
    <body>
        <?php
            $contador = 0;
            while($contador < 25){//contador abre aqui
                if($contador >5 && $contador<=20){//IF abre aqui
                ?>
                <li><?= $contador?></li>
                <?php
                }//IF fecha aqui 
                $contador++;
            } // contador fecha aqui
        ?>
    </body>
</html>