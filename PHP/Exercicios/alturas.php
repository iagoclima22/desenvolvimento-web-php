<?php
echo "Quantas pessoas serao digitadas? ";
$n = (int) readline();

for ($i = 1; $i <= $n; $i++) {
    echo "Dados da ".$i."a pessoa:\n";
    echo "Nome: ";
    $vetNome[$i] = readline();
    echo "Idade: ";
    $vetIdade[$i] = (int) readline();
    echo "Altura: ";
    $vetAltura[$i] = (float) readline();
}

$somaAltura = 0;
for ($i = 1; $i <= $n; $i++) {
    $somaAltura += $vetAltura[$i];
}
$alturaMedia = $somaAltura / $n;

$contMenorDe16 = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($vetIdade[$i] < 16) {
        $contMenorDe16++;
    }
}
$porcentMenorDe16 = $contMenorDe16 * 100 / $n;

echo "\n";
echo "Altura média: ".number_format($alturaMedia, 2)."\n";
echo "Pessoas com menos de 16 anos: ".number_format($porcentMenorDe16, 1)."%\n";

for ($i = 1; $i <= $n; $i++) {
    if ($vetIdade[$i] < 16) {
        echo $vetNome[$i]."\n";
    }
}
?>
