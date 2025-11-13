<?php 
echo "Digite o valor de X: ";
$x = (int) readline();

for ($i = 1; $i <= $x; $i++) {
    if ($i % 2 != 0) {
        echo $i."\n";
    }
}
?>
