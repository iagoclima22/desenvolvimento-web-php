<?php 
echo "Quantos numeros voce vai digitar? ";
$n = (int) readline();

$fora = 0;
$dentro = 0;
for ($i = 0; $i < $n; $i++) {
    echo "Digite um numero: ";
    $x = (int) readline();
    if ($x >= 10 && $x <= 20) {
        $dentro++;
    } else {
        $fora++;
    }
}

echo $dentro." DENTRO\n";
echo $fora." FORA\n";

?>
