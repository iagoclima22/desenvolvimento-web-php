<?php 
echo "Digite o valor do raio do circulo: ";
$raio = (float) readline();

$area = pi() * pow($raio, 2);

echo "AREA = ".number_format($area, 3);
?>
