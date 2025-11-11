<?php   
    $nome = "Iago Campanhol de Lima";

    // str_contains
    echo "Utilizando o metodo str_contains \n";
    var_dump(str_contains($nome, "Campanhol"));

    // str_starts_with
    echo "Utilizando o metodo str_starts_with \n";
    var_dump(str_starts_with($nome, "I"));

    // str_ends_with
    echo "Utilizando o metodo str_ends_with \n";
    var_dump(str_ends_with($nome, "Campanhol"));

?>
