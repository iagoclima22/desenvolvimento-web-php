<?php 
echo "Nome: ";
$nome = readline();

echo "Valor por hora: ";
$valorHora = (float) readline();

echo "Horas trabalhadas: ";
$horasTrabalhadas = (int) readline();

$pagamento = $valorHora * $horasTrabalhadas;

echo "O pagamento para ".$nome." deve ser ".number_format($pagamento, 2);
?>
