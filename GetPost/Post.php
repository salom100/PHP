<?php
    $nomes = ["Sergio","Brenda","Enrique","Gustavo","Celso"];
    // filter_input(Tipo, Campo, TipoEsperado)
    // filter_input(INPUT_POST, "CampoDoFormulario", FILTER_SANITIZE_STRING);
    $nome= filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_STRING); 
    $funcionarioCod= filter_input(INPUT_POST, "slFuncionarios", FILTER_SANITIZE_NUMBER_INT);
    $funcionario = "";
    if($funcionarioCod){
        $funcionario = $nomes[($funcionarioCod-1)];
    }






    //isset($variavel) verifica se uma variavel existe

    /*
    if(isset($_POST["txtNome"])){
        $nome = $_POST["txtNome"];
    }
    if(isset($_POST["txtEmail"])){
        $email = $_POST["txtEmail"];
    }
    if(isset($_POST["slFuncionarios"])){
        $funcionario = $nomes[$_POST["slFuncionarios"]];
    }
    */
   
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
        <form method="post">
            <ul>
                <li>Nome: <input type="text" name="txtNome"/></li>
                <li>E-mail: <input type="text" name="txtEmail"/></li>
                <li>Funcionario:
                    <select name="slFuncionarios" >
                        <?php
                            for($i=0; $i<count($nomes);$i++){
                                ?>
                                    <option value="<?=($i+1)?>"><?=$nomes[$i];?></option>
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