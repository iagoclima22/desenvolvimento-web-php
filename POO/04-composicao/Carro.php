<?php

class Carro{
    public string $modelo;
    public $motor;

    public function __construct(string $modelo, int $potenciaMotor){
        $this->modelo = $modelo;
        $this->motor = new Motor($potenciaMotor);
    }

    function exibirDetalhesCarro(){
        echo "Carro modelo ".$this->modelo."<br>";
        $this->motor->apresentarPotencia();
    }

}