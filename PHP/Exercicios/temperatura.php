<?php 
echo "Voce vai digitar a temperatura em qual escala (C/F)? ";
$escala = readline();

if ($escala == "F") {
    echo "Digite a temperatura em Fahrenheit: ";
    $f = (float) readline();
    $c = 5 / 9 * ($f - 32);
    echo "Temperatura equivalente em Celsius: ".number_format($c, 2);
}
elseif($escala == "C") {
    echo "Digite a temperatura em Celsius: ";
    $c = (float) readline();
    $f = (9 * $c / 5) + 32;
    echo "Temperatura equivalente em Fahrenheit: ".number_format($f, 2);
}
?>
