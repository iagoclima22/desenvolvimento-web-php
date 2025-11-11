<?php 

    $string = "  Eu sou uma string  ";
    $string1 = "EU SOU UMA STRING";
    $string2 = "  Eu sou uma nova string";
    $string3 = "Eu sou uma nova string  ";
    $codigo = "2";

    # trim : responsável por eliminar os espaços em branco
    $trim = trim($string);
    $ltrim = ltrim($string);
    $rtrim = rtrim($string);
    echo "$string \n";
    echo "$trim \n";
    echo "$ltrim \n";
    echo "$rtrim \n";

?>
