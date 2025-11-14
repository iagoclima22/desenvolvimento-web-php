<?php 
function calcularFatorial($n){
    $fat = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fat *= $i; 
    }
    return $fat;
}


echo "Digite o valor de N: ";
$n = (int) readline();
$fat = calcularFatorial($n);
echo "FATORIAL = ".$fat."\n";
?>
