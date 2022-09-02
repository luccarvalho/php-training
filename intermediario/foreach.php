<?php

$contasCorrentes = [
    12345678910 => ['titular' => 'Lucas', 'saldo' => 1000],
    12345678920 => ['titular' => 'Jorge', 'saldo' => 1500],
    12345678930 => ['titular' => 'Maria', 'saldo' => 2000]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}
