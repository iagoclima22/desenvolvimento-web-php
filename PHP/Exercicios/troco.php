<?php 
echo "Preço unitário do produto: ";
$preco = (float) readline();

echo "Quantidade comprada: ";
$qtd = (int) readline();

echo "Dinheiro recebido: ";
$dinheiroRecebido = (float) readline();

$troco = $dinheiroRecebido - ($preco * $qtd);

echo "TROCO = ".number_format($troco, 2);
?>
