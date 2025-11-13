<?php 
echo "Renda anual com salário: ";
$rendaSalario = (float) readline();

echo "Renda anual com prestação de serviço: ";
$rendaServico = (float) readline();

echo "Renda anual com ganho de capital: ";
$ganhoCapital = (float) readline();

echo "Gastos médicos: ";
$gastosMedicos = (float) readline();

echo "Gastos educacionais: ";
$gastosEducacionais = (float) readline();

$salarioMensal = $rendaSalario / 12;
if ($salarioMensal < 3000) {
    $impostoSalario = 0;
}
elseif ($salarioMensal < 5000) {
    $impostoSalario = 0.10 * $rendaSalario;
}
else {
    $impostoSalario = 0.20 * $rendaSalario;
}

$impostoServico = 0.15 * $rendaServico;
$impostoCapital = 0.20 * $ganhoCapital;

$impostoBruto = $impostoSalario + $impostoServico + $impostoCapital;

$gastosDedutiveis = $gastosMedicos + $gastosEducacionais;
$maximoDedutivel = 0.30 * $impostoBruto;
if ($gastosDedutiveis > $maximoDedutivel) {
    $abatimento = $maximoDedutivel;
}
else {
    $abatimento = $gastosDedutiveis;
}

$impostoDevido = $impostoBruto - $abatimento;

echo "\n";
echo "RELATÓRIO DE IMPOSTO DE RENDA\n";
echo "\n";
echo "CONSOLIDADO DE RENDA:\n";
echo "Imposto sobre salário: ".number_format($impostoSalario, 2)."\n";
echo "Imposto sobre serviços: ".number_format($impostoServico, 2)."\n";
echo "Imposto sobre ganho de capital: ".number_format($impostoCapital, 2)."\n";
echo "\n";
echo "DEDUÇÕES:\n";
echo "Máximo dedutível: ".number_format($maximoDedutivel, 2)."\n";
echo "Gastos dedutíveis: ".number_format($gastosDedutiveis, 2)."\n";
echo "\n";
echo "RESUMO:\n";
echo "Imposto bruto total: ".number_format($impostoBruto, 2)."\n";
echo "Abatimento: ".number_format($abatimento, 2)."\n";
echo "Imposto devido: ".number_format($impostoDevido, 2)."\n";
?>
