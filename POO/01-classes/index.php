<?php
require_once "Pessoa.php";


$p = new Pessoa("Iago", 23);

$p2 = new Pessoa("Carlos", 30);

echo $p->nome." tem ".$p->idade." anos";
echo "<br> <hr> <br>";
echo $p->apresentar();

echo "<br> <hr> <br>";

var_dump($p); 
echo "<br> <hr> <br>";

echo $p2->nome." tem ".$p2->idade." anos";
echo "<br> <hr> <br>";
echo $p2->apresentar();

?>