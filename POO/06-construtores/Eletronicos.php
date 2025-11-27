<?php

class Eletronicos
{
    protected string $marca;

    public function __construct(string $marca){
        $this->marca = $marca;
        echo "Eletronico criado com sucesso! <br>";
    }
}