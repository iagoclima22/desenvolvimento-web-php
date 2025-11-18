<?php 
function mostrarTabuada($n) 
{
    for ($i = 1; $i <= 10; $i++) {
        echo $n." x ".$i." = ".$n*$i."\n";
    }
}

echo "Deseja a tabuada para qual valor? ";
$n = (int) readline();

mostrarTabuada($n);
