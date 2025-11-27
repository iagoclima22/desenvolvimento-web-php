<?php
require_once "Carro.php";
require_once "Motor.php";

$c = new Carro("Fusca", 1500);

$c->exibirDetalhesCarro();
echo "<br> <hr> <br>";

$c1 = new Carro("Camaro", 150);
$c1->exibirDetalhesCarro();


?>