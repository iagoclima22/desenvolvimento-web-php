<?php 
echo "Qual a ordem da matriz? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "Elemento [".$i.", ".$j."]: ";
        $matriz[$i][$j] = (int) readline();
    }
}

echo "DIAGONAL PRINCIPAL:\n";
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == $j) {
            echo $matriz[$i][$j]." ";
        }
    }
}

$contNegativos = 0;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($matriz[$i][$j] < 0) {
            $contNegativos++;
        }
    }
}

echo "\nQUANTIDADE DE NEGATIVOS = $contNegativos";
