<?php
    //Do while
    //atira primeiro pergunta depois 

    $i= 0;

    do{
        echo "Contador = ".$i."<br>";
        $i++;
    }while($i<10);
    echo "<br>";

?>

<html>
    <head>
        <title>Do While</title>
    </head>
    <body>
        <?php
            $j=0;
            do{
            ?>
                <li>Contador = <?=$j?></li>        
            <?php
            $j++;
            }while($j<=10);
        ?>
    </body>
</html>