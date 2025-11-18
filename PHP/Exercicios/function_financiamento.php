<?php
function calcularPrestacao($total, $entrada, $meses)
{
    return ($total - $entrada) / $meses;
}

echo "Valor total do imovel: ";
$total = (float) readline();
echo "Valor pago na entrada: ";
$entrada = (float) readline();
echo "Sera financiado em quantos meses? ";
$meses = (int) readline();  

$prestacao = calcularPrestacao($total, $entrada, $meses);

echo "Valor de cada prestacao: ".number_format($prestacao, 2);
