<?php 
echo "Quantos numeros voce vai digitar? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    echo "Digite um numero: ";
    $num[$i] = (float) readline();
}

echo "VALORES = ";
for ($i = 0; $i < $n; $i++) {
    echo number_format($num[$i], 2)." ";
}

$soma = 0;
for ($i = 0; $i < $n; $i++) {
    $soma += $num[$i];
}
echo "\nSOMA = ".number_format($soma, 2)."\n";

$media = $soma / $n;
echo "MEDIA = ".number_format($media, 2)."\n";
?>
