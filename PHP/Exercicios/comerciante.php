<?php
echo "Serao digitados dados de quantos produtos? ";
$n = (int) readline();

for($i = 0; $i < $n; $i++) {
    $numProduto = $i + 1;
    echo "Produto ".$numProduto."\n";
    echo "Nome: ";
    $vetNome[$i] = readline();
    echo "Preco de compra: ";
    $vetPrecoCompra[$i] = (float) readline();
    echo "Preco de venda: ";
    $vetPrecoVenda[$i] = (float) readline();
}

for ($i = 0; $i < $n; $i++) {
    $vetLucro[$i] = $vetPrecoVenda[$i] - $vetPrecoCompra[$i];
    $vetPorcentLucro[$i] = $vetLucro[$i] * 100 / $vetPrecoCompra[$i];
}

$abaixoDe10 = 0;
$entre10e20 = 0;
$acimaDe20 = 0;

for ($i = 0; $i < $n; $i++) {
    if ($vetPorcentLucro[$i] < 10) {
        $abaixoDe10++;
    }
    elseif ($vetPorcentLucro[$i] >= 10 && $vetPorcentLucro[$i] <= 20) {
        $entre10e20++;
    }
    else {
        $acimaDe20++;
    }
}

$totalCompra = 0;
$totalVenda = 0;
for ($i = 0; $i < $n; $i++) {
    $totalCompra += $vetPrecoCompra[$i];
    $totalVenda += $vetPrecoVenda[$i];
}

$lucroTotal = $totalVenda - $totalCompra;

echo "\nRELATORIO:\n";
echo "Lucro abaixo de 10%: $abaixoDe10\n";
echo "Lucro entre 10% e 20%: $entre10e20\n";
echo "Lucro acima de 20%: $acimaDe20\n";
echo "Valor total de compra: ".number_format($totalCompra, 2)."\n";
echo "Valor total de venda: ".number_format($totalVenda, 2)."\n";
echo "Lucro total: ".number_format($lucroTotal, 2)."\n";
