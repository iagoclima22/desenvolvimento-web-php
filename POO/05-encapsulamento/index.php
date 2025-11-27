<?php

require_once "Carro.php";

$c = new Carro("Civic", "Honda", "2020");

echo $c->getMarca()."<br>";
echo $c->getModelo()."<br>";
echo $c->getAno( )."<br>";

$c->setMarca("Fiat"); 

echo "<br> <hr> <br>";

$c->exibirDetalhesCarro();
