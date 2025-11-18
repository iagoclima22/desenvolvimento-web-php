<?php
echo "Qual a quantidade de linhas da matriz? ";
$m = (int) readline();
echo "Qual a quantidade de colunas na matriz? ";
$n = (int) readline();

for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "Elemento [".$i.", ".$j."]: ";
        $matriz[$i][$j] = (int) readline();
    }
}

function mostrarNegativos($matriz, $m, $n) {
    echo "VALORES NEGATIVOS:\n";
    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($matriz[$i][$j] < 0) {
                echo $matriz[$i][$j] . "\n";
            }
        }
    }
}

mostrarNegativos($matriz, $m, $n);
