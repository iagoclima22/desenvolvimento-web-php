<?php 
echo "Base do retangulo: ";
$base = (float)readline();

echo "Altura do retangulo: ";
$altura = (float)readline();

$area = $base * $altura;
$perimetro = 2 * ($base + $altura);
$diagonal = sqrt(pow($base, 2) + pow($altura, 2));

echo "AREA = ".number_format($area, 4)."\n";
echo "PERIMETRO = ".number_format($perimetro, 4)."\n";
echo "DIAGONAL = ".number_format($diagonal, 4)."\n";

?>
