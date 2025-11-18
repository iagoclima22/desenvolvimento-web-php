<?php
echo "Informe a quantidade de clientes: ";
$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    $num = $i + 1;
    echo "Dados do {$num}o. cliente:\n";

    echo "Nome: ";
    $vetNome[$i] = readline();

    echo "Telefone: ";
    $vetTelefone[$i] = readline();

    echo "Tipo: ";
    $vetTipo[$i] = (int) readline();

    echo "Minutos: ";
    $vetMinutos[$i] = (int) readline();

    echo "\n";
}

echo "\nInforme o preco basico e excedente de cada tipo de conta:\n";

for ($i = 0; $i < 3; $i++) {
    echo "Tipo $i:\n";
    for ($j = 0; $j < 2; $j++) {
        $matTipo[$i][$j] = (float) readline();
    }
}

for ($i = 0; $i < $n; $i++) {
    if ($vetMinutos[$i] <= 90) {
        switch ($vetTipo[$i]) {
            case 0:
                $vetValorConta[$i] = $matTipo[0][0];
                break;
            case 1:
                $vetValorConta[$i] = $matTipo[1][0];
                break;
            case 2:
                $vetValorConta[$i] = $matTipo[2][0];
                break;
        }
    } else {
        $excedente = $vetMinutos[$i] - 90;
        switch ($vetTipo[$i]) {
            case 0:
                $vetValorConta[$i] = $excedente * $matTipo[0][1] + $matTipo[0][0];
                break;
            case 1:
                $vetValorConta[$i] = $excedente * $matTipo[1][1] + $matTipo[1][0];
                break;
            case 2:
                $vetValorConta[$i] = $excedente * $matTipo[2][1] + $matTipo[2][0];
                break;
        }
    }
}

echo "\nRELATORIO DE CLIENTES:\n\n";

for ($i = 0; $i < $n; $i++) {
    echo $vetNome[$i] . ", " .
         $vetTelefone[$i] . ", Tipo " .
         $vetTipo[$i] . ", Minutos: " .
         $vetMinutos[$i] . ", Conta = R$ " .
         number_format($vetValorConta[$i], 2) . "\n";
}
