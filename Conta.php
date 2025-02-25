<?php
class Conta
{
    private int $saldo;
    private string $nomeTitular;
    private string $numeroConta;

    public function setSaldo(int $saldo): void
    {
        $this->saldo = $saldo;
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