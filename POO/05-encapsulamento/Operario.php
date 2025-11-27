<?php

class Operario extends Funcionario
{
    private string $cargo;

    public function __construct(string $nome, float $salario, string $cargo)
    {
        parent:: __construct($nome, $salario);
        $this->cargo = $cargo;       
    }

    public function gerarBonus() {
        $bonus = $this->calcularBonus();
        return "$this->nome receberá um salário de $this->salario e um bonus de $bonus.";
    }

}