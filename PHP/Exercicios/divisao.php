<?php 
function calcularDivisao($numerador, $denominador) {
    if ($denominador == 0) {
        echo "DIVISAO IMPOSSIVEL";
    } else {
        $divisao = $numerador / $denominador;
        return $divisao;
    }
}


echo "Quantos casos voce vai digitar? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    echo "Entre com o numerador: ";
    $numerador = (float) readline();
    echo "Entre com o denominador: ";
    $denominador = (float) readline();

    $result = calcularDivisao($numerador, $denominador);
    echo "DIVISAO =".number_format($result, 2)."\n";
}
?>
