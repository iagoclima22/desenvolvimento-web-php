<?php 
echo "Quantas pessoas serao digitadas? ";
$n = (int) readline();

for($i = 0; $i < $n; $i++) {
    $numPessoa = $i + 1;
    echo "Altura da ".$numPessoa."a pessoa: ";
    $vetAltura[$i] = (float) readline();
    echo "Genero da ".$numPessoa."a pessoa: ";
    $vetGenero[$i] = readline();
}

$menorAltura = $vetAltura[0];
for ($i = 0; $i < $n; $i++) {
    if ($vetAltura[$i] < $menorAltura) {
        $menorAltura = $vetAltura[$i];
    }
}

$maiorAltura = 0;
for ($i = 0; $i < $n; $i++) {
    if ($vetAltura[$i] > $maiorAltura) {
        $maiorAltura = $vetAltura[$i];
    }
}

$somaAltMulheres = 0;
$contMulheres = 0;
for ($i = 0; $i < $n; $i ++) {
    if ($vetGenero[$i] == "F") {
        $somaAltMulheres += $vetAltura[$i];
        $contMulheres++;
    }
}

$mediaAltMulheres = $somaAltMulheres / $contMulheres;

$contHomens = 0;
for ($i = 0; $i < $n; $i++) {
    if ($vetGenero[$i] == "M") {
        $contHomens++;
    }
}

echo "Menor altura = ".number_format($menorAltura, 2)."\n";
echo "Maior altura = ".number_format($maiorAltura, 2)."\n";
echo "Media das alturas das mulheres = ".number_format($mediaAltMulheres, 2)."\n";
echo "Numero de homens = $contHomens"."\n";
