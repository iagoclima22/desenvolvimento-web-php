<?php 
echo "Digite a duracao em segundos: ";
$duracao = (int) readline();

$horas = intdiv($duracao, 3600);
$minutos = intdiv($duracao % 3600, 60);
$segundos = $duracao % 3600 % 60;

echo $horas.":".$minutos.":".$segundos;
?>
