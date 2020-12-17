<?php

    //Criptografias

    /* Tipos de criptografia
    sha1 : Gera uma chave sem volta com 40 caracteres
    md5 : Gera uma chave sem volta com 32 caracteres
    Base64_encode: Criptografa uma string, porem permite retornar o valor
    Base64_decode: Retorna o valor original de uma string criptografada em base 64
    */
    
    //SHA1
    $s = sha1("Salomón");
    echo $s;

    echo "<br>";

    // MD5
    $m= md5("Salomón");
    echo $m;
    echo "<br>";

    //Base64_encode
    $b= base64_encode("Salomón");
    echo $b;
    echo "<br>";
    echo base64_decode($b);

    


?>