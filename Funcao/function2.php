<?php
    $salario = 1567.76;
    $valorAjuste = 0; // variavel declarada que sera alterada na função 

    function AjustarSalario($sal, &$valorAjuste){ //&$valorAjuste é uma variavel que vai ser alterada e mantera seu valor apos a execução da função
        $valorAjuste=300.00;

        return ($sal + $valorAjuste);
    }

    $valorFinal = AjustarSalario($salario,$valorAjuste);
    echo "O valor ajustado é: <b>".$valorFinal."</b>, com aumento de: <b>".$valorAjuste."</b>";

?>