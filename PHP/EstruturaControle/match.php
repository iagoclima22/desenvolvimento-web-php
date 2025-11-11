<?php 

$num1 = 10;
$num2 = 5;

$operacao = "";

$retorno = match($operacao){
    '+' => "Soma: ".$num1 + $num2,
    '-' => "Subtracao: ".$num1 - $num2,
    '*' => "Multiplicacao: ".$num1 * $num2,
    '/' => "Divisão: ".$num1 / $num2,
    default => "Operacao Invalida"
};
echo $retorno;

?>
