<?php

require_once "Funcionario.php";
require_once "Gerente.php";
require_once "Operario.php";

$g = new Gerente("Luis", 5000.00, "Gerente de projetos");

echo $g->apresentarFuncionario();
echo "<br> <hr> <br>";
echo $g->gerarBonus();





// require_once "Carro.php";

// $c = new Carro("Civic", "Honda", "2020");

// echo $c->getMarca()."<br>";
// echo $c->getModelo()."<br>";
// echo $c->getAno( )."<br>";

// $c->setMarca("Fiat"); 

// echo "<br> <hr> <br>";

// $c->exibirDetalhesCarro();