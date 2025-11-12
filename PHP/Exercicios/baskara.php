<?php 
echo "Coeficiente a: ";
$a = (float) readline();

echo "Coeficiente b: ";
$b = (float) readline();

echo "Coeficiente c: ";
$c = (float) readline();

$delta = pow($b, 2) - 4 * $a * $c;

if ($delta >= 0){
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "X1 = ".number_format($x1, 4)."\n";
    echo "X2 = ".number_format($x2, 4);
}
else{
    echo "Esta equação não possui rapizes reais";
}
?>
