<?php

class Funcionario
{
    protected string $nome;
    protected float $salario;

    public function __construct(string $nome, string $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    protected function calcularBonus(){
        return $this->salario * 0.10;
    }

    public function apresentarFuncionario(){
        return "Nome: $this->nome - Salario: $this->salario";
     }

}
