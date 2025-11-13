<?php
echo "Digite dois numeros:\n";
$x = (int) readline();
$y = (int) readline();
if ($x > $y) {
    echo "DECRESCENTE!\n";
} elseif ($x < $y) {
    echo "CRESCENTE!\n";
}

while ($x <> $y) {
    echo "Digite dois numeros:\n";
    $x = (int) readline();
    $y = (int) readline();
    if ($x > $y) {
        echo "DECRESCENTE!\n";
    } elseif ($x < $y) {
        echo "CRESCENTE!\n";
    }
}
?>
