<?php

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT); // capta o tipo de requerimento
$arquivo = "usuario.txt"; // nome do arquivo do qual serão guardados os usuarios

switch($req){ 
    case 1: // se for igual a 1 ele cadastra o usuario
        $nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING); // captura as informações dos campos
        $email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, "txtTelefone", FILTER_SANITIZE_STRING);

        $str = "Nome: {$nome}|E-mail: {$email}|Telefone:{$telefone}"; // formata a exibição

        $fp = fopen($arquivo, "w"); // abre o arquivo txt
        if(fwrite($fp, "{$str}")){// escreve o texto formatado com base no que foi pego( se conseguir ele retorna 1 ou 0)
            echo "1";
        }else{
            echo "0";
        }
        fclose($fp);
    break;

    case 2: // se for igual a 2 ele consulta o arquivo
        $fp = fopen($arquivo, "r"); // ele le o arquivo
        $texto = fread($fp, filesize($arquivo));
        fclose($fp);
        echo $texto; // exibe o texto do arquivo
    break;

    default:
        echo "nada";
    break;
}