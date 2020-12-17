<?php
    //Função de data de hora

    //date("d/m/y"); d= dia m= mes y=ano
    echo date("d/m/y")."<br>";
    echo date("d/m/Y")."<br>";
    echo date("j/m/Y")."<br>";
    echo date("D/m/Y")."<br>";

    // comando que seta qual fuso-horario que o servidor vai pegar as horas
    date_default_timezone_set('America/Sao_Paulo');
    //Hora
    echo date("h:i:s")."<br>";

    //Quando vamos setar a data no banco de dados mySQL devemos passar da seguinte forma
    echo date("Y-m-d h:i:s")."<br>";

    $hora= date("H");
    if($hora > 0 && $hora<6){
        echo "Madrugada Horario de :".$hora."<br>";
    }else if($hora >=6 && $hora<12){
        echo "Bom dia, Horario: ".$hora." da Manha<br>";
    }else if($hora >=12 && $hora<=7){
        echo "Boa Tarde, Horario: ".$hora." da Tarde<br>";
    }else{
        echo "Boa Noite, Horario:".$hora." da Noite<br>";
    }
?>