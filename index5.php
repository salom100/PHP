<?php
    // If else e else if
    $idade = 21;
    $senha = 1234;
    $acesso = true;

    /*
    echo "Idade:".$idade."<br> Senha:".$senha."<br>";

    verificação de idade
    if($idade > 18){
        echo "é maior de 18";
    }else if($idade==18){
        echo "ele tem 18 anos";
    }else{
        echo "ele nao é maior de idade";
    }*/

    /* verificação de senha
    if($senha =="123"){
        echo "Acesso liberado";
    }else{
        echo "Acesso negado";
    }
    
    Verificação idade e senha
    if(($idade >= 18 && $idade <= 45)&&($senha == "123")){
        echo "Acesso liberado";
    }else{
        echo "Acesso negado";
    }

    */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IF</title>
</head>
<body>
    <?php
        if(($idade >= 18)&&($senha=="1234")&&($acesso=="true")){
            ?>
            <h1 style="color:green">Acesso liberado</h1>
            <?php
        }else{
            ?>
            <h1 style="color:red">Acesso negado</h1>
            <?php
        }
    ?>
</body>
</html>