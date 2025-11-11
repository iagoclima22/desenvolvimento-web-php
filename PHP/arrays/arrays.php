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
// Inserindo valores em um array com o array_push
//print_r($num);
array_push($num,6,8,9,10);
sort($num);
//print_r($num);

// Excluindo valores em um array com o unset
unset($num[8],$num[9]);
//print_r($num);
//array_push($frutas, "Goiaba", "Melancia", "Melão");
print_r($frutas);

$frutas['e'] = "Goiaba";
$frutas['f'] = "Melancia";
$frutas['g'] = "Melão";

print_r($frutas);

/*
$totArray = count($num);
echo "Esse array possui $totArray itens \n";

$num[] = 6;
print_r($num);

$totA = count($num);
echo "Esse array agora possui $totA itens \n";

sort($num);
rsort($num);
print_r($num);



echo "Array numerico valor do indice 0 é $num[0] \n";
echo "Array assoc valor do indice 0 é $frutas[c] \n";

print_r($num);
print_r($frutas);
*/

?>
