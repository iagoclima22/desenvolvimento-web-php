<?php
echo "Quantos alunos serao digitados? ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    $numAluno = $i + 1;
    echo "Digite nome, primeira e segunda nota do ".$numAluno."o aluno:\n";
    $vetNome[$i] = readline();
    $vetNota1[$i] = (float) readline();
    $vetNota2[$i] = (float) readline();
}

echo "Alunos aprovados:\n";
for ($i = 0; $i < $n; $i++) {
    $vetMedia[$i] = ($vetNota1[$i] + $vetNota2[$i]) / 2;
    if ($vetMedia[$i] >= 6) {
        echo $vetNome[$i]."\n";
    }
}
