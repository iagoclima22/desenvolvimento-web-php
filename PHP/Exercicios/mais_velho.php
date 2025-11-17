<?php 
echo "Quantas pessoas voce vai digitar? ";
$n = readline();

for ($i = 1; $i <= $n; $i++) {
    echo "Dados da ".$i."a pessoa:\n";
    echo "Nome: ";
    $vetNome[$i] = readline();
    echo "Idade: ";
    $vetIdade[$i] = (int) readline();
}

$idadeMaior = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($vetIdade[$i] > $idadeMaior) {
        $idadeMaior = $vetIdade[$i];
        $nomeMaisVelho = $vetNome[$i];
    }
}

echo "PESSOA MAIS VELHA = $nomeMaisVelho";
