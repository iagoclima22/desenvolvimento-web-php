<?php 
echo "Digite o salario da pessoa: ";
$salario = (float) readline();

if ($salario <= 1000) {
    $aumento = 0.2 * $salario;
    $porcentagem = "20 %";
}
elseif ($salario <= 3000) {
    $aumento = 0.15 * $salario;
    $porcentagem = "15 %";
}
elseif ($salario <= 8000) {
    $aumento = 0.10 * $salario;
    $porcentagem = "10 %";
}
else {
    $aumento = 0.05 * $salario;
    $porcentagem = "5%";
}

$novoSalario = $salario + $aumento;

echo "Novo salario = R$".number_format($novoSalario, 2)."\n";
echo "Aumento = R$".number_format($aumento, 2)."\n";
echo "Porcentagem = $porcentagem"."\n";
?>
