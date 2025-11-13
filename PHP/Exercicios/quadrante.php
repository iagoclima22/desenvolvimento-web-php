<?php
do{
    echo "Digite os valores das coordenadas X e Y:\n";
    $x = (int) readline();
    $y = (int) readline();

    if($x > 0 && $y > 0) {
        echo "QUADRANTE Q1\n";
    }
    elseif($x < 0 && $y > 0) {
        echo "QUADRANTE Q2\n";
    }
    elseif($x < 0 && $y < 0) {
        echo "QUADRANTE Q3\n";
    }
    elseif($x > 0 && $y < 0) {
        echo "QUADRANTE Q4\n";
    }

} while($x <> 0 && $y <> 0)
?>
