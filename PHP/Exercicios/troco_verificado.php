<?php 
echo "Preço unitário do produto: ";
$preco = (float) readline();

echo "Quantidade comprada: ";
$qtd = (float) readline();

echo "Dinheiro recebido: ";
$dinheiroRecebido = (float) readline();

$valorTotal = $preco * $qtd;

if ($dinheiroRecebido >= $valorTotal) {
    $troco = $dinheiroRecebido - $valorTotal;
    echo "TROCO = ".number_format($troco, 2);
}
else {
    $falta = $valorTotal - $dinheiroRecebido;
    echo "DINHEIRO INSUFUCIENTE. FALTAM ".number_format($falta, 2)." REAIS";
}
?>
