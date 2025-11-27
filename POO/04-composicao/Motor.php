<?php
class Motor{
    public int $potencia;

    public function __construct($potencia){
        $this->potencia = $potencia;
    }

    public function apresentarPotencia(){
        echo "Este carro tem a potência de ".$this->potencia." de cavalos";
    }

}