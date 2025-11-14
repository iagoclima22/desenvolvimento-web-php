<?php 
function conferindoNumero($num) {
    if ($num % 2 == 0 && $num < 0) {
        echo "PAR NEGATIVO\n";
    } elseif ($num % 2 == 0 && $num > 0) {
        echo "PAR POSITIVO\n";
    } elseif ($num % 2 <> 0 && $num < 0) {
        echo "IMPAR NEGATIVO\n";
    } elseif ($num % 2 <> 0 && $num > 0) {
        echo "IMPAR POSITIVO\n";
    } else {
        echo "NULO\n";
    }
}

echo "Quantos numeros voce vai digitar? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    echo "Digite um numero: ";
    $num = (int) readline();

    $result = conferindoNumero($num);
}
?>
