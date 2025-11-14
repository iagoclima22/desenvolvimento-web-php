<?php 
function calcularPercentual($animal, $total) {
    $percentual = 100 * $animal / $total;
    return $percentual;
}


echo "Quantos casos de teste serao digitados? ";
$n = (int) readline();

$coelhos = 0;
$ratos = 0;
$sapos = 0;
for($i = 0; $i < $n; $i++) {
    echo "Quantidade de cobaias: ";
    $qtd = (int) readline();

    echo "Tipo de cobaia: ";
    $tipo = readline();

    if ($tipo == "C") {
        $coelhos += $qtd;
    } elseif ($tipo == "R") {
        $ratos += $qtd;
    } elseif ($tipo == "S") {
        $sapos += $qtd;
    }
}

$total = $coelhos + $ratos + $sapos;

$percentCoelhos = calcularPercentual($coelhos, $total);
$percentRatos = calcularPercentual($ratos, $total);
$percentSapos = calcularPercentual($sapos, $total);

echo "\n";
echo "RELATORIO FINAL\n";
echo "Total: $total cobaias\n";
echo "Total de coelhos: $coelhos\n";
echo "Total de ratos: $ratos\n";
echo "Total de sapos: $sapos\n";
echo "Percentual de coelhos: ".number_format($percentCoelhos, 2)."%\n";
echo "Percentual de ratos: ".number_format($percentRatos, 2)."%\n";
echo "Percentual de sapos: ".number_format($percentSapos, 2)."%\n";
?>
