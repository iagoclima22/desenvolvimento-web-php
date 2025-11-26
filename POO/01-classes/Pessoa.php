<?php

class Pessoa{
    public string $nome;

    public int $idade;


    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function correr() {
        return $this->nome." está correndo.";
    }

    public function apresentar() {
        return "Olá, me chamo {$this->nome} e tenho {$this->idade} anos de idade";
    }
    
}

?>