<?php 
$alcool = 0;
$gasolina = 0;
$diesel = 0;

echo "Informe um codigo (1, 2, 3) ou 4 para parar: ";
$codigo = (int) readline();

while ($codigo <> 4) {
    if ($codigo == 1) {
        $alcool++;
    }
    elseif ($codigo == 2) {
        $gasolina++;
    }
    elseif ($codigo == 3) {
        $diesel++;
    }

    echo "Informe um codigo (1, 2, 3) ou 4 para parar: ";
    $codigo = (int) readline();
}

echo "MUITO OBRIGADO\n";
echo "Alcool: $alcool\n";
echo "Gasolina: $gasolina\n";
echo "Diesel: $diesel\n";
?>
