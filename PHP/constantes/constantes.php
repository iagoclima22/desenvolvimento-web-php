<?php
// definindo, atribuindo e recuperando valores de uma constante
define("NOME", "Iago Lima");
echo NOME;

echo "<br>";

const IDADE = 23;
echo IDADE;

// Constantes mágicas

echo "<hr>";
echo "A linha atual é a: ".__LINE__; // pega a linha atual
echo "<hr>";

echo "O caminho do arquivo atual é: ".__FILE__; // pega a linha atual
echo "<hr>";

echo "O nome do diretório atual é: ".__DIR__; // pega a linha atual
echo "<hr>";


?>
