<?php
function impostoSobreSalario($quantia)
{
    $salarioMensal = $quantia / 12;

    if ($salarioMensal < 3000) {
        return 0;
    }
    elseif ($salarioMensal < 5000) {
        return 0.10 * $quantia;
    }
    else {
        return 0.20 * $quantia;
    }
}

function impostoSobreServicos($quantia)
{
    return 0.15 * $quantia;
}

function impostoSobreGC($quantia)
{
    return 0.20 * $quantia;
}

function impostoBrutoTotal($salario, $servicos, $gc)
{
    return impostoSobreSalario($salario) + impostoSobreServicos($servicos) + impostoSobreGC($gc);
}

function abatimento($salario, $servicos, $gc, $gastosMedicos, $gastosEducacionais)
{
    $impostoBruto = impostoBrutoTotal($salario, $servicos, $gc);

    $totalGastos = $gastosMedicos + $gastosEducacionais;

    $limite = 0.30 * $impostoBruto;

    if ($totalGastos > $limite) {
        return $limite;
    } else {
        return $totalGastos;
    }
}

echo "Digite os dados do contribuinte:\n";

echo "Renda anual com salário: ";
$rendaSalario = (float) readline();

echo "Renda anual com prestação de serviço: ";
$rendaServico = (float) readline();

echo "Renda anual com ganho de capital: ";
$rendaGC = (float) readline();

echo "Gastos médicos: ";
$gastosMedicos = (float) readline();

echo "Gastos educacionais: ";
$gastosEducacionais = (float) readline();


$impSal = impostoSobreSalario($rendaSalario);
$impServ = impostoSobreServicos($rendaServico);
$impGC = impostoSobreGC($rendaGC);

$impostoBruto = impostoBrutoTotal($rendaSalario, $rendaServico, $rendaGC);

$abat = abatimento($rendaSalario, $rendaServico, $rendaGC, $gastosMedicos, $gastosEducacionais);

$impostoDevido = $impostoBruto - $abat;


echo "\nRELATÓRIO:\n";
echo "Imposto sobre salário: " . number_format($impSal, 2) . "\n";
echo "Imposto sobre serviços: " . number_format($impServ, 2) . "\n";
echo "Imposto sobre ganho de capital: " . number_format($impGC, 2) . "\n";
echo "Imposto bruto total: " . number_format($impostoBruto, 2) . "\n";
echo "Abatimento: " . number_format($abat, 2) . "\n";
echo "Imposto devido: " . number_format($impostoDevido, 2) . "\n";
