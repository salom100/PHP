<?php
    /* include requisita o arquivo
    include("gravar.php");
    Gravar("Include","file.txt");

    include("Ler.php");
    $texto = Ler("file.txt");
    echo $texto;
    */

    //require requisita que o arquivo exista se nao ele nao executa o codigo
    require_once("Gravar.php");
    Gravar("Include","file.txt");

    require_once("Ler.php");
    $texto = Ler("file.txt");
    //echo $texto;


?>
<html>
    <head>
        <title>Require</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div>
            <?php
                echo Ler("file.txt");
            ?>
        </div>
    </body>

</html>