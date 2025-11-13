<?php 
echo "Digite a primeira nota: ";
$n1 = (float) readline();
while($n1 < 0 || $n1 > 10) {
    echo "Valor invalido! Tente novamente: ";
    $n1 = (float) readline();
}

echo "Digite a segunda nota: ";
$n2 = (float) readline();
while($n2 < 0 || $n2 > 10) {
    echo "Valor invalido! Tente novamente: ";
    $n2 = (float) readline();
}

$media = ($n1 + $n2) / 2;

echo "MEDIA = ".number_format($media, 2);
?>
