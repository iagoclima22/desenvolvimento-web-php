<?php

class Tv extends Eletronicos
{
    private string $modelo;
    private int $polegadas;

    public function __construct(string $modelo, int $polegadas, string $marca) {
        $this->modelo = $modelo;
        $this->polegadas = $polegadas;
        parent::__construct($marca);
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPolegadas() {
        return $this->polegadas;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setPolegadas($polegadas) {
        $this->polegadas = $polegadas;
    }

    public function apresentar() {
        echo "A tv da marca $this->marca é do modelo $this->modelo e tem $this->polegadas polegadas";
    }
}