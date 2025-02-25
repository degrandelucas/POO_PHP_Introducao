<?php

require 'Conta.php';

$conta1 = new Conta();

$conta1->setSaldo(1000);
$conta1->setNomeTitular('Lucas');
$conta1->setNumeroConta('1234-5');

echo "O titular {$conta1->getNomeTitular()} possui o saldo de {$conta1->getSaldo()} na conta {$conta1->getNumeroConta()}";