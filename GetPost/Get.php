<?php
    $nomes = ["Sergio","Brenda","Enrique","Gustavo","Celso"];
   /*
   $nome = $_GET["nome"];
    echo $nome;
    */
    $nome= filter_input(INPUT_GET, "txtNome", FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_GET, "txtEmail", FILTER_SANITIZE_STRING); 
    $funcionarioCod= filter_input(INPUT_GET, "slFuncionarios", FILTER_SANITIZE_NUMBER_INT);
    $funcionario = "";
    if($funcionarioCod){
        $funcionario = $nomes[($funcionarioCod-1)];
    }
?>
<html>
    <head>
        <title>Formulario</title>
        <meta charset = "utf-8"/>
        <style>
            ul{
                list-style: none;
            }
            input, select{
                padding: 5px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <form method="get">
            <ul>
                <li>Nome: <input type="text" name="txtNome"/></li>
                <li>E-mail: <input type="text" name="txtEmail"/></li>
                <li>Funcionario:
                    <select name="slFuncionarios" >
                        <?php
                            for($i=0; $i<count($nomes);$i++){
                                ?>
                                    <option value="<?=($i+1);?>"><?=$nomes[$i];?></option>
                                <?php
                            }
                        ?>
                    </select>
                </li>
                <li><input type="submit" name="btnSubmit" value="Cadastrar"></li>
            </ul>
        </form>
        <br><hr><br>
        <p>Nome: <?=$nome?></p>
        <p>Email: <?=$email?></p>
        <p>Funcionario: <?=$funcionario?></p>
    </body>
</html>
