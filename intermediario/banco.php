<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '123.456.789-10' => ['titular' => 'Lucas', 'saldo' => 1000],
    '123.456.789-20' => ['titular' => 'Jorge', 'saldo' => 300],
    '123.456.789-30' => ['titular' => 'Maria', 'saldo' => 2000]
];

if (500 > $contasCorrentes['123.456.789-30']['saldo']) {
    exibeMensagem("Você não pode sacar um valor acima do seu saldo");
} else {
    $contasCorrentes['123.456.789-30']['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.456.789-20']['saldo']) {
    exibeMensagem("Você não pode sacar um valor acima do seu saldo");
} else {
    $contasCorrentes['123.456.789-20']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
