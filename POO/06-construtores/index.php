<?php
require_once "Eletronicos.php";
require_once "Tv.php";

$tv = new Tv("Smart tv", 50, "LG");
$tv->apresentar();

// $p = new Produto("caneta", 3.50);
// $p->apresentarProduto();