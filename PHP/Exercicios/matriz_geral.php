<?php
echo "Qual a ordem da matriz? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "Elemento [".$i.", ".$j."]: ";
        $mat[$i][$j] = (int) readline();
    }
}

$somaPositivos = 0;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($mat[$i][$j] > 0) {
            $somaPositivos += $mat[$i][$j];
        }
    }
}

echo "\nSOMA DOS POSITIVOS: ".number_format($somaPositivos,1)."\n\n";

echo "Escolha uma linha: ";
$linha = (int) readline();
for ($j = 0; $j < $n; $j++) {
    echo number_format($mat[$linha][$j], 1)." ";
}

echo "\n\nEscolha uma coluna: ";
$coluna = (int) readline();
for ($i = 0; $i < $n; $i++) {
    echo number_format($mat[$i][$coluna], 1)." ";
}

echo "\n\nDIAGONAL PRINCIPAL: ";
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == $j) {
            echo number_format($mat[$i][$j], 1)." ";
        }
    }
}

//Elevando os negativos ao quadrado
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($mat[$i][$j] < 0) {
            $mat[$i][$j] = pow($mat[$i][$j], 2);
        }
    }
}

echo "\n\nMATRIZ ALTERADA:\n";
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo number_format($mat[$i][$j], 1)." ";
    }
    echo "\n";
}
