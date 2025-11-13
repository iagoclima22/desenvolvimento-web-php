<?php 
echo "Digite a quantidade de minutos: ";
$minutos = (int) readline();

if ($minutos <= 100) {
    $valor = 50.00;
}
else {
    $valor = 50.00 + ($minutos - 100) * 2;
}

echo "Valor apagar = R$".number_format($valor, 2);
?>
