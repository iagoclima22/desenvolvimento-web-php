<?php
function fahrenheitParaCelsius($f)
{
    return 5 / 9 * ($f - 32);
}

echo "Digite a temperatura em Fahrenheit: ";
$f = (float) readline();

$result = fahrenheitParaCelsius($f);
echo "Temperatura em Celsius = ".number_format($result, 2);
