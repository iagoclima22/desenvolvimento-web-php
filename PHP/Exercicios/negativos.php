<?php 
echo "Quantos numeros voce vai digitar? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    echo "Digite um numero: ";
    $vet[$i] = (int) readline();
}

echo "NUMEROS NEGATIVOS:\n";

for ($i = 0; $i < $n; $i++) {
    if ($vet[$i] < 0) {
        echo $vet[$i]."\n";
    }
}
?>
