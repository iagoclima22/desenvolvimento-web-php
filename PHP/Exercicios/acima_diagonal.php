<?php
echo "Qual a ordem da matriz? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "Elemento [".$i.", ".$j."]: ";
        $mat[$i][$j] = (int) readline();
    }
}

function calcularDiagonal($n, array $matriz)
{
    $somaDiagonal = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $somaDiagonal += $matriz[$i][$j];
        }
    }

    return $somaDiagonal;
}

$somaDiagonalPrincipal = calcularDiagonal($n, $mat);

echo "SOMA DOS ELEMENTOS ACIMA DA DIAGONAL PRINCIPAL = $somaDiagonalPrincipal";
