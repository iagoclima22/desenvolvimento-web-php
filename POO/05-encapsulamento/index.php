<?php

require_once "Carro.php";

$c = new Carro("Civic", "Honda", "2020");
echo $c->marca."<br>";
echo $c->modelo."<br>";
echo $c->ano."<br>";

echo "<br> <hr> <br>";

$c->exibirDetalhesCarro();