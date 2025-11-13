<?php 
echo "Primeiro valor: ";
$n1 = (int) readline();

echo "Segundo valor: ";
$n2 = (int) readline();

echo "Terceiro valor: ";
$n3 = (int) readline();

if ($n1 < $n2 && $n1 < $n3) {
    $menor = $n1;
}
elseif ($n2 < $n3) {
    $menor = $n2;
}
else {
    $menor = $n3;
}

echo "MENOR = $menor";
?>
