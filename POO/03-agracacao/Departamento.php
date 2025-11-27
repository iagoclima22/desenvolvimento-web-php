<?php

class Departamento{
    public string $nomeDepartamento;
    public array $funcionarios = [];

    public function __construct($nomeDepartamento){
        $this->nomeDepartamento = $nomeDepartamento;
    }

    public function inserirFuncionarios(Funcionario $funcionario){
        $this->funcionarios[] = $funcionario;

    }

    public function listarFuncionarios(){
        echo "Funcionarios do departamento - ".$this->nomeDepartamento."<br>";
        foreach ($this->funcionarios as $funcionario){
            echo "Nome: ".$funcionario->nome. " Função: ".$funcionario->funcao."<br>";
        }
    }

}
