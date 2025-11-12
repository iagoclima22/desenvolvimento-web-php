<?php 
// Trabalhando com manipulação de arquivos com o php
function gerarArquivoCsv($nomeArquivo, $users){
    // verificar se os dados existem
    if(count($users) > 0):
        $escreverCsv = fopen($nomeArquivo, 'w');
        foreach($users as $dados){
            fputcsv($escreverCsv, $dados );
        }
        fclose($escreverCsv);
    else:
        echo "Não há dados";
    endif;
}

$users = [
    ["Nome", "Idade", "Email"],
    ["João", 34, "joao@gmail.com"],
    ["Maria", 24, "maria@gmail.com"],
    ["Pedro", 45, "pedro@gmail.com"],
    ["Tiago", 36, "tiago@gmail.com"]
];

$nomeArquivo = "users.csv";

gerarArquivoCsv($nomeArquivo, $users);

?>
