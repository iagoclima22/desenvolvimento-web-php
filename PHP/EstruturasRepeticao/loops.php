<?php 
// Estruturas de Repetição
$pessoas = [
    ['id' => 1, 'nome' => 'Iago'],
    ['id' => 2, 'nome' => 'João'],
    ['id' => 3, 'nome' => 'Maria'],
    ['id' => 4, 'nome' => 'Pedro']
];

// Laço For
echo "LAÇO FOR <hr>";
for($i = 0; $i < count($pessoas); $i++){
    echo "O cliente ".$pessoas[$i]['nome']. " possui o id ".$pessoas[$i]['id'];
    echo "<hr>";
}


// Laço while
echo "<br> LAÇO WHILE <hr>";

$i = 0;
while($i < count($pessoas)){
    echo "O cliente ".$pessoas[$i]['nome']. " possui o id ".$pessoas[$i]['id'];
    echo "<hr>";
    $i++;
}


// Laço foreach
echo "<br> LAÇO FOREACH <hr>";
foreach($pessoas as $chave => $valor){
    echo "O cliente ".$valor['nome']. " possui o id ".$valor['id']." e está armazenado no índice ".$chave;
    echo "<hr>";
}

echo "Final do programa";

?>
