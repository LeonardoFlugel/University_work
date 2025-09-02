<?php

$peso   = 75;  
$altura = 1.75; 
// --------------------------------------------------------------------

// Cálculo do IMC
$imc = $peso / ($altura * $altura);

// Classificação
if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    $classificacao = "Peso normal";
} elseif ($imc >= 25 && $imc <= 29.9) {
    $classificacao = "Sobrepeso";
} else { // $imc >= 30
    $classificacao = "Obesidade";
}

// Saída
echo "Peso: {$peso} kg\n";
echo "Altura: {$altura} m\n";
echo "IMC: " . number_format($imc, 2, ',', '.') . "\n";
echo "Classificação: {$classificacao}\n";
?>
