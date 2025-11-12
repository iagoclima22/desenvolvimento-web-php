<?php 

echo "Dados da primeira pessoa:\n";
echo "Nome: ";
$nome1 = readline();
echo "Idade: ";
$idade1 = readline();

echo "Dados da segunda pessoa:\n";
echo "Nome: ";
$nome2 = readline();
echo "Idade: ";
$idade2 = readline();

$media = ($idade1 + $idade2) / 2;

echo "A idade média de ".$nome1." e ".$nome2." é de ".number_format($media, 1);

?>
