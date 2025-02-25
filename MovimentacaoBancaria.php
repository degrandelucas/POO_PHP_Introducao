<?php

require 'Conta.php';

$conta1 = new Conta();

$conta1->setNomeTitular('Lucas');
$conta1->setNumeroConta('1234-5');

echo "Saldo inicial: {$conta1->getSaldo()} \n";

$conta1->deposito(1000);

echo "Saldo apos deposito: {$conta1->getSaldo()} \n";

$conta1->saque(500);

echo "Saldo apos saque: {$conta1->getSaldo()} \n";


echo "O titular {$conta1->getNomeTitular()} possui o saldo de {$conta1->getSaldo()} na conta {$conta1->getNumeroConta()}";