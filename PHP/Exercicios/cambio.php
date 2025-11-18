<?php
function realParaDolar($quantia, $cotacao)
{
    return $quantia / $cotacao;
}

echo "Digite a cotacao em dolar: ";
$dolar = (float) readline();
echo "Digite a quantia em reais: ";
$reais = (float) readline();

$valorDolar = realParaDolar($reais, $dolar);

echo "Voce pode comprar ".number_format($valorDolar, 2)." dolares com esta quantia";

