<?php 
echo "Distancia percorrida: ";
$distancia = (float) readline();

echo "Combustível gasto: ";
$combustivel = (float) readline();

$consumo = $distancia / $combustivel;

echo "Consumo medio = ".number_format($consumo, 3);
?>
