<?php
function calcularImc($peso, $altura)
{
    return $peso / pow($altura, 2);
}

echo "Digite o peso: ";
$peso = (float) readline();
echo "Digite a altura: ";
$altura = (float) readline();

$imc = calcularImc($peso, $altura);
echo "IMC = ".number_format($imc, 2);
