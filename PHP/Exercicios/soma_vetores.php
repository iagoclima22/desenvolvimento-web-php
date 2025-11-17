<?php 
echo "Quantos valores vai ter cada vetor? ";
$n = (int) readline();

echo "Digite os valores do vetor A:\n";
for ($i = 0; $i < $n; $i++) {
    $vetA[$i] = (int) readline();
}

echo "Digite os valores do vetor B:\n";
for ($i = 0; $i < $n; $i++) {
    $vetB[$i] = (int) readline();
}

echo "VETOR RESULTANTE:\n";
for ($i = 0; $i < $n; $i++) {
    $vetC[$i] = $vetA[$i] + $vetB[$i];
    echo $vetC[$i]."\n";
}
