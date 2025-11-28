<?php

class ContaJuridica extends ContaBancaria{
    private string $cnpj;
    public function __construct(string $cnpj, string $titular, string $numConta, string $agencia, float $saldo)
    {
        $this->cnpj = $cnpj;
        parent::__construct($titular, $numConta, $agencia, $saldo);
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }
}