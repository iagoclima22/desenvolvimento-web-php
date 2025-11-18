<?php
function calcularDiagonal($base, $altura)
{
    return sqrt(pow($base, 2) + pow($altura, 2));
}

function calcularArea($base, $altura)
{
    return $base * $altura;
}

function calcularPerimetro($base, $altura)
{
    return 2 * ($base + $altura);
}


echo "Digite o valor da base do retangulo: ";
$base = (float) readline();
echo "Digite o valor da altura do retangulo: ";
$altura = (float) readline();

$diagonal = calcularDiagonal($base, $altura);
$area = calcularArea($base, $altura);
$perimetro = calcularPerimetro($base, $altura);

echo "Diagonal = ".number_format($diagonal, 2)."\n";
echo "Area = ".number_format($area, 2)."\n";
echo "Perimetro = ".number_format($perimetro, 2)."\n";
