<?php 
echo "Qual a quantidade de atletas? ";
$n = (int) readline();


$somaPeso = 0;
$maiorAltura = 0;
$atletaMaisAlto = 0;
$contHomens = 0;
$somaAlturaMulheres = 0;
$contMulheres = 0;
for ($i = 1; $i <= $n; $i++) {
    echo "Digite os dados do atleta numero ".$i.":\n";

    echo "Nome: ";
    $nome = readline();

    echo "Sexo: ";
    $sexo = readline();
    while ($sexo <> "F" && $sexo <> "M") {
        echo "Valor Invalido! Favor digitar F ou M: ";
        $sexo = readline();
    }

    if ($sexo == "M") {
        $contHomens++;
    }

    echo "Altura: ";
    $altura = (float) readline();
    
    while ($altura <= 0) {
        echo "Valor invalido! Favor digitar um valor positivo: ";
        $altura = (float) readline();
    }

    if ($altura > $maiorAltura) {
        $maiorAltura = $altura;
        $atletaMaisAlto = $nome;
    }

    if ($sexo == "F") {
        $somaAlturaMulheres += $altura;
        $contMulheres++;
    }

    echo "Peso: ";
    $peso = (float) readline();
    while ($peso <= 0) {
        echo "Valor invalido! Favor digitar um valor positivo: ";
        $peso = (float) readline();
    }
    $somaPeso += $peso;
}

$pesoMedio = $somaPeso / $n;

$porcentHomens = 100 * $contHomens / $n;

echo "\n";
echo "Peso médio dos atletas: ".number_format($pesoMedio, 2)."\n";
echo "Atleta mais alto: $atletaMaisAlto\n";
echo "Porcentagem de homens: ".number_format($porcentHomens, 2)."%\n";
if ($contMulheres == 0) {
    echo "Não há mulheres cadastradas";
}
else {
    $alturaMediaMulheres = $somaAlturaMulheres / $contMulheres;
    echo "Altura média das mulheres: ".number_format($alturaMediaMulheres, 2);
}

?>
