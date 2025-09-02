<?php

$valor_compra = 200;      // valor da compra em R$
$possui_cupom = true;     // true ou false
// --------------------------

// Verificação do desconto
if ($valor_compra > 150 || $possui_cupom) {
    $percentual = 10;
    $desconto   = $valor_compra * 0.10;
} else {
    $percentual = 0;
    $desconto   = 0;
}

// Valor final
$valor_final = $valor_compra - $desconto;

// Mensagem usando operador ternário
$mensagem = ($percentual > 0) ? 
    "Desconto aplicado de {$percentual}%." : 
    "Não houve desconto.";

// Saída
echo "Valor original: R$ " . number_format($valor_compra, 2, ',', '.') . "\n";
echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . " ({$percentual}%)\n";
echo "Valor final a pagar: R$ " . number_format($valor_final, 2, ',', '.') . "\n";
echo $mensagem;
?>
