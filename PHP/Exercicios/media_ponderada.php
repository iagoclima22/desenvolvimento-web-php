<?php
function calcularMedia($n1, $n2, $n3) {
    $media = ($n1 * 2 + $n2 * 3 + $n3 * 5) / 10;
    return $media;
}

echo "Quantos casos voce vai digitar? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    echo "Digite tres numeros:\n";
    $n1 = (float) readline();
    $n2 = (float) readline();
    $n3 = (float) readline();

    $result = calcularMedia($n1, $n2, $n3);
    echo "MEDIA = ".number_format($result, 1)."\n";
}
?>
