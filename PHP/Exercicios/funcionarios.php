<?php 
echo "Quantos funcionarios serao digitados? ";
$n = (int) readline();

$maior = 0;
$somaSalarioMedio = 0;
$cont = 0;
for ($i = 1; $i <= $n; $i++) {
    echo "Digite os dados do ".$i."o funcionario:\n";
    echo "Nome: ";
    $nome = readline();
    echo "Salario: ";
    $salario = (float) readline();
    
    if ($salario > $maior) {
        $maior = $salario;
        $quemGanhaMais = $nome;
    }

    if ($salario >= 5000 && $salario <= 10000) {
        $somaSalarioMedio += $salario;
        $cont++;
    }
}

$salarioMedio = $somaSalarioMedio / $cont;

echo "\n";
echo "Funcionario com maior salario: $quemGanhaMais\n";
echo "Salario medio de quem ganha de R$5000.00 a R$10000.00 = R$".number_format($salarioMedio, 2);
?>
