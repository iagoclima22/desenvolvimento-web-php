<?php
require_once "Funcionario.php";
require_once "Departamento.php";

$f = new Funcionario("Iago", "Desenvolvedor");
$f1 = new Funcionario("João", "Gerente");

$d = new Departamento("TI");
$d1 = new Departamento("Análise");

$d->inserirFuncionarios($f);
$d1->inserirFuncionarios($f1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de funcionários do departamento <?= $d->nomeDepartamento; ?></h1>
    <?= $d->listarFuncionarios();?>

    <h1>Lista de funcionários do departamento <?= $d1->nomeDepartamento; ?></h1>
    <?= $d1 ->listarFuncionarios();?>


</body>
</html> 