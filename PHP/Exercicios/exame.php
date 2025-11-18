<?php
function classificarGlicose($medida)
{
    if ($medida <= 100) {
        $classificacao = "Normal";
    }
    elseif ($medida <= 140) {
        $classificacao = "Elevado";
    }
    else {
        $classificacao = "Diabetes";
    }

    return $classificacao;
}

function classificarTriglicerideos($medida)
{
    if ($medida < 200) {
        $classificacao = "Desejável";
    }
    else {
        $classificacao = "Aumentado";
    }

    return $classificacao;
}

function classificarColesterol($medida)
{
    if ($medida < 200) {
        $classificacao = "Desejável";
    }
    elseif ($medida < 240) {
        $classificacao = "Limiar";
    }
    else {
        $classificacao = "Elevado";
    }

    return $classificacao;
}

echo "Medida de glicose: ";
$glicose = (float) readline();
$nivelGlicose = classificarGlicose($glicose);
echo "Classificação: $nivelGlicose\n";

echo "Medida de triglicerídeos: ";
$triglicerideos = (float) readline();
$nivelTriglicerideos = classificarTriglicerideos($triglicerideos);
echo "Classificação: $nivelTriglicerideos"."\n";

echo "Medida de colesterol: ";
$colesterol = (float) readline();
$nivelColesterol = classificarColesterol($colesterol);
echo "Classificação = $nivelColesterol";
