<?php
    //Buscando dados com CEP e retornando em JSON

    // http://correiosapi.apphb.com/cep/89560448 NAO FUNCIONA MAIS

    // https://viacep.com.br/ws/19010010/json/ FUNCIONA

    //$cep = "89560-448"; valor fixo

    //valores variaveis na url 
    //ex: http://localhost/PHP/JSON/index3.php?cep=01001-001
    $cep = filter_input(INPUT_GET,"cep");

    //str_replace("O que tem ","Substitui por","$variavel");
    $cep = str_replace("-","",$cep);  //esta sendo utilizado para retirar o - do cep
    //file_get_contents("URL"); pega o valor que esta la, no caso um array que corresponde ao Cep que estamos pesquisando
    $str = file_get_contents("https://viacep.com.br/ws/".$cep."/json/");
    //echo $str; exibe o json do que foi captado no site api de cep

    $arrayCidade = json_decode($str);//recebe o Json e converte em array


    //{ "cep": "89560-448", "logradouro": "Rua Simão Bellozupko", "complemento": "", "bairro": "Marafon", "localidade": "Videira", "uf": "SC", "ibge": "4219309", "gia": "", "ddd": "49", "siafi": "8379" }

    //Exibindo os dados formatados
    if($arrayCidade != null){ // verifica se na variavel tem algo
        echo "<p><b>CEP: </b> ".$arrayCidade->cep."</p>";
        echo "<p><b>Logradouro: </b>".$arrayCidade->logradouro." </p>";
        echo "<p><b>Complemento: </b>".$arrayCidade->complemento." </p>";
        echo "<p><b>Bairro: </b> ".$arrayCidade->bairro."</p>";
        echo "<p><b>Localidade: </b>".$arrayCidade->localidade." </p>";
        echo "<p><b>UF: </b>".$arrayCidade->uf." </p>";
        echo "<p><b>IBGE: </b>$arrayCidade->ibge </p>";
        echo "<p><b>GIA: </b>".$arrayCidade->gia." </p>";
        echo "<p><b>DDD: </b>".$arrayCidade->ddd." </p>";
        echo "<p><b>Siafi: </b>".$arrayCidade->siafi." </p>";
    }
    
?>

