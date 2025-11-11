<?php 
# Trabalhando com arrays
$num = [1,2,3,4,5,7];
# arrays associativos
$frutas = [
    "a" => "Banana",
    "b" => "Abacaxi",
    "c" => "Maçã",
    "d" => "Uva"
];
$totArray = count($num);
echo "Esse array possui $totArray itens \n";

$num[] = 6;
print_r($num);

$totA = count($num);
echo "Esse array agora possui $totA itens \n";

sort($num);
rsort($num);
print_r($num);


/*
echo "Array numerico valor do indice 0 é $num[0] \n";
echo "Array assoc valor do indice 0 é $frutas[c] \n";

print_r($num);
print_r($frutas);
*/

?>
