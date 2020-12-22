<?php

// capta o tipo de requerimento
$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT); 
//Nome do arquivo que os dados serao guardados
$arquivo = "usuario.txt";

switch($req){
    case 1: // se for igual a 1 ele cadastra o usuario
        //Captura as informações dos campos
        $nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, "txtTelefone", FILTER_SANITIZE_STRING);

        //Formatação para gravar no arquivo txt
        $str = "Nome: ".$nome." | E-mail: ".$email." | Telefone: ".$telefone."";

        $fp = fopen($arquivo, "w"); // abre o arquivo txt
        if(fwrite($fp, "".$str."")){ // se conseguir escrever o texto formatado
            echo "1";
        }else{
            echo "0";
        }
        fclose($fp);
    break;
    
    case 2: // se for igual a 2 ele consulta o arquivo
        $fp = fopen($arquivo, "r"); // le o arquivo
        $texto = fread($fp, filesize($arquivo));
        fclose($fp);
        echo $texto; // exibe o texto do arquivo
    break;
    
    case 3: // cadastra o endereço
        $cep = filter_input(INPUT_POST, "txtCep",FILTER_SANITIZE_STRING);
        $logradouro = filter_input(INPUT_POST, "txtLogradouro",FILTER_SANITIZE_STRING);
        $complemento= filter_input(INPUT_POST,"txtComplemento",FILTER_SANITIZE_STRING);
        $bairro= filter_input(INPUT_POST,"txtBairro",FILTER_SANITIZE_STRING);
        $localidade= filter_input(INPUT_POST,"txtLocalidade",FILTER_SANITIZE_STRING);
        $uf = filter_input(INPUT_POST,"txtUF",FILTER_SANITIZE_STRING);
        $ibge = filter_input(INPUT_POST,"txtIBGE",FILTER_SANITIZE_STRING);
        $gia = filter_input(INPUT_POST,"txtGIA",FILTER_SANITIZE_STRING);
        $ddd = filter_input(INPUT_POST,"txtDDD",FILTER_SANITIZE_STRING);
        $siafi = filter_input(INPUT_POST,"txtSiafi",FILTER_SANITIZE_STRING);
        
        $formato = "Cep: ".$cep." | Logradouro: ".$logradouro." | Complemento: ".$complemento." | Bairro: ".$bairro." | Localidade: ".$localidade." | UF: ".$uf." | IBGE : ".$ibge." | GIA: ".$gia." | DDD: ".$ddd." | Siafi: ".$siafi."";
        
        $CepArquivo= "".date("Y m d H i s");
        $fp = fopen("../arquivos/".$CepArquivo."", "w");//Cria o arquivo na pasta Arquivos
        if(fwrite($fp, "".$formato."")){
            echo "1";
        }else{
            echo "0";
        }
        fclose($fp);

    break;


    default:
        echo "nada";
    break;
}   

?>