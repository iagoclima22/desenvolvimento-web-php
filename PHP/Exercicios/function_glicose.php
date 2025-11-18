<?php
function mostrarGlicose($medida) 
{
    if ($medida <= 100) {
        $classificacao = "Normal";
    }
    else if ($medida <= 140) {
        $classificacao = "Elevado";
    }
    else {
        $classificacao = "Diabetes";
    }

    return $classificacao;
}

echo "Digite o valor da glicose: ";
$medida = (float) readline();

$classificacao = mostrarGlicose($medida);

echo "Classificacao: $classificacao";
