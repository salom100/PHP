<?php
    //Arrays
    /*
    Suporta todos os tipos de dados e tipos
    array começa com o indice 0, nao se começa contando pelo 1.
    

    SINTAXE
    $nomes= array("Salomon","Nataly","Evandro","Priscila","Enrique");

    */

    $nomes = array("Salomon","Nataly","Daniel","Michelle","Elizabeth","Jaqueline","Enrique");
    /*EXEMPLO
    echo $nomes[0]."<br>";
    echo "Contador <br><br>";
    for($i=0;$i<6;$i++){
        echo $nomes[$i]."<br>";
    }

    */
?>
<html>
    <head>
        <title>Array</title>
    </head>
    <body>
        <select name="slProfessores" id="slProfessores">
            <?php
                for($i=0;$i< count($nomes);$i++){
                    ?>
                    <option value="<?=$i; ?>"><?=$nomes[$i];?></option>
                    <?php
                }
            ?>
        </select>
        <button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
    </body>
</html>