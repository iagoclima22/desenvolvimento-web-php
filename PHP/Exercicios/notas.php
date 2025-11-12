<?php 
echo "Digite a primeira nota: ";
$n1 = (float) readline();

echo "Digite a segunda nota: ";
$n2 = (float) readline();

$notaFinal = $n1 + $n2;

echo "NOTA FINAL = ".number_format($notaFinal, 1);

if($notaFinal < 60){
    echo "\nREPROVADO";
}
?>
