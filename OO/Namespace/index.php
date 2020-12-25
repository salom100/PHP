<?php

    include "Connect.php";
    include "Connect2.php";

    //ignore o erro pois ele funciona
    ConectarSite\conectar();
    echo "<br>";
    ConectarBanco\conectar();

    /* explicando o Namespace
        O Namespace serve para identificar uma função de que pertence a tal script php
        ex: se houverem 2 arquivos php que tenham uma função de mesmo nome
        e chamarmos na mesma pagina sem o Namespace, ocorrera um erro fatal
        para evitar que isso ocorra podemos definir um Namespace nos arquivos que possuem as funções
        assim o leitor podera identificar de qual lugar e qual função deve executar
    */
?>