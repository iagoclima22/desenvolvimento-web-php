<?php 
// trabalhando com funções

// função sem parâmetros 
function imprimirMensagem(){
    echo "Olá mundo! \n";
}

// função que recebe parãmetro
function mensagem($msg){
    echo "$msg \n";
}

// função com parâmetros e retornos
function soma($num1, $num2){
    $soma = $num1 + $num2;
    return $soma;
}




imprimirMensagem();
mensagem("Desejo uma boa semana para você!");
$ret = soma(2, 4);
echo "O resultado da função soma é: ".$ret; 

?>
