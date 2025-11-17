<?php 

echo "Quantos numeros voce vai digitar? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    echo "Digite um numero: ";
    $vet[$i] = (float) readline();
}

$maiorValor = 0;
$indiceMaior = 0;
for ($i = 0; $i < $n; $i++) {
    if ($vet[$i] > $maiorValor) {
        $maiorValor = $vet[$i];
        $indiceMaior = $i;
    }
}

echo "\n";
echo "MAIOR VALOR = ".number_format($maiorValor, 1)."\n";
echo "POSICAO DO MAIOR VALOR = ".$indiceMaior;
