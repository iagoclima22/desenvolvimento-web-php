<?php 
// lendo arquivos CSV com php
function lerCsv($nomeArquivo){
        $users = [];

    if(file_exists($nomeArquivo)):
        $abrirArquivo = fopen($nomeArquivo, 'r');
        while(($linha = fgetcsv($abrirArquivo, 0, ',')) !== FALSE){
            $users[] = $linha;
        }
        fclose($abrirArquivo);

    else:
        echo "Arquivo não encontrado, verifique o caminho digitado... \n";
    endif;

    return $users;
}

$nomeArquivo = "users.csv";

$dadosLidos = lerCsv($nomeArquivo);

if(count($dadosLidos) > 0):
    echo "Dados encontrados... \n";
    foreach($dadosLidos as $dados){
        echo implode(' , ',$dados) ."\n";
    }
else:
    echo "Não encontramos dados nenhum... \n";
endif;

?>
