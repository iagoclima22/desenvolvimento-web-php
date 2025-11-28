<?php

class ContaFisica extends ContaBancaria
{
    private string $cpf;
    public function __construct(string $cpf, string $titular, string $numConta, string $agencia, float $saldo)
    {
        $this->cpf = $cpf;
        parent::__construct($titular, $numConta, $agencia, $saldo);
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}
