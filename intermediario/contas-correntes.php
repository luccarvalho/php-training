<?php

$conta1 = ['titular' => 'Lucas', 'saldo' => 1000];

$conta2 = ['titular' => 'Jorge', 'saldo' => 1500];

$conta3 = ['titular' => 'Maria', 'saldo' => 2000];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
