<?php 
echo "Digite as tres distancias: \n";
$d1 = (float) readline();
$d2 = (float) readline();
$d3 = (float) readline();

if ($d1 > $d2 && $d1 > $d3) {
    $maior = $d1;
}
elseif ($d2 > $d3) {
    $maior = $d2;
}
else {
    $maior = $d3;
}

echo "MAIOR DISTANCIA = ".number_format($maior, 2);
?>
