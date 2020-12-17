<?php
    // Calculos

    $soma = 4+4;
    $subtracao = 8-6;
    $multiplicacao = 5*6;
    $divisao = 10/2;
?>

<html>
    <head>
        <title>Operações matematicas</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <p>4+4 = <?= $soma?></p>
        <p>8-6 = <?= $subtracao?></p>
        <p>5*6 = <?= $multiplicacao?></p>
        <p>10/2 =<?= $divisao?></p>
        <hr>
        <p><?=($soma * $subtracao);?></p>
    </body>
</html>