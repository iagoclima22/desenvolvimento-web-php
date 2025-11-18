<?php
echo "Qual a ordem da matriz? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "Elemento [".$i.", ".$j."]: ";
        $matriz[$i][$j] = (int) readline();
    }
}

function procurarMaiorElemento($matriz, $n) 
{
    echo "MAIOR ELEMENTO DE CADA LINHA:\n";
    for ($i = 0; $i < $n; $i++) {
        $maiorElemento = 0;
        for ($j = 0; $j < $n; $j++) {
            if ($matriz[$i][$j] > $maiorElemento) {
                $maiorElemento = $matriz[$i][$j];
            }
        }
        echo $maiorElemento."\n";
    }
}

$result = procurarMaiorElemento($matriz, $n);
