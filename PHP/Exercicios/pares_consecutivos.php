<?php 
echo "Digite um numero inteiro: ";
$n = (int) readline();

while ($n <> 0) {
    if ($n % 2 == 0) {
        $soma = 20 + 5 * $n;
    }
    else {
        $soma = 25 + 5 * $n;
    }

    echo "SOMA = $soma\n";

    echo "Digite um numero inteiro: ";
    $n = (int) readline();
}
?>
