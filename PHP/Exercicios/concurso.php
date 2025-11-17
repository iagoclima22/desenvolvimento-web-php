<?php 
echo "Qual a quantidade de pessoas? ";
$n = (int) readline();

for ($i = 0 ; $i < $n; $i++) {
    $numPessoa = $i + 1;
    echo "Digite os dados da ".$numPessoa."a pessoa:\n";
    echo "Nome: ";
    $nome[$i] = readline();

    echo "Nota etapa 1: ";
    $nota1[$i] = (float) readline();

    echo "Nota etapa 2: ";
    $nota2[$i] = (float) readline();
}

for ($i = 0; $i < $n; $i++) {
    $media[$i] = ($nota1[$i] + $nota2[$i]) / 2;
}

echo "\nTABELA:\n";
for ($i = 0; $i < $n; $i++) {
    echo $nome[$i].", ".number_format($nota1[$i], 1).", ".number_format($nota2[$i], 1).", MEDIA = ".number_format($media[$i], 2)."\n";
}
