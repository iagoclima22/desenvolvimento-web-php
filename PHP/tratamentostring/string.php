<?php 

    $string = "  Eu sou uma string  ";
    $string1 = "EU SOU UMA STRING";
    $string2 = "  Eu sou uma nova string";
    $string3 = "Eu sou uma nova string  ";
    $codigo = "2";

    # trim - ltrim - rtrim : responsável por eliminar os espaços em branco
    $trim = trim($string);
    $ltrim = ltrim($string);
    $rtrim = rtrim($string);
    echo "$string \n";
    echo "$trim \n";
    echo "$ltrim \n";
    echo "$rtrim \n";

    # strlen : mostrar a quantidade de caracteres de uma string
    $len = strlen($string3);
    echo "A string possui $len caracteres \n";
    # substr - mostrar um determinado numero de caracteres
    $sbs = substr($strings, 4, 9);
    echo "$sbs \n";


?>
