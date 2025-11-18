<?php
echo "Qual a quantidade de linhas da matriz? ";
$m = (int) readline();
echo "Qual a quantidade de colunas da matriz? ";
$n = (int) readline();

for ($i = 0; $i < $m; $i++) {
    $numLinha = $i + 1;
    echo "Digite os elementos da ".$numLinha."a linha:\n";
    for ($j = 0; $j < $n; $j++) {
        $matriz[$i][$j] = (float) readline();
    }
}

echo "VETOR GERADO:\n";
for($i = 0; $i < $m; $i++) {
    $vet[$i] = 0;
    for ($j = 0; $j < $n; $j++) {
        $vet[$i] += $matriz[$i][$j];
    }
    echo number_format($vet[$i], 1)."\n";
}
