<?php 

$string = "  Eu sou uma string  ";
$string1 = "EU SOU UMA STRING";
$string2 = "  Eu sou uma nova string";
$string3 = "Eu sou uma nova string  ";
$codigo = "123";

$lower = strtolower($string1);
$upper = strtoupper($string3);
$cap =  ucfirst(strtolower($string1));
$cap2 =  ucwords(strtolower($string1));

echo "Minusculo: $lower \n";
echo "Maiusculo: $upper \n";
echo "Captalize: $cap \n";
echo "Captalize: $cap2 \n";

$padl = str_pad($codigo, 6, '0', STR_PAD_LEFT);
$padr = str_pad($codigo, 6, '0', STR_PAD_RIGHT);

echo "Valor original: $codigo \n";
echo "Inserindo a esquerda: $padl \n";
echo "Inserindo a direita: $padr \n";


# trim - ltrim - rtrim : responsável por eliminar os espaços em branco
$trim = trim($string);
$ltrim = ltrim($string);
$rtrim = rtrim($string);
echo "$string \n";
echo "$trim \n";
echo "$ltrim \n";
echo "$rtrim \n";

# strlen : mostrar a quantidade de caracteres de uma string
$len = strlen($string3);
echo "A string possui $len caracteres \n";
# substr - mostrar um determinado numero de caracteres
$sbs = substr($strings, 4, 9);
echo "$sbs \n";


?>
