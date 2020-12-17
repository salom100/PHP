<?php
    for($i=0;$i<10;$i++){
        echo "contador = ".$i."<br>";
    }
?>

<html>
    <head>
        <title>For</title>
    </head>
    <body>
        <ul>
            <?php
                for($x=0;$x<=10;$x++){//abre o for
                    for($j=0;$j<=10;$j++){
                    ?>
                        <li><?=$x?> x <?=$j?> = <?=($x*$j)?></li>
                    <?php
                    }
                    echo "<br>";
                }//fecha o for
            ?>
        </ul>
    </body>
</html>