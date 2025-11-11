<?php 
echo "Digite o valor do produto: ";
$valor = (float) (readline());

if ($valor > 100) {
    $desconto = 15 / 100 * $valor;
}
else {
    $desconto = 5 / 100 * $valor;
}

$valorFinal = $valor - $desconto;
echo "O valor do produto com o desconto aplicado é $valorFinal";

?>
