<?php
class Conta
{
    private int $saldo = 0;
    private string $nomeTitular;
    private string $numeroConta;

    public function deposito(int $valor): void
    {
        if ($valor < 0) {
            echo "Valor inválido\n";
        } else {
            $this->saldo += $valor;
        }
    }
    public function saque(int $valor): void
    {
        if ($valor <= 0 || $valor > $this->saldo) {
            echo "Saldo insuficiente ou valor inserido incorretamente para saque\n";
        } else {
            $this->saldo -= $valor;
        }
    }
    public function getSaldo(): int
    {
        return $this->saldo;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(string $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}