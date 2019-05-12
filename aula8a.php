<?php

include_once 'classes/aula8a/Banco.php';
include_once 'classes/aula8a/Itau.php';

$itau = new Itau();
$itau->setSaldo(1000);
echo "Saldo: " . $itau->getSaldo() . "<hr>";
$itau->sacar(240);
echo "Saldo: " . $itau->getSaldo() . "<hr>";
$itau->depositar(100);
echo "Saldo: " . $itau->getSaldo() . "<hr>";
