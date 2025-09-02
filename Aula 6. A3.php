<?php

$dia_semana = 3;  
// -------------------------

switch ($dia_semana) {
    case 1:
        echo "Domingo - Fim de semana!";
        break;
    case 2:
        echo "Segunda-feira - Dia útil";
        break;
    case 3:
        echo "Terça-feira - Dia útil";
        break;
    case 4:
        echo "Quarta-feira - Dia útil";
        break;
    case 5:
        echo "Quinta-feira - Dia útil";
        break;
    case 6:
        echo "Sexta-feira - Dia útil";
        break;
    case 7:
        echo "Sábado - Fim de semana!";
        break;
    default:
        echo "Número inválido! Informe um valor de 1 a 7.";
}
?>
