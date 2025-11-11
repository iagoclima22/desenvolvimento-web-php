<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    // Operadores lógicos

    $a = 9;
    $b = 7;
    $c = 14;
    // Ou ||
    $ou = ($a == $b || $a > 8 || $c < 13);
    var_dump($ou); 
    // E %%
    $e = ($a != $b && $a > 8 && $c < 15);
    var_dump($e); 
    
    
/*
    // Trabalhando com operadores
    $a = "a";
    $b = "c";
    $c = 9;
    $d = 5;

    // menor e maior que
    echo "Menor que Maior que = ";
    $menor = $c < $d;
    var_dump($menor);
    echo "<hr> <br>";

    $maior = $c > $d;
    var_dump($maior);
    echo "<hr> <br>";

    // Igualdade
    echo "Igualdade = ";
    $igual = $a == $b;
    var_dump($igual);
    echo "<hr> <br>";

    echo "Identico = ";
    $identico = $c === $d;
    var_dump($identico);
    echo "<hr> <br>";

    echo "Diferente = ";
    $dif = $c != $d;
    var_dump($dif);
    echo "<hr> <br>";
*/
    
    ?>

    
</body>
</html>
