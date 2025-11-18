<?php
function classificarImc($peso, $altura)
{
    $imc = $peso / pow($altura, 2);

    if ($imc < 20) {
        $classificacao = "abaixo do peso";                  
    }
    else if ($imc < 25) {
        $classificacao = "peso normal";
    }
    else if ($imc < 30) {
        $classificacao = "sobre peso";
    }
    else {
        $classificacao = "obeso";
    }

    return $classificacao;
}

echo "Digite o peso: ";
$peso = (float) readline();
echo "Digite a altura: ";
$altura = (float) readline();

$imc = classificarImc($peso, $altura);
echo "Resultado do IMC: $imc";
