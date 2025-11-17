<?php
echo "Quantos elementos vai ter o vetor? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    echo "digite um numero: ";
    $vet[$i] = (int) readline();
}

$somaPares = 0;
$contPares = 0;
for ($i = 0; $i < $n; $i++) {
    if ($vet[$i] % 2 == 0) {
        $somaPares += $vet[$i];
        $contPares++;
    }
}

if ($contPares == 0) {
    echo "NENHUM NUMERO PAR";
}
else {
    $mediaPares = $somaPares / $contPares;
    echo "MEDIA DOS PARES = ".number_format($mediaPares, 1);
}
