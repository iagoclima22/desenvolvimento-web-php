<?php 
echo "Digite as idades:\n";
$idade = (int) readline();

$soma = 0;
$cont = 0;
if ($idade < 0) {
    echo "IMPOSSIVEL CALCULAR";
}
else {
    while ($idade >+ 0) {
        $soma += $idade;
        $cont++;
        $idade = (int) readline();
    }

    $media = $soma / $cont;

    echo "MEDIA = ".number_format($media, 2);
}
?>
