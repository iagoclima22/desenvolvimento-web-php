<?php
class Carro{
    public string $modelo;
    public string $marca;
    public string $ano;

    public function __construct(string $modelo, string $marca, string $ano){
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function exibirDetalhesCarro(){
        echo "O carro ".$this->modelo." é da marca ".$this->marca." do ano ".$this->ano;
    }

}

?>