<?php 
echo "Quantos numeros voce vai digitar? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    echo "Digite um numero: ";
    $vet[$i] = (int) readline();
}

echo "\n";
echo "NUMEROS PARES:\n";
for ($i = 0; $i < $n; $i++) {
    if ($vet[$i] % 2 == 0) {
        echo $vet[$i]."  ";
    }
}

$contPares = 0;
for ($i = 0; $i < $n; $i++) {
    if ($vet[$i] % 2 == 0) {
        $contPares++;
    }
}

echo "\n\n";
echo "QUANTIDADE DE PARES = ".$contPares;
?>
