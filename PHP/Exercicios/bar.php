<?php 
echo "Sexo: ";
$sexo = readline();

echo "Quantidade de cervejas: ";
$cerveja = (int) readline();

echo "Quantidade de refrigerantes: ";
$refrigerante = (int) readline();

echo "Quantidade de espetinhos: ";
$espetinho = (int) readline();

if ($sexo == "M") {
    $ingresso = 10.00;
}
elseif ($sexo == "F") {
    $ingresso = 8.00;
}

$consumo = 5 * $cerveja + 3 * $refrigerante + 7 * $espetinho;

echo "\n";
echo "RELATÓRIO:\n";
echo "Consumo = R$".number_format($consumo, 2)."\n";

if ($consumo <= 30) {
    $couvert = 4.00;
    echo "Couvert = R$".number_format($couvert, 2)."\n";
}
else {
    $couvert = 0;
    echo "Isento de Couvert\n";
}

echo "Ingresso = R$".number_format($ingresso, 2)."\n";
echo "\n";

$total = $ingresso + $consumo + $couvert;
echo "Valor a pagar = R$".number_format($total, 2)."\n"; 
?>
