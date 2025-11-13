<?php 
echo "Digite a medida da glicose: ";
$glicose = (float) readline();

if ($glicose <= 100) {
    echo "Classificacao: normal";
}
elseif ($glicose <= 140) {
    echo "Classificacao: elevado";
}
else {
    echo "Classificacao: diabetes";
}
?>
