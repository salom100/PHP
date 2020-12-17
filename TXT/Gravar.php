<?php
    //Gravar texto em um arquivo
    function Gravar(string $texto, string $arquivo ){
        $fp= fopen($arquivo, "a+");
        fwrite($fp,"".$texto." <br>\r\n");
        fclose($fp);
    }

    Gravar(date("Y-m-d H:i:s"),"File.txt");

    //Ler texto em arquivo
    function Ler(string $arquivo){ // função que recebe o nome do arquivo como parametro
        $fp = fopen($arquivo,"r");//comando que abre o arquivo e passa ele para variavel $fp
        //filesize($arquivo); retorna o tamanho do arquivo
        $texto = fread($fp, filesize($arquivo)); // variavel que vai receber todo o texto do arquivo
        fclose($fp);// fechando o arquivo
        return $texto;//retorna o texto que ele pegou
    }

    echo Ler("file.txt");

?>