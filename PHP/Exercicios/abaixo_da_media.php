<?php 
echo "Quantos elementos vai ter o vetor? ";
$n = (int) readline();

for($i = 0; $i < $n; $i++) {
    echo "Digite um numero: ";
    $vet[$i] = (float) readline();
}

$somaVet = 0;
for ($i = 0; $i < $n; $i++) {
    $somaVet += $vet[$i];
}
$mediaVet = $somaVet / $n;

echo "\n";
echo "MEDIA DO VETOR = ".number_format($mediaVet, 3)."\n";

echo "ELEMENTOS ABAIXO DA MEDIA:\n";
for ($i = 0; $i < $n; $i++) {
    if ($vet[$i] < $mediaVet) {
        echo number_format($vet[$i], 1)."\n";
    }
}
