<?php

require_once "ContaBancaria.php";
require_once "ContaFisica.php";
require_once "ContaJuridica.php";

$cf = new ContaFisica("000.000.000-0", "Fulano de Tal", "0001234", "0021", 5500.00);
echo $cf->consultarSaldo();
echo "<br> <br>";
$cf->sacar(500);
echo "<br> <br>";
echo $cf->consultarSaldo();
$cf -> depositar(1000);
echo "<br>";
echo $cf->consultarSaldo();
echo "<br> <br>";

$cj = new ContaJuridica("00.000.000/000-0", "Ciclano da Silva", "1234567", "3368", 59500.00);
echo $cj->consultarSaldo();
