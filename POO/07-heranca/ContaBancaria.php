<?php

class ContaBancaria
{
    protected string $titular;
    protected string $numConta;
    protected string $agencia;
    protected float $saldo;

    public function __construct(string $titular, string $numConta, string $agencia, float $saldo)
    {
        $this->titular = $titular;
        $this->numConta = $numConta;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
    }

    public function depositar($valor)
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("Valor insuficiente!");
        }

        $this->saldo += $valor;

        echo "Deposito realizado com sucesso! <br>";
        echo "Seu novo saldo é de R$ {$this->saldo}";
    }

    public function sacar($valor)
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("Valor insuficiente!");
        }

        if ($valor > $this->saldo) {
            throw new InvalidArgumentException("Valor insuficiente!");
        }

        $this->saldo -= $valor;
        echo "Saque de R$ {$valor} realizado com sucesso!<br>";
        echo "Novo saldo é de R$ {$this->saldo}";
    }

    public function consultarSaldo()
    {
        echo "Saldo atual é de {$this->saldo}";
    }

    public function getTitular(): string
    {
        return $this->titular;
    }

    public function setTitular(string $titular): void
    {
        $this->titular = $titular;
    }

    public function getNumConta(): string
    {
        return $this->numConta;
    }

    public function setNumConta(string $numConta): void
    {
        $this->numConta = $numConta;
    }

    public function getAgencia(): string
    {
        return $this->agencia;
    }

    public function setAgencia(string $agencia): void
    {
        $this->agencia = $agencia;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
}
