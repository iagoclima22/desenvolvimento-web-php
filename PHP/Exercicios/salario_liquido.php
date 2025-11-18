<?php
function imposto($quantia)
{
    if ($quantia < 4000) {
        $imposto = 0.2 * $quantia;
    }
    else {
        $imposto = 0.25 * $quantia;
    }

    return $imposto;
}

function previdencia ($quantia) {
    if ($quantia < 1500) {
        $previdencia = 0.1 * $quantia;
    }
    else {
        $previdencia = 0.15 * $quantia;
    }

    return $previdencia;
}

function salarioLiquido ($quantia)
{
    $valorLiquido = $quantia - imposto($quantia) - previdencia($quantia);
    return $valorLiquido;
}

echo "Digite o valor do salario bruto: ";
$quantia = (float) readline();

$valorLiquido = salarioLiquido($quantia);
echo "Salario liquido = R$".number_format($valorLiquido, 2);
