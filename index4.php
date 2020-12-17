<?php
    //variaveis constantes
    //para definir a constante utilizamos o define
    define("min", 17); //constante chamada de 'min' com o valor '17'
    define("max",45); //constante chamada de 'max' com o valor '45'

    $idade = 25; //variavel com a idade do cliente '25'

    echo "MIN: ".min."<br>"; // em caso de constantes nao precisa colocar o $ atras, pois ele é uma constante
    echo "MAX: ".max."<br>";
    echo "idade: ".$idade."<br>";

    if($idade >= min && $idade <= max){ //validação de idade
        echo "A idade esta de acordo com o minimo e o maximo estabelecidos";//idade valida

    }else{
        echo "A idade nao condiz com o intervalo de minimo e maximo";//idade invalida
    }

?>