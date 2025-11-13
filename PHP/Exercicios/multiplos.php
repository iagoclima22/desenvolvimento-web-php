<?php 
echo "Digite dois numeros inteiros: \n";
$n1 = (int) readline();
$n2 = (int) readline();

if ($n1 % $n2 == 0 || $n2 % $n1 == 0) {
    echo "Sao multiplos";
}
else{
    echo "Nao sao multiplos";
}
?>
