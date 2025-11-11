<?php 
// Estrutura de controle
// Switch

$num1 = 10; 
$num2 = 5;

$operacao = "*";

switch ($operacao){
    case '+':
        echo "Soma: ". $num1+$num2;
        break;
    case '-':
        echo "Subtração: ". $num1-$num2;
        break;
    case '*':
        echo "Multiplicação: ". $num1*$num2;
        break;
    case '/':
        echo "Divisão: ". $num1/$num2;
        break;
    default:
        echo "Operação inválida";
}

?>
