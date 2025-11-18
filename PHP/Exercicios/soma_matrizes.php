<?php
echo "Quantas linhas vai ter cada matriz? ";
$m = (int) readline();
echo "Quantas colunas vai ter cada matriz? ";
$n = (int) readline();

echo "Digite os valores da matriz A:\n";
for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "Elemento [".$i.", ".$j."]: ";
        $matA[$i][$j] = (int) readline(); 
    }
}

echo "Digite os valores da matriz B:\n";
for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "Elemento [".$i.", ".$j."]: ";
        $matB[$i][$j] = (int) readline();
    }
}

function somarMatrizes($m, $n, $matA, $matB)
{
    echo "MATRIZ SOMA:\n";
    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $matC[$i][$j] = $matA[$i][$j] + $matB[$i][$j];
            echo $matC[$i][$j]." ";
        }
        echo "\n";
    }
}

somarMatrizes($m, $n, $matA, $matB);
