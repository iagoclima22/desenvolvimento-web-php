<?php

class Funcionario{
    public string $nome;
    public string $funcao;

    public function __construct($nome, $funcao) {
        $this->nome = $nome;
        $this->funcao = $funcao;
    }

    
}