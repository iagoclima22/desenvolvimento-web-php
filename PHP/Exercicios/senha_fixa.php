<?php 
$senhaValida = 2002;

echo "Digite a senha: ";
$senha = (int) readline();
while ($senha <> $senhaValida) {
    echo "Senha Invalida! Tente novamente: ";
    $senha = (int) readline();
}

echo "Acesso permitido!";
?>
