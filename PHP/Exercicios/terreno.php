<?php 
echo "Digite a largura do terreno: ";
$largura = (float)readline();

echo "Digite o comprimento do terreno: ";
$comprimento = (float)readline();

echo "Digite o valor do metro quadrado: ";
$valorM2 = (float)readline();

$area = $largura * $comprimento;
$preco = $area * $valorM2;

echo "Area do terreno = ".number_format($area, 2). "\n";
echo "Preco do terreno = ".number_format($preco, 2). "\n";
?>
