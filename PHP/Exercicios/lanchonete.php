<?php 
echo "Codigo do produto comprado: ";
$codigo = (int) readline();

echo "Quantidade comprada: ";
$qtd = (int) readline();

switch ($codigo){
    case 1:
        $preco = 5.00 * $qtd;
        break;
    case 2:
        $preco = 3.50 * $qtd;
        break;
    case 3:
        $preco = 4.80 * $qtd;
        break;
    case 4:
        $preco = 8.90 * $qtd;
        break;
    case 5: 
        $preco = 7.32 * $qtd;
        break;
    default:
        echo "Código inválido!";
}

echo "Valor a pagar: R$".number_format($preco, 2);
?>
