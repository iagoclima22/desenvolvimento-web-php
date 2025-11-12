<?php 
echo "Digite a medida A: ";
$a = (float) readline();

echo "Digite a medida B: ";
$b = (float) readline();

echo "Digite a medida C: ";
$c = (float) readline();

$areaQuadrado = $a * $a;
$areaTriangulo = $a * $b / 2;
$areaTrapezio = ($a + $b) * $c / 2;

echo "AREA DO QUADRADO = ".number_format($areaQuadrado, 4)."\n";
echo "AREA DO TRIANGULO = ".number_format($areaTriangulo, 4)."\n";
echo "AREA DO TRAPEZIO = ".number_format($areaTrapezio, 4)."\n";
?>
