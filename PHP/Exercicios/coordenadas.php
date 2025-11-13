<?php 
echo "Valor de X: ";
$x = (float) readline();

echo "Valor de Y: ";
$y = (float) readline();

if ($x > 0 && $y > 0) {
    echo "Q1";
}
elseif ($x < 0 && $y > 0) {
    echo "Q2";
}
elseif ($x < 0 && $y < 0) {
    echo "Q3";
}
elseif ($x > 0 && $y < 0) {
    echo "Q4";
}
elseif ($x != 0 && $y == 0) {
    echo "Eixo X";
}
elseif ($x == 0 && $y != 0) {
    echo "Eixo Y";
}
else {
    echo "Origem";
}
?>
